

<?php $__env->startSection('title', 'CMS | Tentang Kami'); ?>

<?php $__env->startSection('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 font-weight-bolder">Tentang Kami</h1>

    </div>

    <!-- HERO -->
    <div class="card shadow mb-1">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary"> <i class="fas fa-newspaper"></i> Hero Preview</h6>
            <div>
                <button style="opacity:0.5" onclick="modalEditHero('<?php echo e($about_us[0]->id_about); ?>')" class="btn btn-primary">Edit</button>
            </div>
        </div>
    </div>

    <div class="row d-flex justify-content-center">
        <div class="col-12 p-lg-5">
            <img src="<?php echo e(assets_url('images/cms/about/')); ?><?php echo e($about_us[0]->photo); ?>" class="w-100" alt="">
        </div>

        <div class="col-12 p-lg-5">
            <h2 class="fs-5 montserrat-bold-text" style="color:#9C7E1F">Tentang Kami</h2>
            <h3 class="fs-3 montserrat-bold-text mb-3"><?php echo e($about_us[0]->title); ?></h3>
            <p><?php echo e($about_us[0]->content); ?></p>
        </div>
    </div>



    <!-- CABANG KAMI -->
    <div class="card shadow mb-1">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary"> <i class="fas fa-newspaper"></i> Our Team Preview</h6>
            <a class="btn btn-success" data-toggle="modal" data-target="#addOurTeam">
                <h6 class="m-0"><i class="fas fa-plus fa-sm text-white-100"></i> Add Team</h6>
            </a>
        </div>
    </div>

    <div class="pt-5 row d-flex justify-content-center">
        <div class="col-lg-12 px-lg-5 text-center">
            <h2 class="montserrat-bold-text">Our Team</h2>
            <div class="swiper swiperFounder">
                <div class="swiper-wrapper">
                    <?php $__currentLoopData = $our_team; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="swiper-slide text-center">
                        <div class="p-lg-3 text-center swiper-img">
                            <div class="wrapper-img-slider mx-auto mb-3">
                                <img src="<?php echo e(assets_url('images/cms/about/')); ?><?php echo e($value->photo); ?>" style="border-radius:50%;object-fit:cover;" width="200" height="200" alt="">
                            </div>
                            <h3><?php echo e($value->name); ?></h3>
                            <h5 class="montserrat-bold-text"><?php echo e($value->jabatan); ?></h5>
                            <button type="button" class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <h5 class="mb-0">Lihat Profil</h5>
                            </button>
                            <div>
                                <button style="opacity:0.5" onclick="modalEditOurTeam('<?php echo e($value->id_team); ?>')" class="btn btn-primary">Edit</button>
                                <button style="opacity:0.5" onclick="hapusOurTeam('<?php echo e($value->id_team); ?>')" class="btn btn-danger">Delete</button>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>

    <!-- CABANG KAMI -->
    <div class="card shadow mb-1">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary"> <i class="fas fa-newspaper"></i> Gallery Preview</h6>
            <a class="btn btn-success" data-toggle="modal" data-target="#addGallery">
                <h6 class="m-0"><i class="fas fa-plus fa-sm text-white-100"></i> Add Gallery</h6>
            </a>
        </div>
    </div>

    <div class="pt-5 row d-flex justify-content-center">
        <div class="col-12 text-center px-lg-5">
            <h2 class="fs-5 montserrat-bold-text" style="color:#9C7E1F">Gallery</h2>
            <h1 class="montserrat-bold-text">Koleksi Foto Kami</h1>
            <div class="row">
                <?php $__currentLoopData = $photo_collection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-3 mb-3">
                    <img src="<?php echo e(assets_url('images/cms/about/')); ?><?php echo e($value->photo); ?>" class="img-fluid" alt="<?php echo e($value->photo); ?>">
                    <div class="my-3">
                        <button style="opacity:0.5" onclick="modalEditGallery('<?php echo e($value->id_collection); ?>')" class="btn btn-primary">Edit</button>
                        <button style="opacity:0.5" onclick="hapusGallery('<?php echo e($value->id_collection); ?>')" class="btn btn-danger">Delete</button>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
<!-- End of Main Content -->

<!-- MODAL EDIT ABOUT -->
<div class="modal fade" id="editAboutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit About</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form id="updateAboutForm">
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" autocomplete="off" name="title">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Content</label>
                            <input type="text" class="form-control" autocomplete="off" name="content">
                        </div>
                        <div class="mb-3">
                            <img id="existingPhoto" src="" alt="Existing Photo" style="max-width: 100%; margin-bottom: 10px;">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="changePhotoCheckbox">
                                <label class="form-check-label" for="changePhotoCheckbox">
                                    Change Photo
                                </label>
                            </div>
                            <input type="file" class="form-control" autocomplete="off" name="photo" size="20" style="display: none;">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button id="updateAboutBtn" type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL ADD OUR TEAM -->
<div class="modal fade" id="addOurTeam" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Our Team</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form id="addOurTeamForm">
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" autocomplete="off" name="name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jabatan</label>
                            <input type="text" class="form-control" autocomplete="off" name="jabatan">
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
                <button type="button" class="btn btn-primary" onclick="addOurTeam()">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL EDIT OUR TEAM -->
<div class="modal fade" id="editOurTeamModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
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
                    <form id="updateOurTeamForm">
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" autocomplete="off" name="name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jabatan</label>
                            <input type="text" class="form-control" autocomplete="off" name="jabatan">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Content</label>
                            <input type="text" class="form-control" autocomplete="off" name="content">
                        </div>
                        <div class="mb-3">
                            <!-- Display existing photo -->
                            <img id="existingPhotoOurTeam" src="" alt="Existing Photo" style="max-width: 100%; margin-bottom: 10px;">

                            <!-- Checkbox to change photo -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="changePhotoCheckboxOurTeam">
                                <label class="form-check-label" for="changePhotoCheckboxOurTeam">
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
                <button id="updateOurTeamBtn" type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL ADD GALLERY -->
<div class="modal fade" id="addGallery" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Gallery</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form id="addGalleryForm">
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
                <button type="button" class="btn btn-primary" onclick="addGallery()">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL EDIT Gallery -->
<div class="modal fade" id="editGalleryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
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
                    <form id="updateGalleryForm">
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" autocomplete="off" name="title">
                        </div>
                        <div class="mb-3">
                            <!-- Display existing photo -->
                            <img id="existingPhotoGallery" src="" alt="Existing Photo" style="max-width: 100%; margin-bottom: 10px;">

                            <!-- Checkbox to change photo -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="changePhotoCheckboxGallery">
                                <label class="form-check-label" for="changePhotoCheckboxGallery">
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
                <button id="updateGalleryBtn" type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("changePhotoCheckbox").addEventListener("change", function() {
            var photoInput = document.getElementById("updateAboutForm").querySelector("input[name='photo']");

            if (photoInput) {
                photoInput.style.display = this.checked ? "block" : "none";
            }
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("changePhotoCheckboxOurTeam").addEventListener("change", function() {
            var photoInput = document.getElementById("updateOurTeamForm").querySelector("input[name='photo']");

            if (photoInput) {
                photoInput.style.display = this.checked ? "block" : "none";
            }
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("changePhotoCheckboxGallery").addEventListener("change", function() {
            var photoInput = document.getElementById("updateGalleryForm").querySelector("input[name='photo']");

            if (photoInput) {
                photoInput.style.display = this.checked ? "block" : "none";
            }
        });
    });
</script>

<!-- SCRIPT EDIT ABOUT US HERO -->
<script>
    function modalEditHero(id_about) {
        $.ajax({
            url: "<?php echo e(base_url('admin/about/editAbout/')); ?>" + id_about,
            type: "GET",
            success: function(response) {
                var responseData = JSON.parse(response);
                var photo = responseData.photo;
                var title = responseData.title;
                var content = responseData.content;

                // Set the values of the input fields in the form
                $("#updateAboutForm input[name='title']").val(title);
                $("#updateAboutForm input[name='content']").val(content);

                // Display the existing photo and provide an option to change it
                if (photo) {
                    $("#existingPhoto").attr("src", "<?php echo e(assets_url('images/cms/about/')); ?>" + photo);
                    $("#changePhotoCheckbox").show();
                } else {
                    $("#existingPhoto").attr("src", ""); // Clear the existing photo
                    $("#changePhotoCheckbox").hide();
                }

                $("#updateAboutBtn").off('click').on('click', function() {
                    updateAbout(id_about);
                });
                $("#editAboutModal").modal('show');
            },
            error: function() {
                alert('Error: Unable to communicate with the server');
            }
        });
    }
</script>

<script>
    function updateAbout(id_about) {
        var formData = new FormData(document.getElementById('updateAboutForm'));
        $.ajax({
            url: "<?php echo e(base_url('admin/about/updateAbout/')); ?>" + id_about,
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



<!-- OUR TEAM -->
<!-- SCRIPT ADD OUR TEAM -->
<script>
    function addOurTeam() {
        var formData = new FormData(document.getElementById('addOurTeamForm'));
        $.ajax({
            url: "<?php echo e(base_url('admin/about/addOurTeam')); ?>",
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
    function modalEditOurTeam(id_team) {
        $.ajax({
            url: "<?php echo e(base_url('admin/about/editOurTeam/')); ?>" + id_team,
            type: "GET",
            success: function(response) {
                var responseData = JSON.parse(response);
                var name = responseData.name;
                var jabatan = responseData.jabatan;
                var content = responseData.content;
                var photo = responseData.photo;

                // Set the values of the input fields in the form
                $("#updateOurTeamForm input[name='name']").val(name);
                $("#updateOurTeamForm input[name='jabatan']").val(jabatan);
                $("#updateOurTeamForm input[name='content']").val(content);
                // Display the existing photo and provide an option to change it
                if (photo) {
                    $("#existingPhotoOurTeam").attr("src", "<?php echo e(assets_url('images/cms/about/')); ?>" + photo);
                    $("#changePhotoCheckboxOurTeam").show();
                } else {
                    $("#existingPhotoOurTeam").attr("src", ""); // Clear the existing photo
                    $("#changePhotoCheckboxOurTeam").hide();
                }
                $("#updateOurTeamBtn").off('click').on('click', function() {
                    // Call the updateOurTeam function with id_about
                    updateOurTeam(id_team);
                });
                $("#editOurTeamModal").modal('show');

            },
            error: function() {
                alert('Error: Unable to communicate with the server');
            }
        });
    }
</script>

<script>
    function updateOurTeam(id_team) {
        var formData = new FormData(document.getElementById('updateOurTeamForm'));
        $.ajax({
            url: "<?php echo e(base_url('admin/about/updateOurTeam/')); ?>" + id_team,
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
    function hapusOurTeam(id_team) {
        Swal.fire({
            icon: "warning",
            title: "Delete",
            text: 'Apakah Anda yakin ingin menghapus Content ini?',
            showCancelButton: true,
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "<?php echo e(base_url('admin/about/deleteOurTeam/')); ?>" + id_team,
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

<!-- OUR TEAM -->
<!-- SCRIPT ADD OUR TEAM -->
<script>
    function addGallery() {
        var formData = new FormData(document.getElementById('addGalleryForm'));
        $.ajax({
            url: "<?php echo e(base_url('admin/about/addGallery')); ?>",
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
    function modalEditGallery(id_collection) {
        $.ajax({
            url: "<?php echo e(base_url('admin/about/editGallery/')); ?>" + id_collection,
            type: "GET",
            success: function(response) {
                var responseData = JSON.parse(response);
                var title = responseData.title;
                var photo = responseData.photo;

                // Set the values of the input fields in the form
                $("#updateGalleryForm input[name='title']").val(title);
                // Display the existing photo and provide an option to change it
                if (photo) {
                    $("#existingPhotoGallery").attr("src", "<?php echo e(assets_url('images/cms/about/')); ?>" + photo);
                    $("#changePhotoCheckboxGallery").show();
                } else {
                    $("#existingPhotoGallery").attr("src", ""); // Clear the existing photo
                    $("#changePhotoCheckboxGallery").hide();
                }
                $("#updateGalleryBtn").off('click').on('click', function() {
                    // Call the updateGallery function with id_about
                    updateGallery(id_collection);
                });
                $("#editGalleryModal").modal('show');

            },
            error: function() {
                alert('Error: Unable to communicate with the server');
            }
        });
    }
</script>

<script>
    function updateGallery(id_collection) {
        var formData = new FormData(document.getElementById('updateGalleryForm'));
        $.ajax({
            url: "<?php echo e(base_url('admin/about/updateGallery/')); ?>" + id_collection,
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
    function hapusGallery(id_collection) {
        Swal.fire({
            icon: "warning",
            title: "Delete",
            text: 'Apakah Anda yakin ingin menghapus Content ini?',
            showCancelButton: true,
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "<?php echo e(base_url('admin/about/deleteGallery/')); ?>" + id_collection,
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
<?php echo $__env->make('admin/layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7.3\htdocs\gmi\application\views/admin/about/index.blade.php ENDPATH**/ ?>