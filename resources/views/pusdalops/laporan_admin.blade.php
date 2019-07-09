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
                            <th>Aksi</th>
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
                            <td>
                              @if ($laporan->status_laporan == 'Diterima')
                                  <p style="color: green;">{{$laporan->status_laporan}}</p>
                              @elseif($laporan->status_laporan == 'Ditolak')
                                  <p style="color: red;">{{$laporan->status_laporan}}</p>
                              @else
                                  <p>{{'Diproses'}}</p>
                              @endif
                            
                            </td>
                          <td><button type="button" id="verif" class="verif btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-id="{{$laporan->id_laporan}}" href="#exampleModal">
                                Verifikasi
                          </button></td>
                          </tr>
                        {{-- <p>{{$laporan->id_laporan}}</p> --}}
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

  <!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Verifikasi Laporan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

        <form action="{{route('laporan.edit','4')}}" class="user">
          @csrf
                <input type="hidden" name="id_laporan" id="id_laporan" value="">
                <select class="form-control" id="transaksi" name="transaksi">
                    <option value="Diterima">Diterima</option>
                    <option value="Ditolak">Ditolak</option>
                  </select>
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>  
            </form>
     

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

  <!-- DataTable Script -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script src="js/demo/datatables-demo.js"></script>
  <script>
    $('.verif').click(function(){
      console.log('ss');
      var id = $(this).data('id');
      $(".modal-body #id_laporan").val(id);
     
    });
  </script>

@endsection
