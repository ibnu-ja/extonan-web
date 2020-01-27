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
        $this->loc = 'storage/images';
        $this->path = 'app/public/images';
        $this->dimensions = [['1400', '450'], ['300', '425'], ['200', '300']];
    }
    public function tambah($id, $epId = null)
    {
        $anime = Anime::with('gambar', 'genres', 'episode')->findOrFail($id);
              
        return view('admin.anime.episode.tambah', compact('anime', 'epId'));
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
            'episode' => 'string|required',
            'thumbnail' => 'required|mimes:jpeg,jpg,png'
        ]);

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
