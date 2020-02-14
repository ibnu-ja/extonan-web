@extends('atak.admin')
@section('judul', 'Indeks - Anime')
@section('konten')
<!-- Section: Inputs -->
<section class="section mb-4" id="content">
  <div class="card card-body">
    <table id="data" class="table " cellspacing="0" width="100%">
      <thead>
        <tr>
          <th style="width: 40%">Judul</th>
          <th>Alt</th>
          <th>Musim</th>
          <th>Skor</th>
          <th>Genre</th>
          <th style="width: 20%">Aksi</th>
        </tr>
      </thead>
    </table>
  </div>
</section>
<!-- Section: Inputs -->
@endsection
@section('script')
<script id="new">
  $(document).ready(function() {
    $('#data').DataTable({
      processing: true,
      serverSide: true,
      ajax: "{{ url('anime/data') }}",
      columns: [{
          data: 'judul',
          name: 'judul',
          render: function(data, type, row) {
            return "<a class='test' href='/anime/" + row.id + "'>" + row.judul + "</a>"
          }
        },
        {
          data: 'judul_alt',
          name: 'judul_alt',
          searchable: true,
          visible: false
        },
        {
          data: 'musim',
          name: 'musim'
        },
        {
          data: 'skor',
          name: 'skor'
        },
        {
          data: 'genres',
          name: 'genres'
        },
        {
          data: 'action',
          name: 'action',
          orderable: false,
          searchable: false
        },
      ],
      "language": {
        "sEmptyTable": "Tidak ada data yang tersedia pada tabel ini",
        "sProcessing": "Sedang memproses ....",
        "sLengthMenu": "Menampilkan _MENU_ data",
        "sZeroRecords": "Tidak ditemukan data yang sesuai",
        "sInfo": "Menampilkan _START_-_END_ dari _TOTAL_ entri",
        "sInfoEmpty": "Menampilkan 0 dari 0 entri",
        "infoFiltered": "(dari keseluruhan _MAX_ data)",
        "sInfoPostFix": "",
        "sSearch": "Cari:",
        "sUrl": "",
        "oPaginate": {
          "sFirst": "Pertama",
          "sPrevious": "Sebelumnya",
          "sNext": "Selanjutnya",
          "sLast": "Terakhir"
        }
      },
    });
    $('#data_filter.dataTables_filter>label').addClass('md-form md-form m-0 p-0 wave');
  })
</script>
@endsection