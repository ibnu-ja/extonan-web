@extends('layouts.app')

@section('navbar')
@include('partials.navbar2')
@endsection

@section('content')
<div class="container">
        <a href="{{url('post/'.$anime->slug.'/tambah')}}" class="btn btn-primary my-2">Tambah Episode</a>
        <br>
        <h1>{{$anime->judul}}</h1>
        <div class="text-center">@php
                $res = explode('|', $gambar->dimensions);
                $ress = explode(',', $res[2]);
                @endphp
                <img src="{{url($gambar->lokasi.'/'.$ress[0].'/'.$gambar->nama )}}" style="width: {{ $ress[0] }}px;"> </div>
        <table class="table table-sm">

                <h4> Sinopsis </h4>

                <p style="white-space: pre-line">{{$anime->sinopsis}}</p>

                <thead>
                        <tr>
                                <td class="w-5">ID</td>
                                <td>Episode</td>
                                <td>Link</td>
                                <td>Link Iklan</td>
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
                                <td rowspan="{{ count($episode->links) }}">{{$episode->episode}}</td>
                                <td>
                                        @foreach(explode('|',$aa->link_org) as $linkkkkk)
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
                                        @foreach(explode('|',$aa->link_org) as $linkkkkk)
                                        @php
                                        $asli = explode(',', $linkkkkk)
                                        @endphp
                                        <a href="{{ $asli[1] }}"> {{ $asli[0] }} </a>
                                        @if($loop->last)
                                        @else
                                        |
                                        @endif
                                        @endforeach
                                </td>
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
                                        @endforeach
                                </td>
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

@endsection