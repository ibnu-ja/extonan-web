@extends('layouts.app')

@section('content')
<div class="container">
        <a href="{{url('post/'.$anime->slug.'/tambah')}}" class="btn btn-primary">Tambah</a>
        <br>
        <div class="rilisan">
            @foreach($episodes as $data)
                <div class="kepala">
                    <div class="baris cursor-pointer">
                        <div class="head"><a href="{{url('/'.$data->slug.'#'.$data->episode) }}" data-toggle="collapse" href="#collapseExample" aria-controls="collapseExample" >{{$anime->judul }} - {{ $data->episode}}
                            </a>
                            <div class="pl-3 resolution">
                            @foreach ($data->links as $likk)
                                <span class="releaseres" style="padding: 0 0.5em">{{$likk->res}}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        <table class="table table-sm">
                <thead>
                        <tr>
                                <td class="w-5">ID</td>
                                <td>Episode</td>
                                <td>Link</td>
                                <td>Res</td>
                                <td colspan="2">Action</td>
                        </tr>
                </thead>
                <tbody>
                        @foreach ($episodes as $episode)
                        @if (count($episode->links) > 0)
                        @foreach ($episode->links as $aa)
                        @if($loop->first)
                        <tr>
                                <td rowspan="{{ count($episode->links) }}">{{$episode->id}}</td>
                                <td rowspan="{{ count($episode->links) }}">{{$anime->judul}} - {{$episode->episode}}</td>
                                <td>
                                        @foreach(explode('|',$aa->link) as $linkkkkk)
                                        @php
                                        $asli = explode(',', $linkkkkk)
                                        @endphp
                                        <a href="{{ $asli[1] }}">{{ $asli[0] }}</a>
                                        @if($loop->last)
                                        @else
                                        |
                                        @endif
                                        @endforeach

                               </td>
                                <td>{{$aa->res}}</td>
                                <td rowspan="{{ count($episode->links) }}"> <a href="{{url('post/'.$anime->slug.'/sunting/'.$episode->id)}}">Edit</a></td>
                                <td rowspan="{{ count($episode->links) }}"> <a href="{{url('post/'.$anime->slug.'/hapus/'.$episode->id)}}">Hapus</a></td>
                        </tr>
                        @else
                        <tr>
                                <td>
                                @foreach(explode('|',$aa->link) as $linkkkkk)
                                        @php
                                        $asli = explode(',', $linkkkkk)
                                        @endphp
                                        <a href="{{ $asli[1] }}"> {{ $asli[0] }} </a>
                                        @if($loop->last)
                                        @else
                                        |
                                        @endif
                                        @endforeach</td>
                                <td>{{$aa->res}}</td>
                        </tr>
                        @endif
                        @endforeach
                        @else
                        <tr>
                                <td>{{$episode->id}}</td>
                                <td>{{$anime->judul}} - {{$episode->episode}}</td>
                                <td></td>
                                <td></td>
                                <td><a href="{{url('post/'.$anime->slug.'/sunting/'.$episode->id)}}">Edit</a></td>
                                <td><a href="{{url('post/'.$anime->slug.'/hapus/'.$episode->id)}}">Hapus</a></td>
                        </tr>

                        @endif
                        @endforeach
                </tbody>
        </table>
</div>
<div>{{ $anime }}</div>
<hr>
<div>{{$episodes}}</div>

@endsection