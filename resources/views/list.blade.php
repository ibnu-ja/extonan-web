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
            <h2>{{ request()->get('huruf') ? 'Daftar Anime - '.request()->get('huruf') : 'Daftar Anime' }}</h2>
            

                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        @foreach ($tampil as $huruf)
                        <li class="page-item {{ request()->get('huruf') == $huruf->first_letter ? 'active' : '' }}">
                            @if (request()->get('huruf') == $huruf->first_letter)
                            <span class="page-link">
                                {{$huruf->first_letter}}
                                <span class="sr-only">(current)</span>
                            </span>
                            @else
                            <a class="page-link" href="{{ Request::url().'?huruf='.$huruf->first_letter }}"> {{$huruf->first_letter}}</a>
                            @endif
                        </li>
                        @endforeach
                    </ul>
                </nav>

                <ul class="">
                        @foreach($tampil as $data)
                            @foreach ($hello as $ree)
                            @if (substr($ree->judul, 0, 1) == $data->first_letter)

                            <li>
                                <a href=" {{Request::root().'/'.$ree->slug }}">{{$ree->judul}}</a>
                            </li>

                            @endif
                            @endforeach
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