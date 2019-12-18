@extends('atak.admin')
@section('judul', $anime->judul." - Manajemen")
@section('style')
<style>
    .info {
        font-weight: bold;
        color: black;
    }
</style>
@endsection
@section('konten')
<!-- Section: Inputs -->
<section class="section mb-4">
    <form method="post" action="{{url('anime/tambah')}}" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <h5>Sinopsis</h5>
                                </div>
                                <div class="card-text">
                                    <p style="white-space: pre-line">{{$anime->sinopsis}}</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <h5>Info</h5>
                                </div>
                                <div class="card-text">
                                    <div><span class="info">Judul Alt: </span>
                                        @php
                                        $juduls = explode(",", $anime->judul_alt);
                                        @endphp
                                        @foreach ($juduls as $judul)
                                        @if ($loop->last)
                                        {{$judul}}
                                        @else
                                        {{$judul}},
                                        @endif
                                        @endforeach
                                    </div>
                                    <div><span class="info">Musim: </span>{{$anime->musim}} {{$anime->tahun}}</div>
                                    <div><span class="info">Genre: </span>{{$genres}}</div>
                                    <div><span class="info">Skor: </span>{{$anime->skor}}</div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        @php
                        $res = explode('|', $anime->gambar->dimensions);
                        $ress = explode(',', $res[1]);
                        @endphp
                        <img src="{{url($anime->gambar->lokasi.'/'.$ress[0].'/'.$anime->gambar->nama )}}" style="width: 100%;">
                    </div>
                </div>

            </div>
        </div>
    </form>
</section>
<!-- Section: Inputs -->
@endsection
@section('script')
<script src="/js/mdb-file-upload.min.js"></script>
<script>
</script>
@endsection