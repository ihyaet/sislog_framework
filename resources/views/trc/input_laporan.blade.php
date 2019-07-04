<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>TRC-Input Laporan</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

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
                        <form class="user"> 
                          <div class="form-group row">
                              <div class="col-sm-6 mb-3 mb-sm-0">
                                  <h6>Judul</h6>
                               </div>
                               <div class="col-sm-6">
                                   <h6>Tanggal</h6>
                               </div>
                            <div class="col-sm-6 mb-3 mb-sm-0">
                               <input class="form-control" type="text" name="" placeholder="Judul Laporan" >
                            </div>
                            <div class="col-sm-6">
                                <input type="date" class="form-control" id="exampleLastName">
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
                                <input type="text" name=""class="form-control" placeholder="Lokasi Bencana">
                            </div>
                            <div class="col-sm-6">
                                <input type="text"class="form-control" placeholder="Jumlah Korban">
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
                                      <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                                      <label class="custom-file-label" for="validatedCustomFile">Pilih File</label>
                                      <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <textarea class="form-control" placeholder="Keterangan"></textarea>
                                </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                              <h5>Bantuan Logistik</h5>
                            </div>
                          </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <h6>Barang</h6>
                                 </div>
                                 <div class="col-sm-6">
                                     <h6>Kuantitas</h6>
                                 </div>
                              <div class="col-sm-6 mb-3 mb-sm-0">
                                  <select class="form-control" id="sel1">
                                      <option>Pilih Barang</option>
                                      <option>Mie Instan</option>
                                      <option>Minyak Goreng</option>
                                      <option>Susu Bayi</option>
                                    </select> 
                              </div>
                              <div class="col-sm-6">
                                  <input type="text"class="form-control" placeholder="Kuantitas">
                              </div>
                          </div>
                          <a href="" class="btn btn-success  btn-block">Submit</a>
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
          <a class="btn btn-info" href="login.html">Logout</a>
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

</body>

</html>
