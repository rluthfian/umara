

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
  </div>
  <!-- Content Row -->
  <div class="row">
    <!-- Jumlah Product -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                Jumlah Product</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo e($total_products); ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-shopping-bag fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Jumlah Article -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                Jumlah Article</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo e($total_article); ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-newspaper fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Jumlah Admin -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                Jumlah Admin</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo e($total_admin); ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-user fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END CONTENT ROW -->

  <!-- Content Row -->
  <div class="row">
    <!-- Product Overview -->
    <div class="col-xl-8 col-lg-7">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary"> <i class="fas fa-shopping-bag"></i> Product Overview</h6>
        </div>
        <!-- Card Body -->

        <?php if($total_products > 0): ?> <div class="card-body">
          <div class="product-overview text-center">
            <table class="w-100">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Product Name</th>
                  <th>Price</th>
                  <th>Action</th>
                  <!-- Add more columns as needed -->
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($key+1); ?></td>
                  <td><?php echo e($value->product_name); ?></td>
                  <td><?php echo e($value->price); ?></td>
                  <td><i class="fas fa-edit"></i></td>
                  <!-- Add more columns as needed -->
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div>
        </div>
        <?php else: ?>
        <div class="card-body product-overview d-flex justify-content-center align-items-center">
          <div class="text-center">
            <p>Belum ada product</p>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-100"></i> Add Product</a>
          </div>
        </div>
        <?php endif; ?>
      </div>
    </div>

    <!-- Article Overview -->
    <div class="col-xl-4 col-lg-5">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-newspaper"></i> Article Overview</h6>

        </div>
        <?php if($total_article > 0): ?>
        <!-- Card Body -->
        <div class="card-body px-3">
          <div class="article-overview text-center">
            <table class="w-100">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Title Article</th>
                  <!-- Add more columns as needed -->
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $article; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($key+1); ?></td>
                  <td><?php echo e($value->article_name); ?></td>
                  <!-- Add more columns as needed -->
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div>
        </div>
        <?php else: ?>
        <div class="card-body article-overview d-flex justify-content-center align-items-center">
          <div class="text-center">
            <p>Belum ada Article</p>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-100"></i> Add Article</a>
          </div>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<!-- End of Main Content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7.3\htdocs\gmi\application\views/admin/index.blade.php ENDPATH**/ ?>