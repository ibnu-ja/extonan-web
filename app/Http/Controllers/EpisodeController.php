<?php

namespace App\Http\Controllers;

use App\Anime;
use App\Episode;
use Illuminate\Http\Request;

class EpisodeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function tambah($id, $epId)
    {
        $anime = Anime::with('gambar', 'genres', 'episode')->findOrFail($id);
        return view('admin.anime.episode.tambah', compact('anime'));
    }
    public function simpan(Request $request, $id)
    {

        // echo $request->episode;
        // $link = $request->link;
        // $res = $request->res;
        // foreach ($link as $key => $n) {
        //     echo $res[$key]."</br>";
        //     $links = explode(PHP_EOL, $n);
        //     foreach ($links as $data) {
        //         $linkks = explode("|", $data);
        //         echo "<a href=".$linkks[0].">".$linkks[1]."</a> </br>";
        //     }
        // }
        // return $request->except('tambah');

        $episodes = new Episode();
        $this->validate($request, [
            'episode' => 'string|required'
        ]);

        $user = Episode::firstOrCreate(array(
            'id' => 'John',
            'episode' => 'John',
            'anime_id' => 'John'
        ));

        $episodes->episode = $request->episode;
        $episodes->anime_id = $request->anime_id;
        $episodes->save();

        if ($link = $request->link) {
            $res = $request->res;
            foreach ($link as $key => $n) {
                $episodes->link()
                    ->create(
                        [
                            'link' => $n,
                            'res' => $res[$key]
                        ]
                    );
            }
        }
        return redirect('anime/' . $id)->with('success', 'Tambah episode berhasil');
    }
}
