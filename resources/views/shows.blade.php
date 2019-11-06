@extends('layouts.app')

@section('judul', $anime->judul.' - '.config('app.name', 'Laravel'))
@section('navbar')
@include('partials.navbar')
@endsection

@section('header')
@parent
@php
$res = explode('|', $gambar->dimensions);
$ress = explode(',', $res[2]);
$banner = explode(',', $res[0]);
$bannerImg = url($gambar->lokasi.'/'.$banner[0].'/'.$gambar->nama );
@endphp
<header class="masthead" style="background-image: url(' {{ $bannerImg }}')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="post-heading my-auto text-center ">
                    <div class="cover-img">
                        <img src="{{url($gambar->lokasi.'/'.$ress[0].'/'.$gambar->nama )}}" style="width: {{ $ress[0] }}px;">
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="post-heading  my-auto">
                    <h1>{{$anime->judul }}</h1>
                    <span class="">
                        <div class="rateit" data-rateit-mode="font" data-rateit-value="{{ number_format($anime->skor/2, 2)}}" data-rateit-min="0" data-rateit-max="5" data-rateit-readonly="true"></div>
                        ({{ number_format($anime->skor/2, 2)}} )
                    </span>
                    <h4> Sinopsis </h4>
                    <span class="meta">
                        <p class="my-0" style="white-space: pre-line">{{$anime->sinopsis }}</p>
                    </span>
                    <hr style="height:2px;border:none;color:#333;background-color:#fff;" >
                    <span class="meta">
                        <p class="my-0">Genre:
                            @foreach($anime->genres as $genree)
                            @php
                            $link = url('genre/'.$genree->genre)
                            @endphp
                            @if ($loop->last)
                            <a href=" {{ $link }}">{{ucfirst($genree->genre)}}</a>
                            @else
                            <a href=" {{ $link }}">{{ucfirst($genree->genre)}},</a>
                            @endif
                            @endforeach
                        </p>
                    </span>

                </div>
            </div>
        </div>
    </div>
</header>
@endsection

@section('content')

<div id="app" style="background-color: #ffffff">
    <main class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                </div>
                <div class="col-md-7">
                    <h2>Episode</h2>
                    <!------------------------------------------ aku ganteng mz---------------------------------------------------------->
                    <div class="rilisan">
                        @foreach($episodes as $data)
                        <div class="kepala">
                            <div class="baris cursor-pointer">
                                <a class="" style="text-decoration: none;" data-toggle="collapse" href="{{'#ep-'.\Illuminate\Support\Str::slug($data->episode)}}" role="button" aria-expanded="false" aria-controls="{{$anime->slug}}">
                                    <div class="head"> {{$anime->judul.' - '.$data->episode}}
                                        <div class="pl-3 resolution">
                                            @foreach ($data->links as $likk)
                                            <span class="releaseres" style="padding: 0 0.5em">{{$likk->res}}</span>
                                            @endforeach
                                        </div>
                                        <span class="float-right">@php
                                        $difference = \Carbon\Carbon::now()->diffInMinutes(\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $data->updated_at));
                                        @endphp
                                        @if ($difference < 60 )
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
                                         <div class="badan collapse" id="{{'ep-'.\Illuminate\Support\Str::slug($data->episode)}}">

                                            @foreach ($data->links as $aa)
                                            <div class="baris">
                                                <div class="isi">
                                                    <span><b>{{$aa->res}}:</b> </span>
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
                                                </div>
                                            </div>
                                            @endforeach
                                    </div>
                                    @endforeach
                            </div>
                            <!---------------------------------------------------------------------------------------------------->

                        </div>
                        <div class="col-md">

                            @include('widgets.placeholder')
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                        </div>
                        <div class="col-lg-7">
                            @include('layouts.comments', ['judul' => $anime->judul.' - '.config('app.name', 'Laravel'),
                            'id' => $anime->id,
                            'link'=> Request::fullUrl()])
                        </div>
                        <div class="col-lg-3"></div>
                    </div>
                </div>
				
				
				
                @endsection