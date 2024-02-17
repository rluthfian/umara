

<?php $__env->startSection('title', 'Data Dosen'); ?>

<?php $__env->startSection('content'); ?>
<section id="dosen-hero">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 py-5 col-lg-12 p-lg-5">
                <h1 class="fw-bold d-inline-block" style="border-bottom: 1px solid #000000;">KAPRODI D3 RPLA TELKOM UNIVERSITY</h1>
                <div class="container-fluid px-0">
                    <div class="row">
                        <?php $__currentLoopData = $kaprodi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-12">
                            <!-- <img src="<?php echo e($value->imageUrl); ?>" alt=""> -->
                            <h3><?php echo e($value->name); ?></h3>
                            <h5 class="fw-bold">Riwayat Pendidikan</h5>
                            <ul>
                            <li><?php echo e($value->pendidikan1); ?></li>
                            <li><?php echo e($value->pendidikan2); ?></li>
                            </ul>
                           
                            <p>Email : <?php echo e($value->email); ?></p>
                            <p>Status : <span class="text-success"><?php echo e($value->status); ?></span></p>
                            <p>NIP : <?php echo e($value->nip); ?></p>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

            </div>
            <div class="col-12 py-5 col-lg-12 p-lg-5">
                <h2 class="fw-bold d-inline-block mb-3" style="border-bottom: 1px solid #000000;">DATA DOSEN D3 RPLA TELKOM UNIVERSITY</h2>

                <div class="container-fluid px-0">
                    <div class="row">
                        <?php $__currentLoopData = $dosens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-12">
                            <!-- <img src="<?php echo e($value->imageUrl); ?>" alt=""> -->
                            <h3><?php echo e($value->name); ?></h3>
                            <h5 class="fw-bold">Riwayat Pendidikan</h5>
                            <ul>
                            <li><?php echo e($value->pendidikan1); ?></li>
                            <li><?php echo e($value->pendidikan2); ?></li>
                            </ul>
                           
                            <p>Email : <?php echo e($value->email); ?></p>
                            <p>Status : <span class="text-success"><?php echo e($value->status); ?></span></p>
                            <p>NIP : <?php echo e($value->nip); ?></p>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7.3\htdocs\chevalier\application\views/dashboard/dosen.blade.php ENDPATH**/ ?>