

<?php $__env->startSection('title', 'Blogs'); ?>

<?php $__env->startSection('content'); ?>
<section id="blogs" class="p-lg-5">
   <div class="container-fluid px-lg-5">
      <div class="row">
         <div class="col-12 px-lg-5">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-12 col-lg-6 order-2 order-lg-1">
                     <h2 class="fs-5 montserrat-bold-text pt-lg-0 pt-3" style="color:#C39D27">Edukasi & Blogs</h2>
                     <h1 class="montserrat-bold-text">Belajar Investasi Menguntungkan</h1>
                     <p>Edukasi emas dapat membantu Anda untuk berinvestasi emas dengan aman dan terjamin</p>
                     <a target="_blank" href="https://api.whatsapp.com/send/?phone=6282215711339&text&type=phone_number&app_absent=0" class="btn text-dark border-dark p-3 btn-custom my-3 my-lg-0">Konsultasi Sekarang</a>
                  </div>
                  <div class="col-12 col-lg-6 px-lg-0 order-1 order-lg-2">
                     <img src="<?php echo e(assets_url('images/blogs_1.png')); ?>" class="img-fluid" alt="">
                  </div>
               </div>
            </div>
         </div>
         <div class="col-12 p-lg-5 py-3">
            <div class="container-fluid">
               <div class="row">
                  <?php $__currentLoopData = $article; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php
                  $createdAt = strtotime($value->created_at);
                  $day = date('d', $createdAt);
                  $month = date('F', $createdAt);
                  $year = date('Y', $createdAt);
                  ?>
                  <div class="blogs-wrapper col-12 col-lg-4 pt-3" style="border-radius: 20px;">
                     <a class="text-decoration-none position-relative" href="<?php echo e(base_url('article')); ?>/<?php echo e($value->article_id); ?>">
                        <img src="<?php echo e(assets_url('images/blogs_2.png')); ?>" class="img-fluid" alt="">
                        <p class="montserrat-bold-text date-blogs mt-3 mb-1" style="color:#C39D27;">GMI | <?php echo e($day); ?> <?php echo e($month); ?> <?php echo e($year); ?></p>
                        <div class="position-relative">
                           <img src="<?php echo e(assets_url('images/wrap_icon.png')); ?>" width="30" height="35" class="position-absolute" style="top:0;right:0;" alt="">
                           <?php
                           $articleNames = explode(' ', $value->article_name);
                           $articleName = implode(' ', array_slice($articleNames, 0, 3));
                           $articleName = count($articleNames) > 3 ? $articleName . '...' : $articleName;
                           ?>
                           <h3 class="text-dark montserrat-bold-text title-blogs"><?php echo e($articleName); ?></h3>
                           <?php
                           $contentWords = explode(' ', $value->article_content);
                           $limitedContent = implode(' ', array_slice($contentWords, 0, 10));
                           $limitedContent = count($contentWords) > 10 ? $limitedContent . '...' : $limitedContent;
                           ?>
                           <p class="text-dark"><?php echo e($limitedContent); ?></p>
                        </div>
                     </a>
                  </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7.3\htdocs\gmi\application\views/dashboard/blogs.blade.php ENDPATH**/ ?>