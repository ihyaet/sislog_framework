<title>STARTBUG-Sistem Distribusi Logistik</title>
@extends('layout.app')

@section('content')
    
  <div class="container-full-bg">
    <div class="jumbotron shadow">
      <div class="row justify-content-center m-0 p-0">
         <img src="img/bnpb.png" style="height: 350x; width: 350px;">
      </div>
      <div class="row justify-content-center m-4">
        <h3 style="color: white; font-weight: bolder; ">SISTEM DISTRIBUSI LOGISTIK</h3>
        <p class="text-center m-2" style="color:#ededed; font-size: 18px; letter-spacing: 2px;">Sistem Distribusi Logistik (SISLOG) merupakan suatu sistem berbasis website yang digunakan untuk manajemen gudang logistik di PUSDALOPS BPBD
        </p>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
           <a href="{{route('login')}}" style="border-radius: 20px;" class="btn btn-info btn-user text-center">LOGIN</a>
        </div>
      </div>
    </div>

    <section class="bg-gray-100">
    <div class="container">
      <div class="row justify-content-center">
      <p class="m-4"><strong><font>AKTOR</font></strong></p>
      </div>
      <div class="row justify-content-center">
        <div class="col justify-content-center">
              <img src="img/BPBD.png" style="height:365px; width:500px;">
        </div>
        <div class="col justify-content-center">
            <h5 class="mt-3" style="font-weight: bold;">BPBD</h5>
        <p>Badan Penanggulangan Bencana Daerah (BPBD) adalah
         lembaga pemerintah non-departemen yang melaksanakan tugas penanggulangan bencana di daerah baik 
         Provinsi maupun Kabupaten/ Kota dengan berpedoman pada kebijakan yang ditetapkan oleh Badan Nasional 
         Penanggulangan Bencana. BPBD dibentuk berdasarkan Peraturan Presiden Nomor 8 Tahun 2008, menggantikan
          Satuan Koordinasi Pelaksana Penanganan Bencana (Satkorlak) di tingkat Provinsi dan Satuan Pelaksana 
          Penanganan Bencana (Satlak PB) di tingkat Kabupaten / Kota, yang keduanya dibentuk berdasarkan Peraturan 
          Presiden Nomor 83 Tahun 2005.</p>
        </div>
      </div>
      <div class="row justify-content-center pb-5">
            <div class="col justify-content-center">
              <h5 class="mt-3" style="font-weight: bold;">TIM REAKSI CEPAT (TRC)</h5>
              <p>Tim Reaksi Cepat BNPB disingkat TRC BNPB adalah suatu Tim yang dibentuk oleh Kepala BNPB, terdiri dari instansi/lembaga teknis/non teknis terkait yang bertugas 
              melaksanakan kegiatan kaji cepat bencana dan dampak bencana 
              pada saat tanggap darurat meliputi penilaian kebutuhan 
              (Needs Assessment), penilaian kerusakan dan kerugian 
              (Damage and Loses Assessment) serta memberikan dukungan pendampingan (membantu SATKORLAK PB/BPBD Provinsi/ 
              SATLAK PB/BPBD Kabupaten/Kota) dalam penanganan darurat bencana. 
              </p>
            </div>
            <div class="col justify-content-center">
              <img src="img/trc.jpeg" style="height: 350px;">
            </div>
      </div>
    </div>
  </section>

    <section class="bg-white">
      <div class="container">
        <div class="row  justify-content-center">
            <p class="m-4"><strong><font>TIM STARTBUG</font></strong></p>
        </div>
        <div class="row justify-content-center">
            <div class="col">
              <div class="card mb-4" id="card-profil">
                <div class="card-body">
                  <div class="row justify-content-center">
                    <img src="https://instagram.fcgk16-1.fna.fbcdn.net/vp/e297811a7dbc88118b0833dd91cb44af/5DC1B0FE/t51.2885-15/e35/43653367_543410486124558_3114722360144129502_n.jpg?_nc_ht=instagram.fcgk16-1.fna.fbcdn.net" class="rounded-circle mt-0" style="width: 180px; height: 180px;">
                  </div>
                  <div class="row justify-content-center">
                    <h5 class="mt-3" style="font-weight: bold;">Ihya Fathurrahman</h5>
                    <p class="justify-content-center" style="font-size: 15px;">17523126@students.uii.ac.id</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
                  <div class="card mb-4" id="card-profil">
                <div class="card-body">
                  <div class="row justify-content-center">
                    <img src="https://scontent-sin6-2.cdninstagram.com/vp/85f09dadd3b46e851ffaa0808fe6fbab/5DB48F6D/t51.2885-19/s150x150/43051264_272845183589257_3694189181895966720_n.jpg?_nc_ht=scontent-sin6-2.cdninstagram.com" class="rounded-circle mt-0" style="width: 180px; height: 180px;">
                  </div>
                  <div class="row justify-content-center">
                    <h5 class="mt-3" style="font-weight: bold;">Muhammad Rijal Kamal</h5>
                    <p class="justify-content-center" style="font-size: 15px;">17523098@students.uii.ac.id</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
                <div class="card mb-4" id="card-profil">
                <div class="card-body">
                  <div class="row justify-content-center">
                    <img src="https://scontent-sin6-2.cdninstagram.com/vp/07376f2e58ce2cec72e92e14c817bc18/5DAD721E/t51.2885-19/s150x150/64281386_438520696725975_6252362189764558848_n.jpg?_nc_ht=scontent-sin6-2.cdninstagram.com" class="rounded-circle mt-0" style="width: 180px; height: 180px;">
                  </div>
                  <div class="row justify-content-center">
                    <h5 class="mt-3" style="font-weight: bold;">Diah Hanifah Putri</h5>
                    <p class="justify-content-center" style="font-size: 15px;">17523144@students.uii.ac.id</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
                <div class="card mb-4" id="card-profil">
                <div class="card-body">
                  <div class="row justify-content-center">
                    <img src="https://scontent-sin6-2.cdninstagram.com/vp/26e8de27ca9ee96f60dcf0a12b159078/5DB922E0/t51.2885-15/sh0.08/e35/s750x750/60224039_414013802660682_4813467983225204121_n.jpg?_nc_ht=scontent-sin6-2.cdninstagram.com" class="rounded-circle mt-0" style="width: 180px; height: 180px;">
                  </div>
                  <div class="row justify-content-center">
                    <h5 class="mt-3" style="font-weight: bold;">Lugie Nur Ahmad</h5>
                    <p class="justify-content-center" style="font-size: 15px;">17523138@students.uii.ac.id</p>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </section>
    <section class="bg-gradient-info">
      <div class="container" style="color: white;">
        <footer class="page-footer font-small blue pt-4">
            <div class="container">
              <div class="container-fluid text-center text-md-left">
                <div class="row">
                  <div class="col-md-6 mt-md-0 mt-3">
                    <h5 class="text-uppercase"><b>SISLOG</b></h5>
                    <p>"Sistem Distribusi Logistik"</p>
                    <!-- <p>Pastisipasi anda sangat kami harapakan dan kami tunggu.</p> -->
                  </div>
                  <hr class="clearfix w-100 d-md-none pb-3">
                  <div class="col-md-3 mb-md-0 mb-3">

                    </div>

                    <div class="col-md-3 mb-md-0 mb-3 text-md-right">
                      <h5 class="text-uppercase"><b>Kontak dan Alamat</b></h5>
                      <ul class="list-unstyled">
                        <li>
                         <p>Jalan Kaliurang KM 14.5, Sleman, Yogyakarta</p>
                        </li>
                        <li>
                          <p>(0274)138009</p>
                        </li>
                        <li>
                          <p>support.admin@startbug.com</p>
                        </li>
                      </ul>
                    </div>
                </div>
              </div>
            </div>
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2019 STARTBUG</div>
        <!-- Copyright -->
        </footer>
        
      </div>
    </section>


  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

@endsection
