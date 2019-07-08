 <!-- Sidebar -->
    <ul class="navbar-nav bg-info sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <br>
      <a class="sidebar-brand d-flex align-items-center justify-content-center  mb-6" href="index.html">
        
        <div class="sidebar-brand-text mx-3">Sistem Distribusi Logistik</div>
      </a>
      <br>
      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
      <a class="nav-link" href="{{route('dashboard')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
 
      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Nav Item Laporan -->
      <li class="nav-item">
        <a class="nav-link" href="{{route('stok.index')}}">
             <i class="fa fa-list-alt"></i>
             <span>Input Stok</span></a>
       </li>

         <!-- Nav Item Laporan -->
         <li class="nav-item">
         <a class="nav-link" href="{{route('show_gudang')}}">
              <i class="fa fa-industry"></i>
              <span>Gudang</span></a>
        </li>
  
           <!-- Nav Item Laporan -->
           <li class="nav-item">
              <a class="nav-link" href="{{route('laporan.index')}}">
                <i class="fa fa-th-list"></i>
                <span>Laporan</span></a>
            </li>
      
         <!-- Nav Item - Utilities Collapse Menu -->
         <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fa fa-history"></i>
            <span>Riwayat Barang</span>
          </a>
          <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="{{route('riwayat_masuk')}}">Masuk</a>
              <a class="collapse-item" href="{{route('riwayat_keluar')}}">Keluar</a>
            </div>
          </div>
        </li>
  
        
        <!-- Nav Item - Charts -->
        <li class="nav-item">
          <a class="nav-link" href="{{route('statistik')}}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Statistik</span></a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
  

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
