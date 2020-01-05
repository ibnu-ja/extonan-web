<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use App\GenreList;
use App\Anime;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Image;
use File;
use Yajra\DataTables\DataTables;

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

    public function index()
    {
        $results = Datatables::of(Anime::query()->with('genres')->get())
            ->addColumn('genres', function ($row) {
                $resultstr = array();
                foreach ($row->genres as $result) {
                    $resultstr[] = ucfirst($result->genre);
                }
                return implode(", ", $resultstr);
                // return $row->genres->genre;
            })
            ->addColumn('musim', function ($row) {
                return $row->musim . " " . $row->tahun;
            })
            ->addColumn('action', function ($row) {
                $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-primary btn-sm editProduct">OK</a>';
                $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct">Delete</a>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);

        if (request()->ajax()) {
            return $results;
        }

        return view('admin.anime.index');

        // return $results;
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
        $id = $this->createSlug(substr($this->shorten_string($request->get('judul'), 5), 0, 20));
        $animes->user_post_id = Auth::user()->id;
        $animes->judul = $request->get('judul');
        $animes->tahun = $request->get('tahun');
        $animes->judul_alt = $request->get('judul_alt');
        $animes->sinopsis = $request->get('sinopsis');
        $animes->skor = $request->get('skor');
        $animes->musim = $request->get('musim');
        $animes->id = $id;


        //jenis
        $jenis = implode(',', $request->get('jenis'));
        $animes->jenis = $jenis;
        $saved = $animes->save();


        if(!$saved){
            App::abort(500, 'Error');
        }
        
        //gambar
        $lokasi = $this->path . '/' . $id;

        $this->unggah($request,  $lokasi);
        foreach ($this->dimensions as $item) {
            $this->type[] = $item[0] . ',' . $item[1];
        }
        $animes->gambar()->create([
            'ext' => $request->file('image')->getClientOriginalExtension(),
            'dimensions' => implode('|', $this->type),
            'lokasi' => $this->loc . '/' . $id,
        ]);


        //genre
        foreach ($request->get('genre') as $genre) {
            $animes->genres()->create(['genre' => $genre]);
        }

        //simpan

        return redirect('anime')->with('success', 'Tambah anime berhasil');
    }

    public function tampil($id)
    {
        $anime = Anime::with('gambar', 'genres')->findOrFail($id);
        $resultstr = array();
        foreach ($anime->genres as $result) {
            $resultstr[] = ucfirst($result->genre);
        }
        $genres = implode(", ", $resultstr);
        return view('admin.anime.tampil', compact('anime', 'genres'));
    }

    public function unggah($request, $tempat)
    {

        $lokasi = storage_path($tempat);

        if (!File::isDirectory($lokasi)) {
            File::makeDirectory($lokasi);
        }

        $file = $request->file('image');
        Image::make($file)->save($lokasi . '/' . 'original.'.$file->getClientOriginalExtension());

        foreach ($this->dimensions as $row) {
            $canvas = Image::canvas($row[0], $row[1]);
            $resizeImage  = Image::make($file)->fit($row[0], $row[1]);
            $canvas->insert($resizeImage, 'center');
            $canvas->save($lokasi . '/' . $row[0].'.'.$file->getClientOriginalExtension() );
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
        if (!$allSlugs->contains('id', $slug)) {
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

    public function shorten_string($string, $wordsreturned)
    {
        $retval = $string;
        $string = preg_replace('/(?<=\S,)(?=\S)/', ' ', $string);
        $string = str_replace("\n", " ", $string);
        $array = explode(" ", $string);
        if (count($array) <= $wordsreturned) {
            $retval = $string;
        } else {
            array_splice($array, $wordsreturned);
            $retval = implode(" ", $array) . " ...";
        }
        return $retval;
    }
}
