<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo e(base_url('admin')); ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <img src="<?php echo e(assets_url('images/logo.png')); ?>" width="25" alt="">
        </div>
        <div class="sidebar-brand-text mx-3">GMI Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(base_url('admin')); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        CMS
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo e(base_url('admin/beranda')); ?>">
        <i class="fas fa-home"></i>
            <span>Beranda</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo e(base_url('admin/product')); ?>">
        <i class="fas fa-shopping-bag"></i>
            <span>Produk</span>
        </a>
    </li>

    <!-- Nav Item - Article -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo e(base_url('admin/article')); ?>">
            <i class="fas fa-newspaper"></i>
            <span>Edukasi & Blogs</span>
        </a>
    </li>

    <!-- Nav Item - Article -->

    <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo e(base_url('admin/about')); ?>">
        <i class="fas fa-address-card"></i>
            <span>Tentang Kami</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo e(base_url('admin/contact')); ?>">
            <i class="fas fa-phone"></i>
            <span>Kontak Kami</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
</ul>
<!-- End of Sidebar --><?php /**PATH C:\xampp7.3\htdocs\gmi\application\views/admin/layouts/sidebar.blade.php ENDPATH**/ ?>