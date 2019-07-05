<title>TRC-Laporan Anda</title>
@extends('layout.app')

  @section('content')
      
  <!-- Page Wrapper -->
  <div id="wrapper">

    @include('layout.sidebar_trc')
      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
  
        <!-- Main Content -->
        <div id="content">
        @include('layout.topbar')
          <!-- Begin Page Content -->
          <div class="container-fluid">
              <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-info">Laporan Anda</h6>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                        <thead class="text-center">
                          <tr>
                            <th class="text-center">No</th>
                            <th>Judul</th>
                            <th>Tanggal</th>
                            <th>Keterangan</th>
                            <th>Jumlah Korban</th>
                            <th>Gambar</th>
                            <th>Desa</th>
                            <th>Kecamatan</th>
                          </tr>
                        </thead>  
                        <tbody>
                          <tr>
                            <td class="text-center">1</td>
                            <td>Longsor</td>
                            <td>2011/05/03</td>
                            <td>London</td>
                            <td>38</td>
                            <td>dqoiasf.jpg</td>
                            <td>$163,500</td>
                            <td>DImana</td>
                          </tr>
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
  
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
  
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Yakin untuk logout?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Terima Kasih atas Kerja Kerasnya</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-info" href="">Logout</a>
            
          </div>
        </div>
      </div>
    </div>
  
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
     <!-- DataTable Script -->
     <script src="vendor/datatables/jquery.dataTables.min.js"></script>
     <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
     <script src="js/demo/datatables-demo.js"></script>
   
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
  @endsection