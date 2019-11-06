@extends('layouts.app')
@section('navbar')
@include('partials.navbar2')
@endsection

@section('content')
<div class="container">
    <a href="{{url('post/tambah')}}" class="btn btn-primary my-2">Tambah Anime</a>
    <table class="table table-sm">
        <thead>
            <tr>
                <td class="w-5">ID</td>
                <td class="w-7">Judul</td>
                <td class="">Genre</td>
                <td>Jumlah Episode</td>
                <td>Dikirim oleh</td>
                <td colspan="2">Aksi</td>
            </tr>
        </thead>
        <tbody>
            @foreach($animes as $anime)
            <tr>
                <td>{{$anime->id}}</td>
                <td> <a href="{{url('post/'.$anime->slug)}}">{{$anime->judul}}</a> </td>
                <td> 
                    @foreach($anime->genres as $genree)
                    @if ($loop->last)
                    {{ucfirst($genree->genre)}}
                    @else
                    {{ucfirst($genree->genre)}}, 
                    @endif
                    @endforeach
                </td>
                <td> {{ count($anime->episodes) }}</td>
                <td><a href="mailto:{{$anime->email}}" class="">{{$anime->name}}</a></td>
                <td><a href=" {{ url('post/'.$anime->slug.'/sunting') }} ">Edit</a></td>
                <td><a href=" {{ url('post/'.$anime->slug.'/hapus') }} ">Hapus</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div>{{ $animes }}</div>

        @endsection