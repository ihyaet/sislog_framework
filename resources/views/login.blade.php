@extends('layout.app')

<title>Sislog-Login</title>
<body class="bg-gradient-info">

  <div class="container" style="padding-top: 20px;">

    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9 pt-0">
        <div class="card o-hidden shadow-lg my-5">  
          <div class="card-body p-0 m-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 backg-login"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Silahkan Login</h1>
                  </div>
                  <form class="user ">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Ingat Saya</label>
                      </div>
                    </div>
                    <a href="https://www.instagram.com/ihyaet/" class="btn btn-info btn-user btn-block">
                      Login
                    </a>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" style="color: teal;" href="{{route('register')}}">Belum Punya Akun? Buat Akun!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
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