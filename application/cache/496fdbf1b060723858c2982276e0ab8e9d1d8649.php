

<?php $__env->startSection('title', 'CMS | Beranda'); ?>

<?php $__env->startSection('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 font-weight-bolder">Beranda</h1>

    </div>

    <!-- CAROUSEL KAMI -->
    <div class="card shadow mb-1">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary"> <i class="fas fa-newspaper"></i> Carousel Preview</h6>
            <a class="btn btn-success" data-toggle="modal" data-target="#addCarousel">
                <h6 class="m-0"><i class="fas fa-plus fa-sm text-white-100"></i> Add Carousel</h6>
            </a>
        </div>
    </div>

    <div class="pt-5 row d-flex justify-content-center">
        <div class="col-12 py-5 col-lg-6 p-lg-5">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <?php $__currentLoopData = $carousel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="swiper-slide">
                        <img src="<?php echo e(assets_url('images/cms/beranda/')); ?><?php echo e($value->photo); ?>" style="width:100%;object-fit:cover;" alt="">
                        <div class="my-3 position-absolute" style="  top: 50%;left: 50%;transform: translate(-50%, -50%);">
                            <button style="opacity:0.5" onclick="modalEditCarousel('<?php echo e($value->id_carousel); ?>')" class="btn btn-primary">Edit</button>
                            <button style="opacity:0.5" onclick="hapusCarousel('<?php echo e($value->id_carousel); ?>')" class="btn btn-danger">Delete</button>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>

    <!-- OUR PARTNERSHIP -->
    <div class="card shadow mb-1">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary"> <i class="fas fa-newspaper"></i> Our Partnership Preview</h6>
            <a class="btn btn-success" data-toggle="modal" data-target="#addOurPartnership">
                <h6 class="m-0"><i class="fas fa-plus fa-sm text-white-100"></i> Add Our Partnership</h6>
            </a>
        </div>
    </div>

    <div class="pt-5 row d-flex justify-content-center">
        <div class="col-12 py-5 py-lg-0 px-lg-5 text-center">
            <h2>Our Partnership</h2>
            <div class="swiper swiperTestimonial">
                <div class="swiper-wrapper">
                    <?php $__currentLoopData = $our_partnership; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="swiper-slide text-center d-flex justify-content-center" style="border-radius:20px">
                        <div class="p-lg-3 text-center swiper-img">
                            <img src="<?php echo e(assets_url('images/cms/beranda/')); ?><?php echo e($value->photo); ?>" class="img-fluid" alt="">
                            <div class="my-3">
                                <button style="opacity:0.5" onclick="modalEditOurPartnership('<?php echo e($value->id_partnership); ?>')" class="btn btn-primary">Edit</button>
                                <button style="opacity:0.5" onclick="hapusOurPartnership('<?php echo e($value->id_partnership); ?>')" class="btn btn-danger">Delete</button>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>

    <!-- OUR SERVICE -->
    <div class="card shadow mb-1">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary"> <i class="fas fa-newspaper"></i> Layanan Kami Preview</h6>
            <a class="btn btn-success" data-toggle="modal" data-target="#addOurService">
                <h6 class="m-0"><i class="fas fa-plus fa-sm text-white-100"></i> Add Layanan Kami</h6>
            </a>
        </div>
    </div>

    <div class="pt-5 row d-flex justify-content-center">
        <div class="col-12">
            <div class="row text-center text-dark justify-content-center d-flex">
                <?php $__currentLoopData = $our_service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div data-aos="fade-up" class="col-6 col-lg-4 p-1 p-lg-3">
                    <div class="card py-3" style="border-radius:15px">
                        <div class="card-body px-lg-4">
                            <img class="image-layanan img-fluid" src="<?php echo e(assets_url('images/cms/beranda/')); ?><?php echo e($value->photo); ?>"  alt="">
                            <h1 class="card-title montserrat-bold-text pt-3"><?php echo e($value->title); ?></h1>
                            <p class="card-text pb-lg-3"><?php echo e($value->content); ?></p>
                            <a href="#" class="text-white btn btn-ask-admin py-2"><?php echo e($value->title); ?></a>
                        </div>
                    </div>
                    <div class="my-3">
                        <button style="opacity:0.5" onclick="modalEditOurService('<?php echo e($value->id_layanan); ?>')" class="btn btn-primary">Edit</button>
                        <button style="opacity:0.5" onclick="hapusOurService('<?php echo e($value->id_layanan); ?>')" class="btn btn-danger">Delete</button>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>

</div>
<!-- End of Main Content -->


<!-- MODAL ADD CAROUSEL -->
<div class="modal fade" id="addCarousel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Carousel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form id="addCarouselForm">
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" autocomplete="off" name="title">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Content</label>
                            <input type="text" class="form-control" autocomplete="off" name="content">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Link</label>
                            <input type="text" class="form-control" autocomplete="off" name="link">
                            <p>Apabila tidak ada link yang dituju maka isi dengan "#"</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Photo</label>
                            <input type="file" class="form-control" autocomplete="off" name="photo" size="20">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="addCarousel()">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL EDIT Carousel-->
<div class="modal fade" id="editCarouselModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Our Team</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form id="updateCarouselForm">
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" autocomplete="off" name="title">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Content</label>
                            <input type="text" class="form-control" autocomplete="off" name="content">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Link</label>
                            <input type="text" class="form-control" autocomplete="off" name="link">
                            <p>Apabila tidak ada link yang dituju maka isi dengan "#"</p>
                        </div>
                        <div class="mb-3">
                            <!-- Display existing photo -->
                            <img id="existingPhotoCarousel" src="" alt="Existing Photo" style="max-width: 100%; margin-bottom: 10px;">

                            <!-- Checkbox to change photo -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="changePhotoCheckboxCarousel">
                                <label class="form-check-label" for="changePhotoCheckboxCarousel">
                                    Change Photo
                                </label>
                            </div>

                            <!-- File input for uploading a new photo (initially hidden) -->
                            <input type="file" class="form-control" autocomplete="off" name="photo" size="20" style="display: none;">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button id="updateCarouselBtn" type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL ADD OurPartnership -->
<div class="modal fade" id="addOurPartnership" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add OurPartnership</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form id="addOurPartnershipForm">
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" autocomplete="off" name="title">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Photo</label>
                            <input type="file" class="form-control" autocomplete="off" name="photo" size="20">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="addOurPartnership()">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL EDIT OurPartnership -->
<div class="modal fade" id="editOurPartnershipModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Our Partnership</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form id="updateOurPartnershipForm">
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" autocomplete="off" name="title">
                        </div>
                        <div class="mb-3">
                            <!-- Display existing photo -->
                            <img id="existingPhotoOurPartnership" src="" alt="Existing Photo" style="max-width: 100%; margin-bottom: 10px;">

                            <!-- Checkbox to change photo -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="changePhotoCheckboxOurPartnership">
                                <label class="form-check-label" for="changePhotoCheckboxOurPartnership">
                                    Change Photo
                                </label>
                            </div>

                            <!-- File input for uploading a new photo (initially hidden) -->
                            <input type="file" class="form-control" autocomplete="off" name="photo" size="20" style="display: none;">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button id="updateOurPartnershipBtn" type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL ADD Our Service -->
<div class="modal fade" id="addOurService" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Our Service</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form id="addOurServiceForm">
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" autocomplete="off" name="title">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Content</label>
                            <input type="text" class="form-control" autocomplete="off" name="content">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Photo</label>
                            <input type="file" class="form-control" autocomplete="off" name="photo" size="20">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="addOurService()">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL EDIT OurService-->
<div class="modal fade" id="editOurServiceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Our Team</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form id="updateOurServiceForm">
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" autocomplete="off" name="title">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Content</label>
                            <input type="text" class="form-control" autocomplete="off" name="content">
                        </div>
                        <div class="mb-3">
                            <!-- Display existing photo -->
                            <img id="existingPhotoOurService" src="" alt="Existing Photo" style="max-width: 100%; margin-bottom: 10px;">

                            <!-- Checkbox to change photo -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="changePhotoCheckboxOurService">
                                <label class="form-check-label" for="changePhotoCheckboxOurService">
                                    Change Photo
                                </label>
                            </div>

                            <!-- File input for uploading a new photo (initially hidden) -->
                            <input type="file" class="form-control" autocomplete="off" name="photo" size="20" style="display: none;">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button id="updateOurServiceBtn" type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("changePhotoCheckboxCarousel").addEventListener("change", function() {
            var photoInput = document.getElementById("updateCarouselForm").querySelector("input[name='photo']");

            if (photoInput) {
                photoInput.style.display = this.checked ? "block" : "none";
            }
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("changePhotoCheckboxOurService").addEventListener("change", function() {
            var photoInput = document.getElementById("updateOurServiceForm").querySelector("input[name='photo']");

            if (photoInput) {
                photoInput.style.display = this.checked ? "block" : "none";
            }
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("changePhotoCheckboxOurPartnership").addEventListener("change", function() {
            var photoInput = document.getElementById("updateOurPartnershipForm").querySelector("input[name='photo']");

            if (photoInput) {
                photoInput.style.display = this.checked ? "block" : "none";
            }
        });
    });
</script>

<!-- CAROUSEL -->
<!-- SCRIPT ADD OUR TEAM -->
<script>
    function addCarousel() {
        var formData = new FormData(document.getElementById('addCarouselForm'));
        $.ajax({
            url: "<?php echo e(base_url('admin/beranda/addCarousel')); ?>",
            type: "POST",
            data: formData,
            dataType: 'json',
            contentType: false, // Set contentType to false when using FormData
            processData: false, // Set processData to false when using FormData
            success: function(response) {
                if (response.status === 'success') {
                    Swal.fire({
                        icon: "success",
                        title: "Success",
                        text: response.message,
                        showCancelButton: false,
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.reload();
                        }
                    });
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

<!-- SCRIPT EDIT OUR TEAM -->
<script>
    function modalEditCarousel(id_carousel) {
        $.ajax({
            url: "<?php echo e(base_url('admin/beranda/editCarousel/')); ?>" + id_carousel,
            type: "GET",
            success: function(response) {
                var responseData = JSON.parse(response);
                var title = responseData.title;
                var content = responseData.content;
                var link = responseData.link;
                var photo = responseData.photo;

                // Set the values of the input fields in the form
                $("#updateCarouselForm input[name='title']").val(title);
                $("#updateCarouselForm input[name='content']").val(content);
                $("#updateCarouselForm input[name='link']").val(link);
                // Display the existing photo and provide an option to change it
                if (photo) {
                    $("#existingPhotoCarousel").attr("src", "<?php echo e(assets_url('images/cms/beranda/')); ?>" + photo);
                    $("#changePhotoCheckboxCarousel").show();
                } else {
                    $("#existingPhotoCarousel").attr("src", ""); // Clear the existing photo
                    $("#changePhotoCheckboxCarousel").hide();
                }
                $("#updateCarouselBtn").off('click').on('click', function() {
                    // Call the updateCarousel function with id_about
                    updateCarousel(id_carousel);
                });
                $("#editCarouselModal").modal('show');

            },
            error: function() {
                alert('Error: Unable to communicate with the server');
            }
        });
    }
</script>

<script>
    function updateCarousel(id_carousel) {
        var formData = new FormData(document.getElementById('updateCarouselForm'));
        $.ajax({
            url: "<?php echo e(base_url('admin/beranda/updateCarousel/')); ?>" + id_carousel,
            type: "POST",
            data: formData,
            dataType: 'json',
            contentType: false, // Set contentType to false when using FormData
            processData: false, // Set processData to false when using FormData
            success: function(response) {
                if (response.status === 'success') {
                    Swal.fire({
                        icon: "success",
                        title: "Success",
                        text: response.message,
                        showCancelButton: false,
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.reload();
                        }
                    });
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

<script>
    function hapusCarousel(id_carousel) {
        Swal.fire({
            icon: "warning",
            title: "Delete",
            text: 'Apakah Anda yakin ingin menghapus Content ini?',
            showCancelButton: true,
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "<?php echo e(base_url('admin/beranda/deleteCarousel/')); ?>" + id_carousel,
                    type: "POST",
                    dataType: 'json',
                    success: function(response) {
                        if (response.status === 'success') {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: 'Content deleted successfully!',
                            });
                            // Optionally, you can reload the page or update the UI
                            location.reload();
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'Failed to delete Content!',
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

<!-- OUR PARTNERSHIP -->
<!-- SCRIPT ADD OUR PARTNERSHIP -->
<script>
    function addOurPartnership() {
        var formData = new FormData(document.getElementById('addOurPartnershipForm'));
        $.ajax({
            url: "<?php echo e(base_url('admin/beranda/addOurPartnership')); ?>",
            type: "POST",
            data: formData,
            dataType: 'json',
            contentType: false, // Set contentType to false when using FormData
            processData: false, // Set processData to false when using FormData
            success: function(response) {
                if (response.status === 'success') {
                    Swal.fire({
                        icon: "success",
                        title: "Success",
                        text: response.message,
                        showCancelButton: false,
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.reload();
                        }
                    });
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
<!-- SCRIPT EDIT OUR TEAM -->
<script>
    function modalEditOurPartnership(id_partnership) {
        $.ajax({
            url: "<?php echo e(base_url('admin/beranda/editOurPartnership/')); ?>" + id_partnership,
            type: "GET",
            success: function(response) {
                var responseData = JSON.parse(response);
                var title = responseData.title;
                var photo = responseData.photo;

                // Set the values of the input fields in the form
                $("#updateOurPartnershipForm input[name='title']").val(title);
                // Display the existing photo and provide an option to change it
                if (photo) {
                    $("#existingPhotoOurPartnership").attr("src", "<?php echo e(assets_url('images/cms/beranda/')); ?>" + photo);
                    $("#changePhotoCheckboxOurPartnership").show();
                } else {
                    $("#existingPhotoOurPartnership").attr("src", ""); // Clear the existing photo
                    $("#changePhotoCheckboxOurPartnership").hide();
                }
                $("#updateOurPartnershipBtn").off('click').on('click', function() {
                    // Call the updateOurPartnership function with id_beranda
                    updateOurPartnership(id_partnership);
                });
                $("#editOurPartnershipModal").modal('show');

            },
            error: function() {
                alert('Error: Unable to communicate with the server');
            }
        });
    }
</script>

<script>
    function updateOurPartnership(id_partnership) {
        var formData = new FormData(document.getElementById('updateOurPartnershipForm'));
        $.ajax({
            url: "<?php echo e(base_url('admin/beranda/updateOurPartnership/')); ?>" + id_partnership,
            type: "POST",
            data: formData,
            dataType: 'json',
            contentType: false, // Set contentType to false when using FormData
            processData: false, // Set processData to false when using FormData
            success: function(response) {
                if (response.status === 'success') {
                    Swal.fire({
                        icon: "success",
                        title: "Success",
                        text: response.message,
                        showCancelButton: false,
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.reload();
                        }
                    });
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

<script>
    function hapusOurPartnership(id_partnership) {
        Swal.fire({
            icon: "warning",
            title: "Delete",
            text: 'Apakah Anda yakin ingin menghapus Content ini?',
            showCancelButton: true,
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "<?php echo e(base_url('admin/beranda/deleteOurPartnership/')); ?>" + id_partnership,
                    type: "POST",
                    dataType: 'json',
                    success: function(response) {
                        if (response.status === 'success') {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: 'Content deleted successfully!',
                            });
                            // Optionally, you can reload the page or update the UI
                            location.reload();
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'Failed to delete Content!',
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

<!-- OUR SERVICE -->
<!-- SCRIPT ADD OUR SERVICE -->
<script>
    function addOurService() {
        var formData = new FormData(document.getElementById('addOurServiceForm'));
        $.ajax({
            url: "<?php echo e(base_url('admin/beranda/addOurService')); ?>",
            type: "POST",
            data: formData,
            dataType: 'json',
            contentType: false, // Set contentType to false when using FormData
            processData: false, // Set processData to false when using FormData
            success: function(response) {
                if (response.status === 'success') {
                    Swal.fire({
                        icon: "success",
                        title: "Success",
                        text: response.message,
                        showCancelButton: false,
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.reload();
                        }
                    });
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

<!-- SCRIPT EDIT OUR TEAM -->
<script>
    function modalEditOurService(id_layanan) {
        $.ajax({
            url: "<?php echo e(base_url('admin/beranda/editOurService/')); ?>" + id_layanan,
            type: "GET",
            success: function(response) {
                var responseData = JSON.parse(response);
                var title = responseData.title;
                var content = responseData.content;
                var photo = responseData.photo;

                // Set the values of the input fields in the form
                $("#updateOurServiceForm input[name='title']").val(title);
                $("#updateOurServiceForm input[name='content']").val(content);
                // Display the existing photo and provide an option to change it
                if (photo) {
                    $("#existingPhotoOurService").attr("src", "<?php echo e(assets_url('images/cms/beranda/')); ?>" + photo);
                    $("#changePhotoCheckboxOurService").show();
                } else {
                    $("#existingPhotoOurService").attr("src", ""); // Clear the existing photo
                    $("#changePhotoCheckboxOurService").hide();
                }
                $("#updateOurServiceBtn").off('click').on('click', function() {
                    // Call the updateOurService function with id_about
                    updateOurService(id_layanan);
                });
                $("#editOurServiceModal").modal('show');

            },
            error: function() {
                alert('Error: Unable to communicate with the server');
            }
        });
    }
</script>

<script>
    function updateOurService(id_layanan) {
        var formData = new FormData(document.getElementById('updateOurServiceForm'));
        $.ajax({
            url: "<?php echo e(base_url('admin/beranda/updateOurService/')); ?>" + id_layanan,
            type: "POST",
            data: formData,
            dataType: 'json',
            contentType: false, // Set contentType to false when using FormData
            processData: false, // Set processData to false when using FormData
            success: function(response) {
                if (response.status === 'success') {
                    Swal.fire({
                        icon: "success",
                        title: "Success",
                        text: response.message,
                        showCancelButton: false,
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.reload();
                        }
                    });
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

<script>
    function hapusOurService(id_layanan) {
        Swal.fire({
            icon: "warning",
            title: "Delete",
            text: 'Apakah Anda yakin ingin menghapus Content ini?',
            showCancelButton: true,
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "<?php echo e(base_url('admin/beranda/deleteOurService/')); ?>" + id_layanan,
                    type: "POST",
                    dataType: 'json',
                    success: function(response) {
                        if (response.status === 'success') {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: 'Content deleted successfully!',
                            });
                            // Optionally, you can reload the page or update the UI
                            location.reload();
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'Failed to delete Content!',
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
<?php echo $__env->make('admin/layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7.3\htdocs\gmi\application\views/admin/beranda/index.blade.php ENDPATH**/ ?>