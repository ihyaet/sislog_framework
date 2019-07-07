<title>TRC-Input Laporan</title>
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
              <div class="d-sm-flex align-items-center justify-content-between mb-4">
                  <h1 class="h3 mb-0 text-gray-800">Lapor</h1>
                  <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                </div>
                <div class="card o-hidden border-0 shadow-lg">
                  <div class="card-body p-0 justify-content-center">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                      <div class="col-lg">
                        <div class="p-5">
                          
                          <form class="user" method="post" action="{{ route('laporan.store') }}" name="add_laporan" id="add_laporan" enctype="multipart/form-data"> 
                            @csrf

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <h6>Laporan</h6>
                                 </div>
                                 <div class="col-sm-6">
                                     <h6>Tanggal</h6>
                                 </div>
                              <div class="col-sm-6 mb-3 mb-sm-0">
                                 <input class="form-control" type="text" name="nama_laporan" id="nama_laporan" placeholder="Nama Laporan" >
                              </div>
                              <div class="col-sm-6">
                                  <input type="date" class="form-control" name="tanggal" id="tanggal">
                              </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <h6>Lokasi</h6>
                                 </div>
                                 <div class="col-sm-6">
                                     <h6>Jumlah</h6>
                                 </div>
                              <div class="col-sm-6 mb-3 mb-sm-0">
                                <textarea class="form-control" placeholder="Lokasi Bencana" name="lokasi" id=lokasi></textarea>
                              </div>
                              <div class="col-sm-6">
                                  <input type="text"class="form-control" placeholder="Jumlah Korban" name="jumlah_korban" id="jumlah_korban">
                              </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <h6>Unggah Foto</h6>
                                 </div>
                                 <div class="col-sm-6">
                                     <h6>Keterangan</h6>
                                 </div>
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="gambar" id="gambar" required>
                                        <label class="custom-file-label" for="validatedCustomFile">Pilih File (max 2MB)</label>
                                      </div>
                                  </div>
                                  <div class="col-sm-6">
                                      <textarea class="form-control" placeholder="Keterangan" name="keterangan" id="keterangan"></textarea>
                                  </div>
                            </div>
                              <div class="form-group">
                                      <h6>Logistik</h6>
                                      <textarea class="form-control" placeholder="Rincian Logistik" name="logistik" id="logistik"></textarea>
                            </div>
                            <input type="submit" class="btn btn-info btn-block" value="Submit">
                          </form>


                        </div>
                      </div>
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
  
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
      
@endsection

