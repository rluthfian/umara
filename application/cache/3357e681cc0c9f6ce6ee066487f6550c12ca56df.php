

<?php $__env->startSection('title', 'Article'); ?>
<?php
$createdAt = strtotime($article->created_at);
$day = date('d', $createdAt);
$month = date('F', $createdAt);
$year = date('Y', $createdAt);
?>
<?php $__env->startSection('content'); ?>

<section id="about_hero" class="p-lg-5">
    <div class="container-fluid px-lg-5">
        <div class="row">
            <div class="col-12 p-lg-5">
                <h2 class="fs-5 montserrat-bold-text" style="color:#C39D27">Published <?php echo e($day); ?> <?php echo e($month); ?> <?php echo e($year); ?></h2>
                <h3 class="fs-3 montserrat-bold-text mb-3"><?php echo e($article->article_name); ?></h3>
            </div>
            <div class="col-lg-12 px-lg-5 mb-lg-5 text-center">
                <img src="<?php echo e(assets_url('images/slider1.png')); ?>" class="img-fluid" alt="Header Image">
            </div>
            <div class="col-lg-12 px-lg-5">
                <p><?php echo e($article->article_content); ?></p>
            </div>

        </div>
    </div>
</section>
<section id="latest_blog" class="p-lg-5">
    <div class="container-fluid px-lg-5">
        <div class="row">
            <div class="col-12 px-lg-5">
                <h2 class="fs-5 montserrat-bold-text" style="color:#C39D27">Our Blog</h2>
                <h3 class="fs-3 montserrat-bold-text mb-3">Latest Blog Post</h3>
                <p>Tool and strategies modern teams need to help their companies grow.</p>
            </div>
            <div class="col-12 p-lg-5 py-3">
                <div class="container-fluid">
                    <div class="row">
                        <?php $__currentLoopData = $latest_article; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                        $createdAt = strtotime($value->created_at);
                        $day = date('d', $createdAt);
                        $month = date('F', $createdAt);
                        $year = date('Y', $createdAt);
                        ?>
                        <div class="col-6 col-lg-4">
                            <a class="text-decoration-none" href="<?php echo e(base_url('article')); ?>/<?php echo e($value->article_id); ?>">
                                <img src="<?php echo e(assets_url('images/blogs_2.png')); ?>" class="img-fluid" alt="">
                                <p class="montserrat-bold-text date-blogs mt-3 mb-1" style="color:#C39D27;">GMI | <?php echo e($day); ?> <?php echo e($month); ?> <?php echo e($year); ?></p>
                                <h3 class="text-dark montserrat-bold-text title-blogs"><?php echo e($value->article_name); ?></h3>
                                <?php
                                $contentWords = explode(' ', $value->article_content);
                                $limitedContent = implode(' ', array_slice($contentWords, 0, 10));
                                ?>
                                <p class="text-dark"><?php echo e($limitedContent); ?>.........</p>
                            </a>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="d-flex justify-content-end ">
                    <a class="text-dark fw-bold" href="<?php echo e(base_url('blogs')); ?>">Lihat Selengkapnya</a>
                </div>
            </div>
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7.3\htdocs\gmi\application\views/dashboard/detail_article.blade.php ENDPATH**/ ?>