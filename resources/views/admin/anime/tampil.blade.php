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
    <div class="modal fade" id="ajaxModal" tabindex="-1" role="dialog" aria-labelledby="ajaxModal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold" id="modelHeading"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body mx-3">
                    <form id="episodeForm" name="episodeForm" class="form-horizontal">
                        <input type="hidden" name="episode_id" id="episode_id">
                        <input type="hidden" name="anime_id" value="{{ $anime->id }}" id="anime_id">
                        <div class="md-form mb-5">
                            <i class="far fa-edit prefix prefix grey-text"></i>
                            <input type="text" id="episode" name="episode" class="form-control">
                            <label for="episode">Episode</label>
                        </div>
                        <small class="text-muted">Format: <code>Nama Hosting,URL</code>. Gunakan baris baru untuk tiap
                            link.</small>
                        <div class="md-form mb-5">
                            <i class="far fa-link prefix prefix grey-text"></i>
                            <textarea id="sub" class="md-textarea form-control" name="sub" rows="4"></textarea>
                            <label for="sub">Sub</label>
                        </div>
                        <div class="md-form mb-5">
                            <i class="far fa-link prefix prefix grey-text"></i>
                            <textarea id="480p" class="md-textarea form-control" name="480p" rows="4"></textarea>
                            <label for="480p">480p</label>
                        </div>
                        <div class="md-form mb-5">
                            <i class="far fa-link prefix prefix grey-text"></i>
                            <textarea id="720p" class="md-textarea form-control" name="720p" rows="4"></textarea>
                            <label for="720p">720p</label>
                        </div>
                        <div class="md-form mb-5">
                            <i class="far fa-link prefix prefix grey-text"></i>
                            <textarea id="1080p" class="md-textarea form-control" name="1080p" rows="4"></textarea>
                            <label for="1080p">1080p</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="submit" id="kirim" class="btn btn-default">Kirim</button>
                </div>
            </div>
        </div>
    </div>
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
                                    $juduls = preg_split('/\r\n|\r|\n/', $anime->judul_alt);
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
</section>
<!-- Section: Inputs -->
@endsection
@section('script')
<script src="/js/mdb-file-upload.min.js"></script>
<script>
    $(function() {
        $('#ajaxModal').appendTo("body") 
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#ajaxModal').click(function() {
            $('#episode_id').val('');
            $('#modelHeading').html("Tambah Episode Baru");
            $('#ajaxModal').modal('show');
        });

        $('#kirim').click(function(e) {
            e.preventDefault();
            $(this).html('Sending..');
            $.ajax({
                data: $('#episodeForm').serialize(),
                url: "{{ route('tambahEp', ['id' => $anime->id]) }}",
                type: "POST",
                dataType: 'json',
                success: function(data) {
                    $('#episodeForm').trigger("reset");
                    $('#ajaxModal').modal('hide');
                    $('.modal-backdrop').remove();
                },
                error: function(data) {
                    console.log('Error:', data);
                    $('#kirim').html('Save Changes');
                }
            });
        });

    });
</script>
@endsection