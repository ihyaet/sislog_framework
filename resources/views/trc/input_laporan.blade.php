<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Blank</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <br>
      <a class="sidebar-brand d-flex align-items-center justify-content-center  mb-6" href="index.html">
          <!-- <div class="sidebar-brand-icon">
              <img style="height: 65px" width="65px" src="https://1.bp.blogspot.com/-vGwfUEcu2kk/UPLGcZJ4SSI/AAAAAAAALYw/bmllfIVBuQs/s1600/LOGO+BADAN+NASIONAL+PENANGGULANGAN+BENCANA.png">
            </div> -->
        <div class="sidebar-brand-text mx-3">Sistem Distribusi Logistik</div>
      </a>
      <br>
      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>


 
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item Laporan -->
      <li class="nav-item">
          <a class="nav-link" href="charts.html">
            <i class="fa fa-list-alt"></i>
            <span>Lapor</span></a>
        </li>
  
           <!-- Nav Item Laporan -->
           <li class="nav-item">
              <a class="nav-link" href="charts.html">
                <i class="fa fa-th-list"></i>
                <span>Laporan</span></a>
            </li>
      
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
  

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Ihya Fathurr</span>
                <img class="img-profile rounded-circle" src="https://instagram.fcgk8-2.fna.fbcdn.net/vp/1933052f97cf7847ddceee9fe08c28fd/5D88E11B/t51.2885-15/sh0.08/e35/s640x640/43653367_543410486124558_3114722360144129502_n.jpg?_nc_ht=instagram.fcgk8-2.fna.fbcdn.net&_nc_cat=106">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

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
