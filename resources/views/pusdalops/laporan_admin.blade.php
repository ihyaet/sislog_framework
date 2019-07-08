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
              <!-- <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Laporan Anda</h6>
              </div> -->
              <div class="card-body">
                  <div class="table-responsive">
                      <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                        <thead class="text-center">
                          <tr>
                            <th class="text-center">No</th>
                            <th>Laporan</th>
                            <th>Tanggal</th>
                            <th>Keterangan</th>
                            <th>Jumlah Korban</th>
                            <th>Lokasi</th>
                            <th>Logistik</th>
                            <th>Gambar</th>
                            <th>Pelapor</th>
                            <th>Status Laporan</th>
                          </tr>
                        </thead>  
                        <tbody>
                        
                          {{$i = 1}}
                        @foreach ($laporans as $laporan)
                          <tr>
                          <td class="text-center">{{$i}}</td>
                          {{$i++}}  
                            <td>{{$laporan->nama_laporan}}</td>
                            <td>{{$laporan->tanggal}}</td>
                            <td>{{$laporan->keterangan}}</td>
                            <td>{{$laporan->jumlah_korban}}</td>
                            <td>{{$laporan->lokasi}}</td>
                            <td>{{$laporan->logistik}}</td>
                            <td><img class="card-img-top" src="/storage/gambar/{{$laporan->gambar}}" alt="tidak ada gambar" style="height: 200px; width:300px;"></td>
                            <th>{{$laporan->name}}</th>
                            <td>{{$laporan->status_laporan}}</td>
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

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- DataTable Script -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script src="js/demo/datatables-demo.js"></script>

@endsection
