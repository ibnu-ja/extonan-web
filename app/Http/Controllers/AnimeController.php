<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use App\GenreList;
use App\Anime;
use App\Episode;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
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
        return view('admin.anime.index');
    }
    public function data()
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
                $btn = '<a href="'.url("/anime/".$row->id."/sunting").'" data-toggle="tooltip"  data-id="' . $row->id . '" title="Sunting" class="edit btn btn-primary btn-sm btn-rounded material-tooltip-main editProduct"><i class="fas fa-edit"></i></a>';
                $btn = $btn . ' <a href="'.url("/anime/".$row->id."/hapus").'" data-toggle="tooltip"  data-id="' . $row->id . '" title="Hapus" class="btn btn-danger btn-sm btn-rounded material-tooltip-main deleteProduct"><i class="fas fa-eraser"></i></a>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);

        if (request()->ajax()) {
            return $results;
        }
    }

    public function tambah(Request $request, $id = null)
    {
        $genres = GenreList::all();
        $anime = Anime::find($id);
        
        return view('admin.anime.tambah', compact('genres', 'anime'));
    }

    public function simpan(Request $request, $id = null)
    {
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
        $animes = Anime::firstOrNew([
            'id' => $id,
        ]);
        $id = isset($id) ?: $this->createSlug(substr($this->shorten_string($request->get('judul'), 5), 0, 20));
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
        if (!$saved) {
            App::abort(500, 'Error');
        }
        //gambar
        $lokasi = $this->path . '/' . $id;
        unggahCanvas($request->image,  $lokasi);
        foreach ($this->dimensions as $ukuran) {
            unggahCanvas($request->image,  $lokasi, $ukuran);
            $this->type[] = $ukuran[0] . ',' . $ukuran[1];
        }
        //gambar database
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
        $anime = Anime::with('gambar', 'genres', 'episode')->findOrFail($id);
        $resultstr = array();
        foreach ($anime->genres as $result) {
            $resultstr[] = GenreList::findOrFail($result->genre)->name;
        }
        $genres = implode(", ", $resultstr);
        $episodes = DataTables::of(Episode::with('link')->where('anime_id', '=', $anime->id))
        ->addColumn('action', function ($row) use ($anime) {
            $btn = '<a href="'.url("/episode/".$anime->id.'/'.$row->id."/sunting").'" data-toggle="tooltip"  data-id="' . $row->id . '" title="Sunting" class="edit btn btn-primary btn-sm btn-rounded material-tooltip-main editProduct"><i class="fas fa-edit"></i></a>';
            $btn = $btn . ' <a href="'.url("/episode/".$anime->id.'/'.$row->id."/hapus").'" data-toggle="tooltip"  data-id="' . $row->id . '" title="Hapus" class="btn btn-danger btn-sm btn-rounded material-tooltip-main deleteProduct"><i class="fas fa-eraser"></i></a>';
            return $btn;
        })
        ->make(true);
        if (request()->ajax()) {
            return $episodes;
        }
        return view('admin.anime.tampil', compact('anime', 'genres'));
    }
    public function destroy($id) {
        $anime = Anime::find($id);
        $lokasi = $this->path . '/' . $anime->id;
        hapusFolder($lokasi);
        if ($anime) Anime::destroy($id);
        return redirect()->back()->with('success', 'Berhasil hapus anime');
    }
    public function createSlug($title, $id = 0)
    {
        $slug = Str::slug($title, '-');
        $allSlugs = $this->getRelatedSlugs($slug, $id);
        if (!$allSlugs->contains('id', $slug)) {
            return $slug;
        }
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
