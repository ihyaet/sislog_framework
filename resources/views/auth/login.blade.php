@extends('layout.app')

<title>Login</title>
@section('content')


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
                      
                      <div class="p-5 mt-5">
                        <div class="text-center">
                          <h1 class="h4 text-gray-900 mb-4">Silahkan Login</h1>
                        </div>
                       
                        <form class="user" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                  <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="exampleInputEmail" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            
                                </div>
                                <div class="form-group">
                                  <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                </div>
            
                                <button type="submit" class="btn btn-info btn-user btn-block">
                                    {{ __('Login') }}
                                </button>
                              <hr>
                              <div class="text-center">
                                <a class="small" style="color: teal;" href="{{route('register')}}">Belum Punya Akun? Buat Akun!</a>
                              </div>
                            </form>
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

{{-- 


<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

               
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                
                            </div>
                        </div>
                    </form>
                


            </div>
        </div>
    </div>
</div>
@endsection --}}
