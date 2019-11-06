<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anime;
use App\Links;
use App\Episodes;
use App\Gambar;

class EpisodesController extends Controller
{
    public function tambah($slug)
    {
        return view('posts.episode.tambah');
    }
    public function tampil($slug)
    {

        //     $artikel = Article::all(); 
        //  return view('article',['artikel' => $artikel]); 
        $anime = Anime::where('slug', '=', $slug)->first();
        $gambar = Gambar::where('anime_id', '=', $anime->id)->firstOrFail();
        $episodes = Episodes::where('animes_id', '=', $anime->id)->with('links')->get();
        return view('posts.episode.index', compact('episodes', 'anime', 'gambar'));
    }

    public function hapus($slugs, $id)
    {
        Episodes::destroy($id);
        return redirect()->back()->with('success', 'Berhasil hapus episode'); // the index method is the list blogs method that we will create in further lines;;
    }

    public function simpan($slug, Request $request)
    {
        $episodes = new Episodes();


        $this->validate($request, [
            'episode' => 'required'
        ]);


        $episodes->simpan([
            'episode' => $request->get('episode')
        ], $slug);

        $episodes->simpan($request->all(), $slug);
        if ($request->get('1080p')) $episodes->links()->create(['link' => $request->get('1080p'), 'res' => '1080p']);
        if ($request->get('720p')) $episodes->links()->create(['link' => $request->get('720p'), 'res' => '720p']);
        if ($request->get('480p')) $episodes->links()->create(['link' => $request->get('480p'), 'res' => '480p']);
        if ($request->get('sub')) $episodes->links()->create(['link' => $request->get('sub'), 'res' => 'sub']);

        return redirect('post/' . $slug)->with('success', 'Tambah episode berhasil'); // the index method is the list blogs method that we will create in further lines        
    }
    public function sunting($slug, $id)
    {
        $ep = Episodes::find($id);
        $links = Links::where('episodes_id', '=', $id)->get();
        return view('posts.episode.sunting', compact('ep', 'links'));
    }
    public function simpanSunting($slug, $id, Request $request)
    {
        $episodes = Episodes::find($id);
        $this->validate($request, [
            'episode' => 'required'
        ]);

        $episodes->episode = $request->get('episode');

        $episodes->simpan($request->all(), $slug);
        $episodes->links()->delete();
        if ($request->get('1080p')) $episodes->links()->create(['link' => $request->get('1080p'), 'res' => '1080p']);
        if ($request->get('720p')) $episodes->links()->create(['link' => $request->get('720p'), 'res' => '720p']);
        if ($request->get('480p')) $episodes->links()->create(['link' => $request->get('480p'), 'res' => '480p']);
        if ($request->get('sub')) $episodes->links()->create(['link' => $request->get('sub'), 'res' => 'sub']);
        return redirect('post/' . $slug)->with('success', 'Tambah episode berhasil'); // the index method is the list blogs method that we will create in further lines        
    }
}
