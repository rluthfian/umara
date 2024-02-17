<div class="logo_wa">
   <p class="text-white px-3 py-2 text_logo_wa">Ada yang bisa admin bantu ?</p>
   <a target="_blank" href="https://api.whatsapp.com/send/?phone=6282215711339&text&type=phone_number&app_absent=0"><img src="<?php echo e(assets_url('images/logo_wa.png')); ?>" class="img-fluid" alt=""></a>
</div>
<section id="navbar">
   <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-5 py-lg-3">
      <div class="container-fluid">
         <a href="<?php echo e(base_url('/')); ?>" class="navbar-brand">
            <img src="<?php echo e(assets_url('images/header_logo.png')); ?>" height="50" alt="Logo">
         </a>

         <!-- Navbar Toggler Button for Mobile -->
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse" id="navbarNav">
            <div class="d-lg-flex align-items-center justify-content-center flex-grow-1">
               <div class="navbar-nav gap-4">
                  <a href="<?php echo e(base_url('/')); ?>" class="nav-item nav-link">Beranda</a>
                  <a href="<?php echo e(base_url('product')); ?>" class="nav-item nav-link">Produk</a>
                  <a href="<?php echo e(base_url('blogs')); ?>" class="nav-item nav-link">Edukasi & Blogs</a>
                  <a href="<?php echo e(base_url('about_us')); ?>" class="nav-item nav-link">Tentang Kami</a>
                  <a href="<?php echo e(base_url('contact')); ?>" class="nav-item nav-link">Kontak Kami</a>

                  <!-- Language Link for Mobile -->
                  <div class="nav-item dropdown d-lg-none">
                     <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Bahasa
                     </a>
                     <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="languageDropdown">
                        <li><a class="dropdown-item" href="#">ID</a></li>
                        <li><a class="dropdown-item" href="#">EN</a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="navbar-nav ms-lg-auto d-none d-lg-flex">
               <!-- Language Dropdown for Desktop -->
               <div class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="languageDropdownDesktop" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     Bahasa
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="languageDropdownDesktop">
                     <li><a class="dropdown-item" href="#">ID</a></li>
                     <li><a class="dropdown-item" href="#">EN</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </nav>
</section><?php /**PATH C:\xampp7.3\htdocs\gmi\application\views/layouts/header.blade.php ENDPATH**/ ?>