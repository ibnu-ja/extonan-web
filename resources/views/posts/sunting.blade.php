@extends('layouts.app')
@section('navbar')
@include('partials.navbar2')
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">
                    Sunting {{$animes->judul}}
                </div>
                
                

                <div class="card-body">

                <div class="text-center">@php
                $res = explode('|', $gambar->dimensions);
                $ress = explode(',', $res[2]);
                @endphp
                <img src="{{url($gambar->lokasi.'/'.$ress[0].'/'.$gambar->nama )}}" style="width: {{ $ress[0] }}px;"> </div>

                    <form method="post" action="{{url('post/'.$animes->slug.'/sunting'  )}}" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="hidden" value="{{csrf_token()}}" name="_token" />
                            <label for="title" >Judul:</label>
                            <input type="text" value="{{ $animes->judul }}" class="form-control" name="judul" />
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <label for="title">Genre:</label>
                                <select class="selectpicker" data-live-search="true" name="genre[]" multiple="multiple">
                                    @foreach ($genress as $g)

                                    <option value=" {{ $g->slug }}" @foreach ($animes->genres as $w)
                                        {{$w->genre == $g->slug ? "selected" : ""}}
                                        @endforeach
                                        >
                                        {{$g->name}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-2">
                                <label for="title">Jenis:</label>
                                <select class="selectpicker" name="jenis">
                                    <option> - Pilih -</option>
                                    <option value="tv" {{$animes->jenis == 'tv' ? "selected" : ""}}> TV</option>
                                    <option value="movie" {{$animes->jenis == 'movie' ? "selected" : ""}}> Movie</option>
                                    <option value="bd" {{$animes->jenis == 'ova' ? "selected" : ""}}> OVA</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="title">Skor:</label>
                                <input type="number" value="{{ $animes->skor }}" class="form-control" name="skor" step="0.01" min="0" max="10" />
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="">Pilih gambar</label>
                            <input id="fileUpload" type="file" name="image">
                            <div id="image-holder"></div>
                        </div>
                        <div class="form-group">
                            <label for="description">Sinopsis:</label>
                            <textarea cols="10" rows="10" class="form-control" name="sinopsis">{{ $animes->sinopsis }}  </textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection