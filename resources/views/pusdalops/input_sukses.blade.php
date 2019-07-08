<title>TRC-Laporan Anda</title>
@extends('layout.app')

@section('content')
      
  <!-- Page Wrapper -->
  <div id="wrapper">

    @include('layout.sidebar_admin')
      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
  
        <!-- Main Content -->
        <div id="content">
        @include('layout.topbar')
          <!-- Begin Page Content -->
          <div class="container-fluid">

              <div class="card shadow bg-success">
                  <div class="card-body text-center" style="color:white;">
                      <i class="fa fa-check fa-6"></i>
                    <h5>Input Berhasil</h5>
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