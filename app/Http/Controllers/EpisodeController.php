<?php

namespace App\Http\Controllers;

use App\Episode;

use Illuminate\Http\Request;

class EpisodeController extends Controller
{
    public function simpan(Request $request, $id)
    {
        Episode::updateOrCreate(
            ['id' => $request->episode_id],
            ['episode' => $request->episode, 'anime_id' => $id]
        );
        return response()->json(['success' => 'Tambah episode berhasil.']);
    }
}
