<?php

namespace App\Http\Controllers;

use App\Anime;
use App\GenreList;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function anime($id)
    {
        $anime = Anime::with('gambar', 'genres', 'episode')->findOrFail($id);
        $resultstr = array();
        foreach ($anime->genres as $result) {
            $resultstr[] = GenreList::findOrFail($result->genre)->name;
        }
        $genres = implode(", ", $resultstr);

        return view('anime');
    }
}
