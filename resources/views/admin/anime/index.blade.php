@extends('atak.admin')
@section('judul', 'Tambah Anime - Manajemen')

@section('style')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<link rel="stylesheet" type="text/css" href=" {{ asset('css/all.css') }}">
<link rel="stylesheet" type="text/css" href=" {{ asset('css/addons/datatables.min.css') }}">
<link rel="stylesheet" type="text/css" href=" {{ asset('css/addons/datatables-select.min.css') }}">
@endsection
@section('konten')
<section>

    <!-- Section: Basic examples -->
    <section>

        <!-- Gird column -->
        <div class="card card-cascade narrower z-depth-1">

            <!-- Card image -->
            <div
                class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">

                <div>
                    <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i
                            class="fas fa-th-large mt-0"></i></button>
                    <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i
                            class="fas fa-columns mt-0"></i></button>
                </div>

                <a href="" class="white-text mx-3">Table name</a>

                <div>
                    <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i
                            class="fas fa-pencil-alt mt-0"></i></button>
                    <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i
                            class="fas fa-eraser mt-0"></i></button>
                    <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i
                            class="fas fa-info-circle mt-0"></i></button>
                </div>

            </div>
            <!-- /Card image -->

            <div class="px-4">

                <div class="">
                    <!-- Table -->
                    <table id="anime" class="table table-striped" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th></th>
                                <th class="th-sm">ID</th>
                                <th class="th-sm">Judul</th>
                                <th class="th-sm">Genre</th>
                                <th class="th-sm">Jumlah Episode</th>
                                <th class="th-sm">Pengirim</th>
                                <th class="th-sm"></th>
                                <th class="th-sm"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($animes as $anime)
                            <tr>
                                <td></td>
                                <td>{{$anime->id}}</td>
                                <td> <a href="{{url('post/'.$anime->slug)}}">{{$anime->judul}}</a> </td>
                                <td>
                                    @foreach($anime->genres as $genree)
                                    @if ($loop->last)
                                    {{ucfirst($genree->genre)}}
                                    @else
                                    {{ucfirst($genree->genre)}},
                                    @endif
                                    @endforeach
                                </td>
                                <td> {{ count($anime->episodes) }}</td>
                                <td><a href="mailto:{{$anime->email}}" class="">{{$anime->name}}</a></td>
                                <td><a href=" {{ url('post/'.$anime->slug.'/sunting') }} ">Edit</a></td>
                                <td><a href=" {{ url('post/'.$anime->slug.'/hapus') }} ">Hapus</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th class="th-sm">ID</th>
                                <th class="th-sm">Judul</th>
                                <th class="th-sm">Genre</th>
                                <th class="th-sm">Jumlah Episode</th>
                                <th class="th-sm">Pengirim</th>
                                <th class="th-sm">Pengirim</th>
                                <th class="th-sm">Pengirim</th>
                            </tr>
                        </tfoot>
                    </table>
                    <!-- Table -->
                </div>
                <hr class="my-0">
                <!-- Bottom Table UI -->
                <div class="d-flex justify-content-between">
                    <!-- Name -->
                    <select class="mdb-select colorful-select dropdown-primary mt-2">
                        <option value="" disabled>Rows number</option>
                        <option value="1" selected>5 rows</option>
                        <option value="2">25 rows</option>
                        <option value="3">50 rows</option>
                        <option value="4">100 rows</option>
                    </select>
                </div>
                <!-- Bottom Table UI -->
            </div>
        </div>
        <!-- Gird column -->
    </section>
<!-- Section: Inputs -->
@endsection
@section('script')
<script src="{{asset('js/addons/datatables.min.js')}}"></script>
<script src="{{asset('js/addons/datatables-select.min.js')}}"></script>
<script>
    $(document).ready(function() {
    $('#anime').dataTable({
    
    columnDefs: [{
      orderable: false,
      className: 'select-checkbox',
      targets: 0
    }],
    select: {              
      style: 'multi',
      selector: 'td:first-child'
    }
  });
  
  $('#anime_wrapper').find('label').each(function () {
    $(this).parent().append($(this).children());
  });
  $('#anime_wrapper .dataTables_filter').find(
    'input').each(function () {
    $('input').attr("placeholder", "Search");
    $('input').removeClass('form-control-sm');
  });
  $('#anime_wrapper .dataTables_length').addClass(
    'd-flex flex-row');
  $('#anime_wrapper .dataTables_filter').addClass(
    'md-form');
  $('#anime_filter label').remove();
  $('#anime_wrapper select').removeClass(
    'custom-select custom-select-sm form-control form-control-sm');
  $('#anime_wrapper select').addClass('mdb-select');
  $('#anime_wrapper .mdb-select').materialSelect();
  $('#anime_wrapper .dataTables_filterr').find(
    'label').remove();
} );
</script>
@endsection