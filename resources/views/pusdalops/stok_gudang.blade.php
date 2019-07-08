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
          @foreach ($gudangs as $gudang)
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800">{{$gudang->nama_gudang}}</h1>
              <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
            </div>

          @endforeach
        <!-- /.container-fluid -->
        <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                          <thead class="text-center">
                            <tr>
                              <th class="text-center">No</th>
                              <th>Nama Barang</th>
                              <th>Satuan</th>
                              <th>Kuantitas</th>
                              <th>Deskripsi</th>
                              <th>Kadaluarsa</th>
                              <th>Pin</th>
                              <th>Aksi</th>
                            </tr>
                          </thead>  
                          <?php $getIndex = 0?>
                          <tbody>
                            {{$i = 1}}
                            @foreach ($stoks as $stok)
                            <tr>
                            <td class="text-center">{{$i}}</td>
                            {{$i++}}
                              <td>{{$stok->nama_barang}}</td>
                              <td>{{$stok->satuan}}</td>
                              <td>{{$stok->kuantitas}}</td>
                              <td>{{$stok->deskripsi}}</td>
                              <td>{{$stok->kadaluarsa}}</td>
                              <td class="text-center">
                                @if ($stok->kuantitas < 40  )
                                  <i class="fas fa-circle text-danger"></i>
                                @elseif($stok->kuantitas <= 60 && $stok->kuantitas >40)
                                  <i class="fas fa-circle text-warning"></i>
                                @else
                                  <i class="fas fa-circle text-success"></i> 
                                @endif
                                </td>
                                <td>
                                    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?$stok->id_stok?>">
                                        Ubah
                                    </button> --}}
                                </td>
                            </tr>
                            @endforeach
  
  
                          </tbody>
                        </table>
                      </div>
                </div>
      
            </div>
  
          </div>
          <!-- /.container-fluid -->
  
      </div>
      

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

 <!-- Button trigger modal -->
  
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal<?$stok->id_stok?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="">

              <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                      <h6>Nama Barang</h6>
                   </div>
                   <div class="col-sm-6">
                       <h6>Satuan</h6>
                   </div>
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="" id="" class="form-control">
                </div>
                <div class="col-sm-6">
                    <input type="text" name="" id="" class="form-control">
                </div>
              </div>

              <div class=" row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                      <h6>Deskripsi</h6>
                      <textarea name="deskripsi" id="deskripsi" class="form-control" placeholder="Deskripsi"></textarea>
                   </div>
                </div>

              <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <br>
                      <h6>Kuantitas</h6>
                   </div>
                   <div class="col-sm-6">
                       <h6>Kadaluarsa</h6>
                   </div>
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="number" name="" id="" class="form-control">
                </div>
                <div class="col-sm-6">
                    <input type="date" name="" id="" class="form-control">
                </div>
              </div>

          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </div>
  </div>

  
  
  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('js/sb-admin-2.min.js')}}"></script>

  <!-- DataTable Script -->
  <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('js/demo/datatables-demo.js')}}"></script>

  <!-- Page level plugins -->
  <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

@endsection
