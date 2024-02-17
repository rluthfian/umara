

<?php $__env->startSection('title', 'Produk'); ?>

<?php $__env->startSection('content'); ?>
<section id="product-hero">
    <div class="col-12 py-5 col-lg-12 p-lg-5">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="#">
                        <img src="<?php echo e(assets_url('images/slider1.png')); ?>" style="width:100%;object-fit:cover;" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#"><img src="<?php echo e(assets_url('images/slider2.png')); ?>" style="width:100%;object-fit:cover;" alt=""></a>
                </div>
                <div class="swiper-slide">
                    <a href="#"><img src="<?php echo e(assets_url('images/slider1.png')); ?>" style="width:100%;object-fit:cover;" alt=""></a>
                </div>
                <div class="swiper-slide">
                    <a href="#"><img src="<?php echo e(assets_url('images/slider2.png')); ?>" style="width:100%;object-fit:cover;" alt=""></a>
                </div>
                <div class="swiper-slide">
                    <a href="#"><img src="<?php echo e(assets_url('images/slider1.png')); ?>" style="width:100%;object-fit:cover;" alt=""></a>
                </div>
                <div class="swiper-slide">
                    <a href="#"><img src="<?php echo e(assets_url('images/slider2.png')); ?>" style="width:100%;object-fit:cover;" alt=""></a>
                </div>
            </div>
            <div class="swiper-button-next">
                <img src="<?php echo e(assets_url('images/next_button.png')); ?>" width="40" height="40" alt="Next">
            </div>
            <div class="swiper-button-prev">
                <img src="<?php echo e(assets_url('images/prev_button.png')); ?>" width="40" height="40" alt="Previous">
            </div>
        </div>
    </div>
</section>
<section id="catalogue" class="p-lg-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="montserrat-bold-text">Kategori</h1>
                <div class="container-fluid">
                    <div class="row d-flex justify-content-center gap-2">
                        <div class="col-6 col-lg-4 text-center p-3" style="border-radius:20px;border:1px solid #F1F2F2">
                            <img src="<?php echo e(assets_url('images/slider1.png')); ?>" class="img-fluid" style="height:200px;object-fit:cover;border-radius:20px" alt="">
                            <h3 class="montserrat-bold-text pt-2">ANTAM CERTIEYE</h3>
                        </div>
                        <div class="col-6 col-lg-4 text-center p-3" style="border-radius:20px;border:1px solid #F1F2F2">
                            <img src="<?php echo e(assets_url('images/slider2.png')); ?>" class="img-fluid" style="height:200px;object-fit:cover;border-radius:20px" alt="">
                            <h3 class="montserrat-bold-text pt-2">ANTAM RETRO</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7.3\htdocs\chevalier\application\views/dashboard/product.blade.php ENDPATH**/ ?>