<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GenreList;
use App\Anime;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
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
        $genres = GenreList::all();
        
        return view('admin.anime.tambah', compact('genres'));
    }

    public function simpan(Request $request)
    {
        $animes = new Anime();

        $this->validate($request, [
            'judul' => 'required',
            'judul_alt' => 'required',
            'jenis' => 'required',
            'genre' => 'required',
            'tahun' => 'required',
            'musim' => 'required',
            'skor' => 'required',
            'sinopsis' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png'
        ]);
        $id = $this->createSlug($request->get('judul'));
        $animes->user_post_id = Auth::user()->id;
        $animes->judul = $request->get('judul');
        $animes->tahun = $request->get('tahun');
        $animes->judul_alt = preg_replace('#\s+#',',',trim($request->get('judul_alt')));
        $animes->sinopsis = $request->get('sinopsis');
        $animes->skor = $request->get('skor');
        $animes->musim = $request->get('musim');
        $animes->id = $id;
        
        
        //jenis
        $jenis = implode(',', $request->get('jenis'));
        $animes->jenis = $jenis;
        $animes->save();

        //gambar
        $lokasi = $this->path . '/' . $id;
        $gg = $id . '-cover.' . $request->file('image')->getClientOriginalExtension();
        $this->unggah($request, $gg, $lokasi);
        foreach ($this->dimensions as $item) {
            $this->type[] = $item[0] . ',' . $item[1];
        }
        $animes->gambar()->create([
            'nama' => $gg,
            'dimensions' => implode('|', $this->type),
            'lokasi' => $this->loc . '/' . $id,
        ]);
        

        //genre
        foreach ($request->get('genre') as $genre) {
            $animes->genres()->create(['genre' => $genre]);
        }
        
        //simpan
        
        return redirect('post')->with('success', 'Tambah anime berhasil');

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
    protected function getRelatedSlugs($slug)
    {
        return Anime::select('id')->where('id', 'like', $slug . '%')->get();
    }
}
