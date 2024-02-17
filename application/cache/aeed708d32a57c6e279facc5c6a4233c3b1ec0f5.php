

<?php $__env->startSection('title', 'Arsip Chevalier'); ?>

<?php $__env->startSection('content'); ?>
<section id="dosen-hero">
   <div class="container-fluid">
      <div class="row">
         <div class="col-12 py-5 col-lg-12 p-lg-5 text-center">
            <h1 class="fw-bold d-inline-block" style="border-bottom: 1px solid #000000;">ARSIP</h1>
         </div>
         <?php $__currentLoopData = $arsip; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <div class="col-6 text-center pb-3">
            <img src="<?php echo e(assets_url('images/arsip/')); ?><?php echo e($value->foto); ?>" width="250" height="250" alt="">
            <h3 class=" pt-3 fw-bold"><?php echo e($value->title); ?></h3>
            <p class=""><?php echo e($value->isi_arsip); ?></p>
            <a class="px-3 btn btn-custom-primary" href="">READ MORE</a>
         </div>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
   </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7.3\htdocs\chevalier\application\views/dashboard/arsip.blade.php ENDPATH**/ ?>