@extends('atak.admin')
@section('judul', 'Beranda Manajemen - '.config('app.name', 'Laravel'))
@section('konten')
<!-- Section: Button icon -->
<section>
    <!-- Grid row -->
    <div class="row">
        <!-- Grid column -->
        <div class="col-xl-3 col-md-6 mb-4">
            <!-- Card -->
            <div class="card unique-color-dark text-white">
                <!-- Card Data -->
                <div class="row mt-3">
                    <div class="col-md-5 col-5 text-left pl-4">
                        <a type="button" class="btn-floating btn-lg primary-color ml-4">
                            <i class="far fa-eye" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="col-md-7 col-7 text-right pr-5">
                        <h5 class="ml-4 mt-4 mb-2 font-weight-bold">1234 </h5>
                        <p class="font-small">Pengunjung unik</p>
                    </div>
                </div>
                <!-- Card Data -->
                <!-- Card content -->
                <div class="row my-3">
                    <div class="col-md-7 col-7 text-left pl-4">
                        <p class="font-small font-up ml-4 font-weight-bold">Bulan lalu</p>
                    </div>
                    <div class="col-md-5 col-5 text-right pr-5">
                        <p class="font-small">1233</p>
                    </div>
                </div>
                <!-- Card content -->
            </div>
            <!-- Card -->
        </div>
        <!-- Grid column -->
        <!-- Grid column -->
        <div class="col-xl-3 col-md-6 mb-4">
            <!-- Card -->
            <div class="card unique-color-dark text-white">
                <!-- Card Data -->
                <div class="row mt-3">
                    <div class="col-md-5 col-5 text-left pl-4">
                        <a type="button" class="btn-floating btn-lg warning-color ml-4">
                            <i class="far fa-users"></i>
                        </a>
                    </div>
                    <div class="col-md-7 col-7 text-right pr-5">
                        <h5 class="ml-4 mt-4 mb-2 font-weight-bold"> 12344 </h5>
                        <p class="font-small">Pengunjung</p>
                    </div>
                </div>
                <!-- Card Data -->
                <!-- Card content -->
                <div class="row my-3">
                    <div class="col-md-7 col-7 text-left pl-4">
                        <p class="font-small font-up ml-4 font-weight-bold">Bulan lalu</p>
                    </div>
                    <div class="col-md-5 col-5 text-right pr-5">
                        <p class="font-small">1233</p>
                    </div>
                </div>
                <!-- Card content -->
            </div>
            <!-- Card -->
        </div>
        <!-- Grid column -->
        <!-- Grid column -->
        <div class="col-xl-3 col-md-6 mb-4">
            <!-- Card -->
            <div class="card unique-color-dark text-white">
                <!-- Card Data -->
                <div class="row mt-3">
                    <div class="col-md-5 col-5 text-left pl-4">
                        <a type="button" class="btn-floating btn-lg light-blue lighten-1 ml-4">
                            <i class="far fa-video"></i>
                        </a>
                    </div>
                    <div class="col-md-7 col-7 text-right pr-5">
                        <h5 class="ml-4 mt-4 mb-2 font-weight-bold">4 </h5>
                        <p class="font-small">Anime Baru</p>
                    </div>
                </div>
                <!-- Card Data -->
                <!-- Card content -->
                <div class="row my-3">
                    <!-- Grid column -->
                    <div class="col-md-7 col-7 text-left pl-4">
                        <p class="font-small font-up ml-4 font-weight-bold">Bulan lalu</p>
                    </div>
                    <!-- Grid column -->
                    <!-- Grid column -->
                    <div class="col-md-5 col-5 text-right pr-5">
                        <p class="font-small">3</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Card content -->
            </div>
            <!-- Card -->
        </div>
        <!-- Grid column -->
        <!-- Grid column -->
        <div class="col-xl-3 col-md-6 mb-4">
            <!-- Card -->
            <div class="card unique-color-dark text-white">
                <!-- Card Data -->
                <div class="row mt-3">
                    <div class="col-md-5 col-5 text-left pl-4">
                        <a type="button" class="btn-floating btn-lg red accent-2 ml-4">
                            <i class="fas fa-list-ol"></i>
                        </a>
                    </div>
                    <div class="col-md-7 col-7 text-right pr-5">
                        <h5 class="ml-4 mt-4 mb-2 font-weight-bold">13</h5>
                        <p class="font-small">Episode baru</p>
                    </div>
                </div>
                <!-- Card Data -->
                <!-- Card content -->
                <div class="row my-3">
                    <div class="col-md-7 col-7 text-left pl-4">
                        <p class="font-small font-up ml-4 font-weight-bold">Minggu lalu</p>
                    </div>
                    <div class="col-md-5 col-5 text-right pr-5">
                        <p class="font-small">12</p>
                    </div>
                </div>
                <!-- Card content -->
            </div>
            <!-- Card -->
        </div>
        <!-- Grid column -->
    </div>
    <!-- Grid row -->
