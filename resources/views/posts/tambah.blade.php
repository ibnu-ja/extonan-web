@extends('layouts.app')
@section('navbar')
@include('partials.navbar2')
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah anime</div>

                <div class="card-body">
                    <form method="post" action="{{url('post/tambah')}}" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="hidden" value="{{csrf_token()}}" name="_token" />
                            <label for="judul">Judul:</label>
                            <input type="text" class="form-control" name="judul" />
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <label for="genre">Genre:</label>
                                <select class="selectpicker" name="genre[]" multiple="multiple">
                                    @foreach ($genress as $g)
                                    <option value=" {{ $g->slug }}">{{$g->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-2">
                                <label for="jenis">Jenis:</label>
                                <select class="selectpicker" data-live-search="true" name="jenis">
                                    <option disabled selected> - Pilih -</option>
                                    <option value="tv"> TV</option>
                                    <option value="tv"> Movie</option>
                                    <option value="bd"> OVA</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="skor">Skor:</label>
                                <input type="number" class="form-control" name="skor" step="0.01" min="0" max="10" />
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="">Pilih gambar</label>
                            <input id="fileUpload" type="file" name="image">
                            <div id="image-holder"></div>
                        </div>
                        <div class="form-group">
                            <label for="sinopsis">Sinopsis:</label>
                            <textarea cols="10" rows="10" class="form-control" name="sinopsis"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection