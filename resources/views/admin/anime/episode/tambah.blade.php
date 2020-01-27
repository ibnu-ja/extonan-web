@extends('atak.admin')
@section('judul', 'Tambah Episode')
@section('konten')
<!-- Section: Inputs -->
<section class="section mb-4">
    <form method="post" action="{{url('episode/'.$anime->id.'/baru/')}}" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-8">
                <div class="row mb-4">
                    <div class="col">
                        <div class="card card-body">
                            @csrf
                            <h5>{{url('anime/'.$anime->id.'/tambah/')}}</h5>
                            <div class="md-form input-group m-0">
                                <input type="hidden" name="anime_id" value="{{ $anime->id ?? '' }}">
                                <input type="hidden" name="episode_id" value="{{ $epId ?? '' }}">
                                <input type="text" aria-label="Episode" name="episode" class="form-control pl-0 mr-5 w-25" placeholder="Episode">
                                <input type="text" aria-label="Resolusi" class="form-control pl-0" name="tambah" id="tambah" placeholder="Resolusi">
                                <div class="input-group-append">
                                    <button class="btn btn-md btn-secondary m-0 px-3" type="button" id="tambahLink">Tambah Form</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="file-upload-wrapper">
                    <input type="file" name="thumbnail" id="thumbnail" class="file-upload" data-height="200" />
                </div>
            </div>
        </div>
        {{--
        <div class="row mb-4">
            <div class="col">
                <div class="card card-body">
                    <div class="card-text"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <div class="md-form m-0"><i class="far fa-link prefix prefix grey-text"></i><textarea id="'+res+'" class="md-textarea form-control" name="'+res+'" rows="4"></textarea><label for="'+res+'">'+res+'</label></div>
                    </div>
                </div>
             </div>
         </div>
         --}}
        <div class="row">
            <div class="col mb-4 text-center">
                <div class="md-form">
                    <button type="submit" class="btn btn-default btn-rounded btn-lg btn-block" id="tes">Kirim</button>
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
        $('[data-toggle="tooltip"]').tooltip();
        $('#tambahLink').click(function() {
            var res = $("#tambah").val();
            if ($.trim(res) != '') {
                var newDiv = $('\
                    <div class="row mb-4">\
                        <div class="col">\
                            <div class="card card-body">\
                                <div class="card-text">\
                                    <button type="button"  class="close tutup" data-dismiss="modal" aria-label="Close">\
                                        <span aria-hidden="true">×</span>\
                                    </button>\
                                    <div class="md-form m-0">\
                                        <i class="far fa-link prefix prefix grey-text"></i>\
                                        <textarea class="md-textarea form-control res" name=link[] rows="2"></textarea>\
                                        <label for="' + res + '">' + res + '</label>\
                                        <input type="hidden" class="res" name="res[]" value="' + res + '">\
                                    </div>\
                                </div>\
                            </div>\
                        </div>\
                    </div>');
                $('.col-md-8').append(newDiv);
            }
        });

        $(document).on('click', '.close.tutup', function() {
            $(this).closest('.row.mb-4').remove();
        });
    });
</script>
@endsection