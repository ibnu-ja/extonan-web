@extends('atak.admin')
@section('judul', 'Indeks - Anime')
@section('konten')
@section('style')
<style>
    table.dataTable thead .sorting:before,
    table.dataTable thead .sorting_asc:before,
    table.dataTable thead .sorting_desc:before,
    table.dataTable thead .sorting_asc_disabled:before,
    table.dataTable thead .sorting_desc_disabled:before,
    table.dataTable thead .sorting:after,
    table.dataTable thead .sorting_asc:after,
    table.dataTable thead .sorting_desc:after,
    table.dataTable thead .sorting_asc_disabled:after,
    table.dataTable thead .sorting_desc_disabled:after {
        font-family: "Font Awesome 5 Pro";
    }
</style>
@endsection
@section('judul', 'Tambah Anime')
<!-- Section: Inputs -->
<section class="section mb-4">
    <div class="card">
        <div class="card-body">
            <table id="dtMaterialDesignExample" class="table table-striped" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Tahun</th>
                        <th>Skor</th>
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
        $('#dtMaterialDesignExample').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('anime') }}",
            columns: [{
                    data: 'judul',
                    name: 'judul'
                },
                {
                    data: 'tahun',
                    name: 'tahun'
                },
                {
                    data: 'skor',
                    name: 'skor'
                }
            ]
        });
    });

    $('#dt-material-checkbox').dataTable({

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

    $('#dtMaterialDesignExample_wrapper, #dt-material-checkbox_wrapper').find('label').each(function() {
        $(this).parent().append($(this).children());
    });
    $('#dtMaterialDesignExample_wrapper .dataTables_filter, #dt-material-checkbox_wrapper .dataTables_filter').find(
        'input').each(function() {
        $('input').attr("placeholder", "Search");
        $('input').removeClass('form-control-sm');
    });
    $('#dtMaterialDesignExample_wrapper .dataTables_length, #dt-material-checkbox_wrapper .dataTables_length').addClass(
        'd-flex flex-row');
    $('#dtMaterialDesignExample_wrapper .dataTables_filter, #dt-material-checkbox_wrapper .dataTables_filter').addClass(
        'md-form');
    $('#dtMaterialDesignExample_wrapper select, #dt-material-checkbox_wrapper select').removeClass(
        'custom-select custom-select-sm form-control form-control-sm');
    $('#dtMaterialDesignExample_wrapper select, #dt-material-checkbox_wrapper select').addClass('mdb-select');
    $('#dtMaterialDesignExample_wrapper .mdb-select, #dt-material-checkbox_wrapper .mdb-select').materialSelect();
    $('#dtMaterialDesignExample_wrapper .dataTables_filte, #dt-material-checkbox_wrapper .dataTables_filterr').find(
        'label').remove();
</script>

@endsection