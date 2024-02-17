

<?php $__env->startSection('title', 'Kontak Kami'); ?>

<?php $__env->startSection('content'); ?>
<section id="contact_hero" class="p-lg-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 px-lg-5 text-center">
                <h5 class="montserrat-bold-text" style="color:#C39D27">Kontak Kami</h5>
                <h1 class="montserrat-bold-text">Hubungi Kami</h1>
                <p>Tim kami yang ramah selalu ada di sini untuk mengobrol.</p>
            </div>
            <div class="col-12">
                <div class="container-fluid px-1 px-lg-3">
                    <div class="row d-flex justify-content-center">
                        <?php $__currentLoopData = $contact; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-3 col-12 py-lg-0 py-3">
                            <div class="card h-100 p-lg-5 p-3 position-relative">
                                <img src="<?php echo e(assets_url('images/cms/contact/')); ?><?php echo e($value->photo); ?>" width="48" class="mb-lg-5 mb-3" alt="">
                                <h5 class="montserrat-bold-text"><?php echo e($value->title); ?></h5>
                                <p><?php echo e($value->content); ?></p>
                                <p class="montserrat-bold-text" style="color:#C39D27"><?php echo e(preg_replace('/^0/', '+62', $value->contact)); ?></p>

                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="cabang" class="p-lg-5">
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-12 px-lg-5 pb-lg-5">
                <h1 class="montserrat-bold-text">Cabang Kami</h1>
                <p>Global Masantam Indonesia memiliki jaringan cabang yang tersebar di seluruh Indonesia. Jaringan cabang ini memberikan kemudahan bagi nasabah untuk mengakses layanan dan produk Global Masantam Indonesia</p>
            </div>
            <?php $__currentLoopData = $branch_office; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-6 col-12 mb-5">
                <div class="container-fluid">
                    <div class="row d-flex justify-content-center">
                        <div class="col-6 col-lg-4">
                            <img src="<?php echo e(assets_url('images/cms/contact/')); ?><?php echo e($value->photo); ?>" class="w-100" alt="">
                        </div>
                        <div class="col-6 col-lg-5">
                            <h3 class="montserrat-bold-text"><?php echo e($value->name_office); ?></h3>
                            <p><?php echo e($value->full_address); ?></p>
                            <a target="_blank" href="<?php echo e($value->link_maps); ?>" class="btn btn-custom">Buka Maps</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<section id="download_aplikasi" data-aos="fade-up" class="py-3">
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7.3\htdocs\chevalier\application\views/dashboard/contact.blade.php ENDPATH**/ ?>