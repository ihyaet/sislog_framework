<title>Laporan Masuk</title>
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

        <!-- Begin Page Content -->
        <div class="container-fluid">

        
        <!-- /.container-fluid -->
        <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                          <thead class="text-center">
                            <tr>
                              <th class="text-center">No</th>
                              <th>Gudang</th>
                              <th>Nama Barang</th>
                              <th>Satuan</th>
                              <th>Kuantitas</th>
                              <th>Tanggal</th>
                            </tr>
                          </thead>  
                        
                          <tbody>

                            {{$i = 1}}
                            @foreach ($keluars as $keluar)
                            <tr>
                            <td class="text-center">{{$i}}</td>
                            {{$i++}}
                              <td>{{$keluar->id_gudang}}</td>
                              <td>{{$keluar->nama_barang}}</td>
                              <td>{{$keluar->satuan}}</td>
                              <td>{{$keluar->kuantitas}}</td>
                              <td>{{$keluar->kadaluarsa}}</td>
                            </tr>
                            @endforeach
  
                          </tbody>
                        </table>
                      </div>
                </div>
      
            </div>
  
          </div>
          <!-- /.container-fluid -->
  
      </div>
      

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  
  
  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('js/sb-admin-2.min.js')}}"></script>

  <!-- DataTable Script -->
  <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('js/demo/datatables-demo.js')}}"></script>

  <!-- Page level plugins -->
  <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

@endsection
