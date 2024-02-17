<section id="navbar">
   <nav class="navbar navbar-expand-lg navbar-dark px-lg-5 py-lg-3" style="background-color: rgba(72, 72, 74, 0.9);">
      <div class="container-fluid">
         <a href="<?php echo e(base_url('/')); ?>" class="fs-08 navbar-brand d-flex">
            <img src="<?php echo e(assets_url('images/logo_chevalier.png')); ?>" height="50" alt="Logo">
            <div class="d-flex justify-content-center align-items-center ms-3">
               <p class="fw-bold fs-10 mb-0">Chevalier<br/><span>KK. Interactive Programming</span></p>
            </div>
         </a>

         <!-- Navbar Toggler Button for Mobile -->
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse" id="navbarNav">
            <div class="d-lg-flex align-items-center justify-content-center flex-grow-1">
               <div class="navbar-nav gap-4 text-white fs-08">
                  <a href="<?php echo e(base_url('/')); ?>" class="nav-item text-white nav-link">HOME</a>
                  <a href="<?php echo e(base_url('dosen')); ?>" class="nav-item text-white nav-link">DATA DOSEN</a>
                  <a href="<?php echo e(base_url('penelitian')); ?>" class="nav-item text-white nav-link">PRODUCT PENELITIAN</a>
                  <a href="<?php echo e(base_url('pengmas')); ?>" class="nav-item text-white nav-link">PENGABDIAN MASYARAKAT</a>
                  <a href="<?php echo e(base_url('aset-lab')); ?>" class="nav-item text-white nav-link">ASET LAB CHEVALIER</a>
                  <a href="<?php echo e(base_url('info-publikasi')); ?>" class="nav-item text-white nav-link">INFO PUBLIKASI PENELITIAN</a>
                  <a href="<?php echo e(base_url('arsip')); ?>" class="nav-item text-white nav-link">ARSIP</a>

               </div>
            </div>
         </div>
      </div>
   </nav>
</section><?php /**PATH C:\xampp7.3\htdocs\chevalier\application\views/layouts/header.blade.php ENDPATH**/ ?>