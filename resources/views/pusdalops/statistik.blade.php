<title>Statistik</title>
@extends('layout.app')

@section('content')

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    @include('layout.sidebar_admin')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        @include('layout.topbar_admin')
        <!-- End of Topbar -->
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Statistik Laporan</h1>
              </div>
        </div>
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <div class="card shadow mb-4">
            {{-- <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Bar Chart</h6>
            </div> --}}
            <div class="card-body">
              <div id="chart"></div>
            </div>

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

   <!-- DataTable Script -->
   <script src="vendor/datatables/jquery.dataTables.min.js"></script>
   <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
   <script src="js/demo/datatables-demo.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
@endsection

@section('chart')
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script>
    Highcharts.chart('chart', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Laporan Bencana'
    },
    xAxis: {
        categories:{!!json_encode($months)!!},
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Laporan Diterima',
        data: {!!json_encode($arrAcc)!!}
    },
    {
        name: 'Laporan Ditolak',
        data: {!!json_encode($arrDec)!!}
    }]
});
    </script>
@endsection