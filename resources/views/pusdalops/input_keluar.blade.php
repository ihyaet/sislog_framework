<title>Input Barang Keluar</title>
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
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Transaksi Keluar</h1>
                <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
              </div>
              <div class="card o-hidden border-0 shadow-lg">
                <div class="card-body p-0 justify-content-center">
                  <!-- Nested Row within Card Body -->
                  <div class="row">
                    <div class="col-lg">
                      <div class="p-5">

                        
                        <form class="user" method="post" action="{{ route('keluar.store') }}" name="add_stok" id="add_stok" enctype="multipart/form-data">
                          @csrf
                          <div class="form-group row">
                              <div class="col-sm-6 mb-3 mb-sm-0">
                                  <h6>Gudang</h6>
                               </div>
                               <div class="col-sm-6">
                                   <h6>Barang</h6>
                               </div>
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <select class="form-control" id="gudang" name="gudang">
                                  @foreach ($gudangs as $gudang)
                                    <option value="{{$gudang->id_gudang}}">{{$gudang->nama_gudang}}</option>
                                  @endforeach
                                  </select>
                            </div>
                            <div class="col-sm-6">
                                <select class="form-control" id="barang" name="barang">
                                  @foreach ($barangs as $barang)
                                    <option value="{{$barang->id_barang}}">{{$barang->nama_barang}}</option>
                                  @endforeach
                                  </select>
                            </div>
                          </div>
                          <div class="form-group row">
                              <div class="col-sm-6 mb-3 mb-sm-0">
                                  <h6>Kuantitas</h6>
                               </div>
                               <div class="col-sm-6">
                                   <h6>Tanggal</h6>
                               </div>
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="number" class="form-control" id="exampleFirstName" placeholder="Kuantitas" name="kuantitas" id="kuantitas">
                            </div>
                            <div class="col-sm-6">
                                <input type="date" class="form-control" id="exampleLastName" name="kadaluarsa" id="kadaluarsa">
                            </div>
                          </div>
                          
                          <div class="form-group row">
                              <div class="col-sm-6 mb-3 mb-sm-0">
                                  <h6>Deskripsi</h6>
                                  <textarea name="deskripsi" id="deskripsi" class="form-control" placeholder="Deskripsi"></textarea>
                               </div>
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
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

@endsection