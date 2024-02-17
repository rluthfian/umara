

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <a onclick="history.back();" style="cursor:pointer;"><i class="fas fa-arrow-left"></i> Back to article</a>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">

        <h1 class="h3 mb-0 text-gray-800">Article</h1>
    </div>
    <!-- Content Row -->
    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary"> <i class="fas fa-newspaper"></i> Article Edit</h6>
                </div>
                <!-- Card Body -->

                <div class="card-body">
                    <form id="updateArticleForm">
                        <div class="mb-3">
                            <label class="form-label">Article Name</label>
                            <input type="text" class="form-control" name="article_name" value="<?php echo e($article->article_name); ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Article Content</label>
                            <input type="text" class="form-control" name="article_content" value="<?php echo e($article->article_content); ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Author</label>
                            <input type="text" class="form-control" name="author" value="<?php echo e($article->author); ?>">
                        </div>
                        <button type="button" class="btn btn-primary" onclick="updateArticle()">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Main Content -->

    <!-- Page level custom scripts -->
    <script>
        function updateArticle() {
            var formData = $('#updateArticleForm').serialize();

            $.ajax({
                url: "<?php echo e(base_url('admin/article/updateArticle/' . $article->article_id)); ?>",
                type: "POST",
                data: formData,
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'success') {
                        Swal.fire({
                            icon: "success",
                            title: "Success",
                            text: response.message,
                            showCancelButton: false,
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = "<?php echo e(base_url('admin/article')); ?>";
                            }
                        });
                        console.log('Article updated successfully');
                    } else {
                        Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            text: response.message,
                        });
                    }
                },
                error: function() {
                    alert('Error: Unable to communicate with the server');
                }
            });
        }
    </script>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7.3\htdocs\gmi\application\views/admin/article/edit.blade.php ENDPATH**/ ?>