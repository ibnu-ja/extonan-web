@extends('atak.admin')
@section('judul', 'Indeks - Anime')
@section('konten')
<!-- Section: Inputs -->
<section class="section mb-4">
    <div class="card">
        <div class="card-body">
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
    </div>
</section>
<!-- Section: Inputs -->
@endsection
@section('script')

<script type="text/javascript" src=" {{ asset('js/addons/datatables.min.js') }}"></script>
<script type="text/javascript" src=" {{ asset('js/addons/datatables-select.min.js') }}"></script>

<script>
    $(function() {
        $('#data').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('anime') }}",
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
            ]
        });
    });

    $('#data-checkbox').dataTable({

        columnDefs: [{
            orderable: false,
            className: 'select-checkbox',
            targets: 0
        }],
        select: {
            style: 'os',
            selector: 'td:first-child'
        }
    });

    $('#data_wrapper, #data-checkbox_wrapper').find('label').each(function() {
        $(this).parent().append($(this).children());
    });
    $('#data_wrapper .dataTables_filter, #data-checkbox_wrapper .dataTables_filter').find(
        'input').each(function() {
        $('input').attr("placeholder", "Search");
        $('input').removeClass('form-control-sm');
    });
    $('#data_wrapper .dataTables_length, #data-checkbox_wrapper .dataTables_length').addClass(
        'd-flex flex-row');
    $('#data_wrapper .dataTables_filter, #data-checkbox_wrapper .dataTables_filter').addClass(
        'md-form');
    $('#data_wrapper select, #data-checkbox_wrapper select').removeClass(
        'custom-select custom-select-sm form-control form-control-sm');
    $('#data_wrapper select, #data-checkbox_wrapper select').addClass('mdb-select');
    $('#data_wrapper .mdb-select, #data-checkbox_wrapper .mdb-select').materialSelect();
    $('#data_wrapper .dataTables_filte, #data-checkbox_wrapper .dataTables_filterr').find(
        'label').remove();
</script>

@endsection