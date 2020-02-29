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
    public function tambah($anime_id, $id = null)
    {
        $ep = Episode::with('link', 'anime')->find($id);
        $anime = Anime::select('id', 'judul')->findOrFail($anime_id);
        
        return view('admin.anime.episode.tambah', compact('ep', 'anime'));
    }
    public function simpan(Request $request, $anime_id, $id = null)
    {
        $this->validate($request, [
            'episode' => 'string|required',
            'thumbnail' => 'required|mimes:jpeg,jpg,png'
        ]);
        $episodes = Episode::firstOrNew([
            'id' => $id,
        ]);

        $episodes->episode = $request->episode;
        $episodes->anime_id = $request->anime_id;
        $lokasi = 'app/public/images/' . $request->anime_id . '/thumbnail/' . $id;
        $episodes->thumbnail = 'storage/images/' . $request->anime_id . '/thumbnail/' . $id;
        $episodes->ext = $request->file('thumbnail')->getClientOriginalExtension();
        $episodes->save();

        unggahResizeNama($request->thumbnail,  $lokasi, ['848', '480'], $episodes->id);

        if ($link = $request->link) {
            $res = $request->res;
            foreach ($link as $key => $n) {
                $episodes->link()
                    ->create(
                        [
                            'link' => $n,
                            'stream' => 0,
                            'res' => $res[$key],
                        ]
                    );
            }
        }
        return redirect('anime/' . $id)->with('success', 'Tambah episode berhasil');
    }
}
