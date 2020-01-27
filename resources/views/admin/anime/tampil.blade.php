@extends('atak.admin')
@section('judul', $anime->judul." - Manajemen")
@section('konten')
<!-- Section: Inputs -->
<section class="section mb-4">
    <div class="modal fade" id="jadwal" tabindex="-1" role="dialog" aria-labelledby="jadwal" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold" id="modelHeading"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body mx-3">
                    <form id="episodeForm" name="episodeForm" class="form-horizontal">
                        <input type="hidden" name="anime_id" value="{{ $anime->id }}" id="anime_id">
                        <small class="text-muted">Pilih tanggal, nanti langsung diambil harinya.</small>
                        <div class="md-form mb-5">
                            <input type="text" id="hari" class="form-control datepicker">
                            <label for="hari">Hari:</label>
                        </div>
                        <div class="md-form">
                            <input type="text" id="jam" class="form-control timepicker">
                            <label for="jam">Jam:</label>
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
                    <img src="{{url($anime->gambar->lokasi.'/'.$ress[0].'.'.$anime->gambar->ext )}}" style="width: 100%;">
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card card-body">
                <table id="data" class="table " cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Episode</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</section>
<!-- Section: Inputs -->
@endsection
@section('script')
<script>
    $(document).ready(function() {
        var table = $('#data').DataTable({
            processing: true,
            serverSide: true,
            columns: [{
                    data: 'id',
                    name: 'id'
                    // render: function(data, type, row) {
                    //     return "<a class='test' href='/anime/" + row.id + "'>" + row.judul + "</a>"
                },
                {
                    data: 'episode',
                    name: 'episode',
                    // searchable: true,
                    // visible: false
                }
            ],
            ajax: function(data, callback, settings) {
                settings.jqXHR = $.ajax({
                    "dataType": 'json',
                    "url": "{{ url('anime/'.$anime->id) }}",
                    "type": "GET",
                    "data": data,
                    "success": callback,
                    "error": function(e) {
                        console.log(e.message);
                    }

                });
            },
            "createdRow": function(row, data, dataIndex) {
                $(row).addClass('details-control');
            }
        });

        function format(d) {
            var childContent = '';
            childContent += '<table style="width:100%" class="p-0">';
            $.each(d.link, function(i, elem) {
                childContent += '<tr>';
                var result = elem.link.split("\n");
                var data = "";
                result.forEach(function(item, i) {
                    var data2 = result[i].split(',');
                    data += '<a href="' + data2[0] + '">' + data2[1] + '</a></br>';
                });
                if (i == 0) {
                    childContent += '<td class="links" style="width:40%">' + data + '</td>';
                    childContent += '<td class="links">' + elem.res + '</td>';
                } else {
                    childContent += '<td style="width:40%">' + data + '</td>';
                    childContent += '<td>' + elem.res + '</td>';
                }
                childContent += '</tr>';
            });
            childContent += '</table>';
            return childContent;
        }
        $('#data').on('click', 'tr.details-control', function() {
            // var tr = $(this).closest('tr');
            var row = table.row(this);

            if (row.child.isShown()) {
                // This row is already open - close it
                row.child.hide();
                $(this).removeClass('shown');
            } else {
                // Open this row
                row.child(format(row.data()), ['p-0']).show();
                $(this).addClass('shown');
            }
        });
        $('#ajaxModal').appendTo("body");

        $('#jadwal').appendTo("body");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#ajaxModal').click(function() {
            $('#episode_id').val('');
            $('#sub_id').val('');
            $('#480p_id').val('');
            $('#720p_id').val('');
            $('#1080p_id').val('');
            $('#modelHeading').html("Tambah Episode Baru");
            $('#ajaxModal').modal('show');
        });

        $('#jadwal').click(function() {
            $('#jadwal').modal('show');
        });

        $('#kirim').click(function(e) {
            e.preventDefault();
            $(this).html('Sending..');
            table.ajax.reload();
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

        $('.datepicker').pickadate({
            // Escape any “rule” characters with an exclamation mark (!).
            format: 'dddd',
            formatSubmit: 'dd',
            hiddenPrefix: 'prefix__',
            hiddenSuffix: '__suffix',
            weekdaysFull: ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu']
        });

        $('.timepicker').pickatime();

        $('.file-upload').file_upload();

        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        });


    });
</script>
@endsection