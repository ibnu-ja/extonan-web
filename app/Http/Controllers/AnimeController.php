<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Anime;
use App\Gambar;
use App\GenreList;
use Illuminate\Support\Str;


use Image;
use File;




class AnimeController extends Controller
{
    public $path;
    public $loc;
    public $dimensions;
    public $type = array();

    public function __construct()
    {
        $this->middleware('auth');
        $this->loc = 'storage/images';
        $this->path = 'app/public/images';
        $this->dimensions = [['1400', '450'], ['300', '425'], ['200', '300']];
    }
    public function tambah()
    {
        $genress = GenreList::all();
        return view('posts.tambah', compact('genress'));
    }

    public function simpan(Request $request)
    {
        $animes = new Anime();

        $this->validate($request, [
            'judul' => 'required',
            'sinopsis' => 'required',
            'jenis' => 'required',
            'genre' => 'required',
            'skor' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png'
        ]);
        $slug = $this->createSlug($request->get('judul'));
        $animes->user_id = Auth::user()->id;
        $animes->judul = $request->get('judul');
        $animes->sinopsis = $request->get('sinopsis');
        $animes->skor = $request->get('skor');
        $animes->slug = $slug;
        $animes->save();

        foreach ($request->get('genre') as $genre) {
            $animes->genres()->create(['genre' => $genre]);
        }
        $lokasi = $this->path . '/' . $slug;
        $gg = $slug . '-cover.' . $request->file('image')->getClientOriginalExtension();
        $this->unggah($request, $gg, $lokasi);
        foreach ($this->dimensions as $item) {
            $this->type[] = $item[0] . ',' . $item[1];
        }
        $animes->gambar()->create([
            'nama' => $gg,
            'dimensions' => implode('|', $this->type),
            'lokasi' => $this->loc . '/' . $slug,
        ]);

        return redirect('post')->with('success', 'Tambah anime berhasil');
    }

    public function hapus($slug)
    {
        $anime = Anime::select('id', 'slug')->where('slug', '=', $slug)->first();
        $lokasi = $this->path . '/' . $anime->slug;
        $this->cekDelet($lokasi);
        Anime::destroy($anime->id);
        return redirect()->back()->with('success', 'Berhasil hapus anime');
    }

    public function sunting($slug)
    {

        $genress = GenreList::all();
        $animes = Anime::where('slug', '=', $slug)->firstOrFail();
        $gambar = Gambar::where('anime_id', '=', $animes->id)->firstOrFail();

        return view('posts.sunting', compact('animes', 'genress', 'gambar'));
    }
    public function simpanSunting(Request $request, $slug)
    {
        $anime = Anime::where('slug', '=', $slug)->first();
        $this->validate($request, [
            'judul' => 'required',
            'sinopsis' => 'required',
            'jenis' => 'required',
            'genre' => 'required',
            'skor' => 'required',
            'image' => 'mimes:jpeg,jpg,png'
        ]);

        $slug = $this->createSlug($request->get('judul'), $anime->id);
        $anime->user_id = auth()->user()->id;
        $anime->judul = $request->get('judul');
        $anime->sinopsis = $request->get('sinopsis');
        $anime->skor = $request->get('skor');
        $anime->slug = $slug;
        $anime->save();
        $anime->genres()->delete();
        foreach ($request->get('genre') as $genre) {
            $anime->genres()->create(['genre' => $genre]);
        }


        if ($request->file('image')) {
            $anime->gambar()->delete();
            $lokasi = $this->path . '/' . $slug;
            $gg = $slug . '-cover.' . $request->file('image')->getClientOriginalExtension();
            $this->cekDelet($lokasi);
            $this->unggah($request, $gg, $lokasi);
            foreach ($this->dimensions as $item) {
                $this->type[] = $item[0] . ',' . $item[1];
            }
            $anime->gambar()->create([
                'nama' => $gg,
                'dimensions' => implode('|', $this->type),
                'lokasi' => $this->loc . '/' . $slug,
            ]);
        }

        return redirect('post')->with('success', 'Berhasil menyimpan suntingan');
    }

    public function tampil()
    {
        // $user = Auth::user();
        //join('animes', 'episodes.animes_id', '=', 'animes.id')
        // $animes = Anime::where('user_id', '=', $user->id)->get(); //untuk akun
        //https://laravel.io/forum/12-10-2014-eloquent-query-combine-with-and-join

        //get nya panjang asu
        $animes = Anime::select('users.name', 'users.email', 'animes.id', 'animes.judul', 'animes.slug', 'animes.jenis', 'animes.skor', 'animes.created_at', 'animes.updated_at')->with('genres')->with('episodes')->leftJoin('users', 'animes.user_id', '=', 'users.id')->orderBy('animes.id','DESC')->paginate(15);
        return view('posts.index', compact('animes'));
    }

    public function unggah($request, $fileName, $tempat)
    {

        $lokasi = storage_path($tempat);

        if (!File::isDirectory($lokasi)) {
            File::makeDirectory($lokasi);
        }

        $file = $request->file('image');
        Image::make($file)->save($lokasi . '/' . $fileName);

        foreach ($this->dimensions as $row) {
            $canvas = Image::canvas($row[0], $row[1]);
            $resizeImage  = Image::make($file)->fit($row[0], $row[1]);

            if (!File::isDirectory($lokasi . '/' . $row[0])) {
                File::makeDirectory($lokasi . '/' . $row[0]);
            }

            $canvas->insert($resizeImage, 'center');
            $canvas->save($lokasi . '/' . $row[0] . '/' . $fileName);
        }
    }
    public function cekDelet($tempat)
    {
        $lokasi = storage_path($tempat);
        if (File::isDirectory($lokasi)) {
            File::deleteDirectory($lokasi);
        }
    }

    public function createSlug($title, $id = 0)
    {
        // Normalize the title
        $slug = Str::slug($title, '-');

        // Get any that could possibly be related.
        // This cuts the queries down by doing it once.
        $allSlugs = $this->getRelatedSlugs($slug, $id);

        // If we haven't used it before then we are all good.
        if (!$allSlugs->contains('slug', $slug)) {
            return $slug;
        }

        // Just append numbers like a savage until we find not used.
        for ($i = 1; $i <= 10; $i++) {
            $newSlug = $slug . '-' . $i;
            if (!$allSlugs->contains('slug', $newSlug)) {
                return $newSlug;
            }
        }

        throw new \Exception('Can not create a unique slug');
    }
    protected function getRelatedSlugs($slug, $id = 0)
    {
        return Anime::select('slug')->where('slug', 'like', $slug . '%')
            ->where('id', '<>', $id)
            ->get();
    }
}
