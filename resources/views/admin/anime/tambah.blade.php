@extends('atak.admin')
@section('judul', 'Tambah Anime - Manajemen')
@section('konten')
<!-- Section: Inputs -->
<section class="section mb-4">
    <form method="post" action="{{url('anime/tambah')}}" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title"><h5>Bidang Isian</h5></div>
                        <div class="card-text">
                            <div class="col">
                                @csrf
                                <div class="row">
                                    <div class="col">
                                        <div class="md-form">
                                            <i class="far fa-edit prefix"></i>
                                            <input type="text" id="judul" name="judul" class="form-control" value="{{ $anime->judul ?? '' }}">
                                            <label for="judul" name="judul" class="">Judul</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="md-form">
                                            <i class="fad fa-edit prefix"></i>
                                            <textarea id="form10" class="md-textarea form-control" name="judul_alt"
                                                form-control>{{ $anime->judul_alt ?? '' }}</textarea>
                                            <label for="judul_alt" name="judul_alt" class="">Judul alternatif. Untuk tiap
                                                judul
                                                gunakan baris baru</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="md-form">
                                            <select class="mdb-select md-form" name="genre[]" multiple
                                                searchable="Cari genre ....">
                                                <option value="" disabled selected>Pilih Genre</option>
                                                
                                                @foreach ($genres as $g)
                                                <option value=" {{ $g->genre }}" @isset($anime->genres)
                                                    @foreach ($anime->genres as $w)
                                                    {{$w->genre == $g->genre ? "selected" : ""}}
                                                    @endforeach
                                                @endisset
                                                    >{{$g->name}}</option>
                                                @endforeach
                                                
                                            </select>
                                            <button class="btn-save btn btn-primary btn-sm">Simpan</button>
                                        </div>
                                    </div>
                                    <div class="col mb-4">
                                        <div class="md-form">
                                            <select class="mdb-select md-form" name="jenis[]" multiple>
                                                @php
                                                    $jenis = explode(',',$anime->jenis ?? '');
                                                @endphp
                                                <option value="" disabled selected>Pilih Jenis</option>
                                                <option value="1" @foreach ($jenis as $item)
                                                {{$item == "1" ? "selected" : ""}}
                                                @endforeach
                                                >TV</option>
                                                <option value="2"
                                                @foreach ($jenis as $item)
                                                {{$item == "2" ? "selected" : ""}}
                                                @endforeach
                                                >Movie</option>
                                                <option value="3"
                                                @foreach ($jenis as $item)
                                                {{$item == "3" ? "selected" : ""}}
                                                @endforeach
                                                >OVA</option>
                                            </select>
                                            <button class="btn-save btn btn-primary btn-sm">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="md-form">
                                            <select class="mdb-select md-form" name="musim">
                                                <option value="" disabled selected>Pilih Musim</option>
                                                <option value="Spring" {{(isset($anime->musim) ? $anime->musim : null) == 'Spring' ? "selected" : ""}}
                                                    >Spring</option>
                                                    
                                                <option value="Summer" {{(isset($anime->musim) ? $anime->musim : null) == 'Summer' ? "selected" : ""}}>Summer</option>
                                                <option value="Fall" {{(isset($anime->musim) ? $anime->musim : null) == 'Fall' ? "selected" : ""}}>Fall</option>
                                                <option value="Winter" {{(isset($anime->musim) ? $anime->musim : null) == 'Winter' ? "selected" : ""}}>Winter</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="md-form">
                                            <input type="number" id="tahun" class="form-control" name="tahun" min="1800" value="{{ $anime->tahun ?? '' }}">
                                            <label for="tahun">Tahun</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="md-form">
                                            <input type="number" id="skor" class="form-control" name="skor" step="0.01"
                                                min="0" max="10" value="{{ $anime->skor ?? '' }}">
                                            <label for="skor">Skor</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mb-4">
                                        <div class="md-form">
                                            <i class="fas fa-i-cursor prefix"></i>
                                            <textarea id="sinopsis" class="md-textarea form-control" name="sinopsis"
                                                length="3200" rows="12">{{ $anime->sinopsis ?? '' }}</textarea>
                                            <label for="sinopsis">Sinopsis</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="file-upload-wrapper">
                    <input type="file" name="image" id="image" class="file-upload" data-height="450" data-default-file="{{isset($anime->gambar) ? url($anime->gambar->lokasi.'/img.'.$anime->gambar->ext ) : ''}}"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col mb-4 text-center">
                <div class="md-form">
                    <button type="submit" class="btn btn-default btn-rounded btn-lg btn-block">Kirim</button>
                </div>
            </div>
        </div>
    </form>
</section>
<!-- Section: Inputs -->
@endsection

@section('script')
<script>
    $(document).ready(function() {
        $('.datepicker').pickadate();
        $('.mdb-select').material_select();
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        });
    });
</script>
@endsection