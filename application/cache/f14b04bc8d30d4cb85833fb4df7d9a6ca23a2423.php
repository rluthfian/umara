

<?php $__env->startSection('title', 'CMS | Article'); ?>

<?php $__env->startSection('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 font-weight-bolder">Edukasi & Blogs</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Jumlah Edukasi & Blogs</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo e($total_article); ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary"> <i class="fas fa-newspaper"></i> Article Overview</h6>
                    <a href="<?php echo e(base_url('admin/article/add')); ?>" class="btn btn-success">
                        <h6 class="m-0"><i class="fas fa-plus fa-sm text-white-100"></i> Add New Article</h6>
                    </a>
                </div>
                <!-- Card Body -->

                <?php if($total_article > 0): ?> <div class="card-body">
                    <div class="product-overview text-center">
                        <table class="w-100">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Article Name</th>
                                    <th>Author</th>
                                    <th>Action</th>
                                    <!-- Add more columns as needed -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $article; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($key+1); ?></td>
                                    <td><?php echo e($value->article_name); ?></td>
                                    <td><?php echo e($value->author); ?></td>
                                    <td><a href="<?php echo e(base_url('admin/article/edit/')); ?><?php echo e($value->article_id); ?>"><i class="fas fa-edit mx-2"></i></a>
                                        <button class="btn" onclick="deleteArticle('<?php echo e($value->article_id); ?>')"><i class="fas fa-trash-alt"></i></button>
                                    </td>
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
    </div>
</div>
<!-- End of Main Content -->

<script>
    function deleteArticle(article_id) {
    Swal.fire({
        icon: "warning",
        title: "Delete",
        text: 'Apakah Anda yakin ingin menghapus article?',
        showCancelButton: true,
    }).then((result) => {
        if (result.isConfirmed) {
            // Send AJAX request to delete article
            $.ajax({
                url: "<?php echo e(base_url('admin/article/deleteArticle/')); ?>" + article_id,
                type: "POST",
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: 'Article deleted successfully!',
                        });
                        // Optionally, you can reload the page or update the UI
                        location.reload();
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Failed to delete article!',
                        });
                    }
                },
                error: function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Unable to communicate with the server!',
                    });
                }
            });
        }
    });
}
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7.3\htdocs\gmi\application\views/admin/article/index.blade.php ENDPATH**/ ?>