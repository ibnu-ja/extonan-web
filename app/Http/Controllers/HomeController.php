<?php

namespace App\Http\Controllers;

use App\Anime;

use App\Episodes;
use Illuminate\Http\Request;
use App\Gambar;
use App\GenreList;
use Illuminate\Support\Facades\DB;
use App\Genres;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    { }

    /**
     * Show the application dashboard.
     * LEFT JOIN links ON links.episodes_id = episodes.id;
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        // select episodes.episode, episodes.updated_at, animes.judul, animes.slug from episodes left join animes on episodes.animes_id = animes.id

        $episodes = Episodes::select('episodes.episode', 'episodes.updated_at', 'animes.judul', 'animes.slug')->leftJoin('animes', 'episodes.animes_id', '=', 'animes.id')
            ->when($request->cari, function ($query) use ($request) {
                $query->where('episode', 'LIKE', "%{$request->cari}%")
                    ->orWhere('judul', 'LIKE', "%{$request->cari}%")
                    ->orWhereHas('animes', function ($query) use ($request) {
                        $query->whereHas('genres', function ($query) use ($request) {
                            $query->where('genre', 'LIKE', "%{$request->cari}%");
                        });
                    });
            })->orderBy('episodes.updated_at', 'DESC')->paginate(10);


        $episodes->appends($request->only('cari'));
        $q = $request->cari;
        return view('home', compact('episodes', 'q'));
    }

    public function anime($slug)
    {

        //     $artikel = Article::all(); 
        //  return view('article',['artikel' => $artikel]); 
        $anime = Anime::where('slug', '=', $slug)->first();
        $gambar = Gambar::where('anime_id', '=', $anime->id)->firstOrFail();
        $episodes = Episodes::where('animes_id', '=', $anime->id)->with('links')->orderBy('episodes.updated_at', 'DESC')->get();
        return view('shows', compact('episodes', 'anime', 'gambar'));
    }

    public function list(Request $request)
    {

        //SELECT SUBSTRING(judul, 1, 1) as first_letter, COUNT(id)  
        // FROM animes
        // GROUP BY first_letter
        // ORDER BY first_letter  

        $anime = new Anime();

        $tampil = DB::table('animes')
        ->select(DB::raw('SUBSTRING(judul, 1, 1) as first_letter'), DB::raw('count(animes.id) as hitung'))
        ->groupBy('first_letter')
        ->orderBy('first_letter')
        ->get();


        $hello = $anime->orderBy('judul')
        ->when($request->huruf, function ($query) use ($request) {
            $query->where('judul', 'LIKE', $request->huruf.'%');
            })
        ->get();
        return view('list', compact('tampil', 'hello'));
    }

    public function genre ($genre) {
        $h = new GenreList();

        $h = $h->where('slug','=',$genre)->first();

        $tampil = new Genres();
        $tampil = $tampil->where('genres.genre','=',$genre)->with('anime')->get();
        return view ('genre', compact('tampil', 'h'));
    }
    public function genreList () {
        $h = new GenreList();
        $h = $h->get();
        return view ('genrelist', compact('h'));
    }
}
