<?php

namespace App\Http\Controllers;

use App\Episode;

use Illuminate\Http\Request;

class EpisodeController extends Controller
{
    public function simpan(Request $request, $id)
    {
        $episodes = new Episode();
        $this->validate($request, [
            'anime_id' => 'string|required',
            'sub' => 'string|nullable|required',
            'res_480p' => 'string|nullable',
            'res_720p' => 'string|nullable',
            'res_1080p' => 'string|nullable',
        ]);
        $episodes->episode = $request->episode;
        $episodes->anime_id = $request->anime_id;
        $episodes->save();

        if (!empty($request->sub))
            $episodes->link()
                ->create(
                    [
                        'link' => $request->sub,
                        'res' => 'sub'
                    ]
                );
        if (!empty($request->res_480p))
            $episodes->link()
                ->create(
                    [
                        'link' => $request->sub,
                        'res' => '480p'
                    ]
                );
        if (!empty($request->res_720p))
            $episodes->link()
                ->create(
                    [
                        'link' => $request->sub,
                        'res' => '720p'
                    ]
                );
        if (!empty($request->res_1080p))
            $episodes->link()
                ->create(
                    [
                        'link' => $request->sub,
                        'res' => '1080p'
                    ]
                );
        return response()->json(['success' => 'Tambah episode berhasil.']);
    }
}
