@extends('layouts.app')
@section('judul',config('app.name', 'Laravel').' - Tempat Unduh Anime Takarir Indonesia ')

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
            <h2>Rilisan terbaru</h2>
            <div class="container py-2">
                <form action="/" method="get" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" name="cari" value="{{ $q }}" placeholder="Cari judul, episode, atau genre"> <span class="input-group-btn">
                    </div>
                </form>
            </div>
            <!------------------------------------------ aku ganteng---------------------------------------------------------->
            <div class="rilisan">
                @foreach($episodes as $data)
                <div class="kepala">
                    <div class="baris cursor-pointer">
                        <a style="text-decoration: none;" href="{{url('/'.$data->slug.'#ep-'.\Illuminate\Support\Str::slug($data->episode)) }}">
                            <div class="head">
                            {{$data->judul }} - {{ $data->episode}}
                            <span class="float-right">@php
                                        $difference = \Carbon\Carbon::now()->diffInMinutes(\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $data->updated_at));
                                        @endphp
                                        @if ($difference < 1 )
                                         {{(\Carbon\Carbon::now()->diffInSeconds(\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $data->updated_at))).' detik'}}
                                        @elseif ($difference < 60 )
                                         {{(\Carbon\Carbon::now()->diffInMinutes(\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $data->updated_at))).' menit'}}
                                        @elseif ($difference < 1440 )
                                         {{(\Carbon\Carbon::now()->diffInHours(\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $data->updated_at))).' jam'}}
                                          @elseif ($difference < 7200 )
                                          {{(\Carbon\Carbon::now()->diffInDays(\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $data->updated_at))).' hari'}}
                                          @else
                                           {{ \Carbon\Carbon::parse($data->updated_at)->format('d/m/Y')}}
                                            @endif</span>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            <!---------------------------------------------------------------------------------------------------->
            {{$episodes->links()}}

            

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