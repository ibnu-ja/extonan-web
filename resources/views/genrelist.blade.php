@extends('layouts.app')
@section('judul',config('app.name', 'Laravel').' - Anime List')

@section('navbar')
@include('partials.navbar')
@endsection

@section('header')
@parent
<header class="masthead" style="background-image: url('{{ secure_asset('img/banner.jpg') }}')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading my-auto">
                    <h1>{{ config('app.name', 'Laravel') }}</h1>
                    <span class="subheading">Akhirnya bisa revive</span>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-2">

        </div>
        <div class="col-md-7">
            <h2>Daftar Genre</h2>
            <ul>
                @foreach ($h as $data)
                <li><a href="{{url('genre/'.$data->slug)}}">{{$data->name}}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="col-md">
            @include('widgets.placeholder')
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-7">
            @include('layouts.comments', ['judul' => config('app.name', 'Laravel').' - Tempat Unduh Anime Takarir Indonesia ',
            'id' => 'beranda',
            'link'=> Request::fullUrl()])
        </div>
        <div class="col-lg-3"></div>
    </div>
</div>
@endsection