</section>
<!-- Section: Button icon -->
<div style="height: 5px"></div>
<!-- Section: Analytical panel -->
<section class="mb-5">
    <!-- Card -->
    <div class="card card-cascade narrower unique-color-dark text-white">
        <!-- Section: Chart -->
        <section>
            <!-- Grid row -->
            <div class="row">
                <!-- Grid column -->
                <div class="col-xl-5 col-md-12 mr-0">
                    <!-- Card image -->
                    <div class="view view-cascade gradient-card-header light-blue lighten-1">
                        <h4 class="h4-responsive mb-0 font-weight-bold">Penayangan</h4>
                    </div>
                    <!-- Card image -->
                    <!-- Card content -->
                    <div class="card-body card-body-cascade pb-0">
                        <!-- Panel data -->
                        <div class="row card-body pt-3">
                            <!-- First column -->
                            <div class="col-md-12">
                                <!-- Date select -->
                                <h4>
                                    <span class="badge big-badge light-blue lighten-1">Kurun waktu</span>
                                </h4>
                                <select class="mdb-select">
                                    <option value="" disabled selected>Pilih waktu</option>
                                    <option value="1">Hari ini</option>
                                    <option value="2">Kemarin</option>
                                    <option value="3">7 hari lalu</option>
                                    <option value="3">30 hari lalu</option>
                                    <option value="3">Minggu lalu</option>
                                    <option value="3">Bulan lalu</option>
                                </select>
                                <br>
                                <!-- Date pickers -->
                                <h5><span class="badge big-badge light-blue lighten-1">Pilih tanggal</span>
                                    </h4>
                                    <br>
                                    <div class="d-flex justify-content-between">
                                        <div class="md-form">
                                            <input placeholder="Tanggal" type="text" id="from"
                                                class="form-control datepicker">
                                            <label for="date-picker-example">Dari</label>
                                        </div>
                                        <div class="md-form">
                                            <input placeholder="Tanggal" type="text" id="to"
                                                class="form-control datepicker">
                                            <label for="date-picker-example">Hingga</label>
                                        </div>
                                    </div>
                            </div>
                            <!-- First column -->
                        </div>
                        <!-- Panel data -->
                    </div>
                    <!-- Card content -->
                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="col-xl-7 col-md-12 mb-4">
                    <!-- Card image -->
                    <div class="view view-cascade gradient-card-header unique-color-dark text-white">
                        <!-- Chart -->
                        <canvas id="barChart"></canvas>
                    </div>
                    <!-- Card image -->
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </section>
        <!-- Section: Chart -->
    </div>
    <!-- Card -->
</section>
<!-- Section: Analytical panel -->
@endsection
@section('script')
<script>
    // SideNav Initialization
  $(".button-collapse").sideNav();
      var container = document.querySelector('.custom-scrollbar');
      var ps = new PerfectScrollbar(container, {
        wheelSpeed: 2,
        wheelPropagation: true,
        minScrollbarLength: 20
      });
      // Data Picker Initialization
      $('.datepicker').pickadate();
      // Material Select Initialization
      $(document).ready(function() {
        $('.mdb-select').material_select();
        $('h6, .card, p, td, th, i, li a, h4, h5, input, label, .caret').not(
          '#slide-out i, #slide-out a, .dropdown-item i, .dropdown-item').toggleClass('text-white');
      });
      // Tooltips Initialization
      $(function() {
        $('[data-toggle="tooltip"]').tooltip()
      })
      // Small chart
      $(function() {
        $('.min-chart#chart-sales').easyPieChart({
          barColor: "#4285F4",
          onStep: function(from, to, percent) {
            $(this.el).find('.percent').text(Math.round(percent));
          }
        });
      });
      //bar
      var ctxB = document.getElementById("barChart").getContext('2d');
      var myBarChart = new Chart(ctxB, {
        type: 'bar',
        data: {
          labels: ["January", "Febuary", "March", "April", "May"],
          datasets: [{
            label: '# of Votes',
            data: [13, 19, 8, 11, 5],
            backgroundColor: [
              'rgba(255, 99, 132, 0.3)',
              'rgba(41, 182, 246, 0.3)',
              'rgba(255, 187, 51, 0.3)',
              'rgba(66, 133, 244, 0.3)',
              'rgba(153, 102, 255, 0.3)',
            ],
            borderColor: [
              'rgba(255,99,132,1)',
              'rgba(41, 182, 246, 1)',
              'rgba(255, 187, 51, 1)',
              'rgba(66, 133, 244, 1)',
              'rgba(153, 102, 255, 1)',
            ],
            borderWidth: 2
          }]
        },
        optionss: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true
              }
            }]
          }
        }
      });

      Chart.defaults.global.defaultFontColor = '#fff';
      myBarChart.update();
  
</script>
@endsection