

<?php $__env->startSection('title', 'Tentang Kami'); ?>

<?php $__env->startSection('content'); ?>
<section id="about_hero" class="p-lg-5">
    <div class="container-fluid px-lg-5">
        <div class="row">
            <!-- HERO -->
            <div class="col-12 p-lg-5 py-3">
                <img src="<?php echo e(assets_url('images/cms/about/')); ?><?php echo e($about_us[0]->photo); ?>" class="w-100" alt="">
            </div>

            <div class="col-12 p-lg-5">
                <h2 class="fs-5 montserrat-bold-text" style="color:#9C7E1F">Tentang Kami</h2>
                <h3 class="fs-3 montserrat-bold-text mb-3"><?php echo e($about_us[0]->title); ?></h3>
                <p><?php echo e($about_us[0]->content); ?></p>
            </div>

            <div class="col-lg-12 px-lg-5 text-center">
                <h2 class="montserrat-bold-text">Our Team</h2>
                <div class="swiper swiperFounder">
                    <div class="swiper-wrapper">
                        <?php $__currentLoopData = $our_team; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="swiper-slide text-center py-3">
                            <div class="wrapper-img-slider mx-auto mb-3">
                                <img src="<?php echo e(assets_url('images/cms/about/')); ?><?php echo e($value->photo); ?>" style="border-radius:50%;object-fit:cover;" width="200" height="200" alt="">
                            </div>
                            <h3><?php echo e($value->name); ?></h3>
                            <h5 class="montserrat-bold-text"><?php echo e($value->jabatan); ?></h5>
                            <button type="button" class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <h5 class="mb-0">Lihat Profil</h5>
                            </button>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="gallery" class="p-lg-5">
    <div class="container-fluid px-lg-5">
        <div class="row">
            <div class="col-12 text-center px-lg-5">
                <h2 class="fs-5 montserrat-bold-text" style="color:#9C7E1F">Gallery</h2>
                <h1 class="montserrat-bold-text">Koleksi Foto Kami</h1>
                <div class="row">
                    <?php $__currentLoopData = $photo_collection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3 col-6 mb-3">
                        <img src="<?php echo e(assets_url('images/cms/about/')); ?><?php echo e($value->photo); ?>" class="img-fluid" alt="<?php echo e($value->photo); ?>">
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="download_aplikasi" class="py-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 px-lg-5">
                <div class=" text-white px-lg-5">
                    <div class="container-fluid px-s-2">
                        <div class="bg-download-aplikasi p-lg-5 row" style="border-radius: 20px;">
                            <div class="col-12 col-lg-6 p-5 text-center text-lg-start  p-lg-5">
                                <h1 class="montserrat-bold-text">Download Aplikasi GMI</h1>
                                <p>Transaksi emas mudah dengan aplikasi kami</p>
                                <div class="d-flex align-items-center gap-3">
                                    <a href="#">
                                        <img src="<?php echo e(assets_url('images/appstore.png')); ?>" class="img-fluid">
                                    </a>
                                    <a href="#">
                                        <img src="<?php echo e(assets_url('images/playstore.png')); ?>" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                            <div class="col-6">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Profil Lengkap</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Add your modal content here -->
                <p>Modal content goes here</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <!-- Add additional buttons or customization as needed -->
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7.3\htdocs\gmi\application\views/dashboard/about_us.blade.php ENDPATH**/ ?>