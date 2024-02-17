

<?php $__env->startSection('title', 'Informasi Publikasi Penelitian'); ?>

<?php $__env->startSection('content'); ?>
<section id="about_hero" class="p-lg-5">
    <div class="container-fluid px-lg-5">
        <div class="row d-flex align-items-center">
           <div class="col-7">
            <h3 class="fw-bold">Berikut beberapa link jurnal yang bisa kalian klik dibawah ini</h3>
            <p>Link Jurnal EDAS</p>
            <a class="mb-4 px-5 btn btn-custom-primary" href="">Lihat</a>
            <p>Link Jurnal SJR</p>
            <a class="mb-4 px-5 btn btn-custom-primary" href="">Lihat</a>
            <p>Link Jurnal SINTA</p>
            <a class="mb-4 px-5 btn btn-custom-primary" href="">Lihat</a>
           </div>
           <div class="col-5">
           <img src="<?php echo e(assets_url('images/about-img.png')); ?>" class="img-fluid" alt="">
           </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7.3\htdocs\chevalier\application\views/dashboard/info_publikasi.blade.php ENDPATH**/ ?>