<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anime;
use App\Links;
use App\Episodes;
use App\Gambar;

class EpisodesController extends Controller
{
    public function splitlink($lin)
    {
        $link = explode("|", $lin);
        $lingku = "";
        $i = 0;
        $hitung = count($link);
        foreach ($link as $linkkkkk) {
            $asli = explode(',', $linkkkkk);
            if ($i == $hitung - 1) {
                $lingku .= $asli[0] . "," . json_decode($this->bitly(str_replace("www.adtival.network", "autoratio.com", $this->shortlink($asli[1]))))->link;
            } else {
                $lingku .= $asli[0] . "," . json_decode($this->bitly(str_replace("www.adtival.network", "autoratio.com", $this->shortlink($asli[1]))))->link . "|";
            }
            $i++;
        }
        return $lingku;
    }

    public function shortlink($link, $token = "6e476a9cf637c101a9862dfe0a4b0e58611dc049")
    {
        $link = urlencode($link);
        $api_url = "https://www.adtival.network/api?api=%20{$token}&url={$link}";
        $shortlink = @json_decode(file_get_contents($api_url), TRUE);

        if ($shortlink["status"] === 'error') {
            return null;
        } else {
            return $shortlink["shortenedUrl"];
        }
    }

    public function bitly($long_url, $genericAccessToken = '4612534358a347d691390c2b4d6b74f97c24ed9a')
    {
        $apiv4 = 'https://api-ssl.bitly.com/v4/bitlinks';

        $data = array(
            'long_url' => $long_url
        );
        $payload = json_encode($data);

        $header = array(
            'Authorization: Bearer ' . $genericAccessToken,
            'Content-Type: application/json',
            'Content-Length: ' . strlen($payload)
        );

        $ch = curl_init($apiv4);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        return curl_exec($ch);
    }

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
        if ($request->get('1080p'))
            $episodes
                ->links()
                ->create(
                    [ //note to self: klo mau nambah kolom, jgn lupa tambah protected fillable di model
                        'link_org' => $request->get('1080p'),
                        'link' => $this->splitlink($request->get('1080p')),
                        'res' => '1080p'
                    ]
                );
        if ($request->get('720p'))
            $episodes
                ->links()
                ->create(
                    [ //note to self: klo mau nambah kolom, jgn lupa tambah protected fillable di model
                        'link_org' => $request->get('720p'),
                        'link' => $this->splitlink($request->get('720p')),
                        'res' => '720p'
                    ]
                );
        if ($request->get('480p'))
            $episodes
                ->links()
                ->create(
                    [ //note to self: klo mau nambah kolom, jgn lupa tambah protected fillable di model
                        'link_org' => $request->get('480p'),
                        'link' => $this->splitlink($request->get('480p')),
                        'res' => '480p'
                    ]
                );
        if ($request->get('sub'))
            $episodes
                ->links()
                ->create(
                    [ //note to self: klo mau nambah kolom, jgn lupa tambah protected fillable di model
                        'link_org' => $request->get('sub'),
                        'link' => $this->splitlink($request->get('sub')),
                        'res' => 'sub'
                    ]
                );
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
        if ($request->get('1080p'))
            $episodes
                ->links()
                ->create(
                    [ //note to self: klo mau nambah kolom, jgn lupa tambah protected fillable di model
                        'link_org' => $request->get('1080p'),
                        'link' => $this->splitlink($request->get('1080p')),
                        'res' => '1080p'
                    ]
                );
        if ($request->get('720p'))
            $episodes
                ->links()
                ->create(
                    [ //note to self: klo mau nambah kolom, jgn lupa tambah protected fillable di model
                        'link_org' => $request->get('720p'),
                        'link' => $this->splitlink($request->get('720p')),
                        'res' => '720p'
                    ]
                );
        if ($request->get('480p'))
            $episodes
                ->links()
                ->create(
                    [ //note to self: klo mau nambah kolom, jgn lupa tambah protected fillable di model
                        'link_org' => $request->get('480p'),
                        'link' => $this->splitlink($request->get('480p')),
                        'res' => '480p'
                    ]
                );
        if ($request->get('sub'))
            $episodes
                ->links()
                ->create(
                    [ //note to self: klo mau nambah kolom, jgn lupa tambah protected fillable di model
                        'link_org' => $request->get('sub'),
                        'link' => $this->splitlink($request->get('sub')),
                        'res' => 'sub'
                    ]
                );
        return redirect('post/' . $slug)->with('success', 'Tambah episode berhasil'); // the index method is the list blogs method that we will create in further lines        
    }
}
