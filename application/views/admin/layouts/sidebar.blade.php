<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{base_url('admin')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <img src="{{assets_url('images/logo_chevalier.png')}}" width="50" alt="">
        </div>
        <div class="sidebar-brand-text mx-3">Chevalier Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{base_url('admin')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        Manage
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{base_url('admin/dosens')}}">
        <i class="fas fa-home"></i>
            <span>Dosen</span>
        </a>
    </li>
   

    <!-- Nav Item - Article -->

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{base_url('admin/arsip')}}">
        <i class="fas fa-address-card"></i>
            <span>Arsip</span>
        </a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">
</ul>
<!-- End of Sidebar -->