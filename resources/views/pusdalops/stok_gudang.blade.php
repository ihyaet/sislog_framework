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

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Laporan Masuk</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
          </div>
        <!-- /.container-fluid -->
        <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                          <thead class="text-center">
                            <tr>
                              <th class="text-center">No</th>
                              <th>Nama Barang</th>
                              <th>Satuan</th>
                              <th>Kuantitas</th>
                              <th>Deskripsi</th>
                              <th>Kadaluarsa</th>
                            </tr>
                          </thead>  
  
                          <tbody>
                            {{$i = 1}}
                            @foreach ($stoks as $stok)
                            <tr>
                              <td class="text-center">1</td>
                              <td>{{$stok->nama_barang}}</td>
                              <td>{{$stok->satuan}}</td>
                              <td>{{$stok->kuantitas}}</td>
                              <td>{{$stok->deskripsi}}</td>
                              <td>{{$stok->kadaluarsa}}</td>
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
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
          
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- DataTable Script -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script src="js/demo/datatables-demo.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

@endsection
