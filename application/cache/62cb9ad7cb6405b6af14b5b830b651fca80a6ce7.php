

<?php $__env->startSection('title', 'CMS | Kontak Kami'); ?>

<?php $__env->startSection('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 font-weight-bolder">Kontak Kami</h1>
    </div>

    <!-- HUBUNGI KAMI -->
    <div class="card shadow mb-1">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary"> <i class="fas fa-newspaper"></i> Hubungi Kami Preview</h6>
            <a class="btn btn-success" data-toggle="modal" data-target="#addContactModal">
                <h6 class="m-0"><i class="fas fa-plus fa-sm text-white-100"></i> Add Hubungi Kami</h6>
            </a>
        </div>
    </div>

    <div class="row d-flex justify-content-center">
        <?php $__currentLoopData = $contact; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-3 col-12 my-2">
            <div class="card h-100 p-lg-5 p-3 position-relative">
                <img src="<?php echo e(assets_url('images/cms/contact/')); ?><?php echo e($value->photo); ?>" width="48" class="mb-5" alt="">
                <h5 class="montserrat-bold-text"><?php echo e($value->title); ?></h5>
                <p><?php echo e($value->content); ?></p>
                <p class="montserrat-bold-text" style="color:#C39D27"><?php echo e(preg_replace('/^0/', '+62', $value->contact)); ?></p>

                <div>
                    <button style="opacity:0.5" onclick="modalEditHubungiKami('<?php echo e($value->id_contact); ?>')" class="btn btn-primary">Edit</button>
                    <button style="opacity:0.5" onclick="hapusHubungiKami('<?php echo e($value->id_contact); ?>')" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>


    <!-- CABANG KAMI -->
    <div class="card shadow mb-1">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary"> <i class="fas fa-newspaper"></i> Cabang Kami Preview</h6>
            <a class="btn btn-success" data-toggle="modal" data-target="#addCabangModal">
                <h6 class="m-0"><i class="fas fa-plus fa-sm text-white-100"></i> Add Cabang Kami</h6>
            </a>
        </div>
    </div>

    <div class="pt-5 row d-flex justify-content-center">
        <?php $__currentLoopData = $branch_office; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-12 col-lg-6 mt-2 mb-5">
            <div class="container-fluid">
                <div class="row d-flex justify-content-center">
                    <div class="col-3 col-lg-4">
                        <img src="<?php echo e(assets_url('images/cms/contact/')); ?><?php echo e($value->photo); ?>" class="w-100" alt="">
                    </div>
                    <div class="col-8 col-lg-5">
                        <h3 class="montserrat-bold-text"><?php echo e($value->name_office); ?></h3>
                        <p><?php echo e($value->full_address); ?></p>
                        <a target="_blank" href="<?php echo e($value->link_maps); ?>" class="btn btn-custom">Buka Maps</a>
                        <div>
                            <button style="opacity:0.5" onclick="modalEditCabangKami('<?php echo e($value->id_office); ?>')" class="btn btn-primary">Edit</button>
                            <button style="opacity:0.5" onclick="hapusCabangKami('<?php echo e($value->id_office); ?>')" class="btn btn-danger">Delete</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<!-- End of Main Content -->

<!-- MODAL ADD HUBUNGI KAMI -->
<div class="modal fade" id="addContactModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Hubungi Kami</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form id="addHubungiKamiForm">
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" autocomplete="off" name="title">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Content</label>
                            <input type="text" class="form-control" autocomplete="off" name="content">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Contact</label>
                            <input type="text" class="form-control" autocomplete="off" name="contact">
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
                <button type="button" class="btn btn-primary" onclick="addHubungiKami()">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL EDIT HUBUNGI KAMI -->
<div class="modal fade" id="editContactModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Hubungi Kami</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form id="updateHubungiKamiForm">
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" autocomplete="off" name="title">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Content</label>
                            <input type="text" class="form-control" autocomplete="off" name="content">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Contact</label>
                            <input type="text" class="form-control" autocomplete="off" name="contact">
                        </div>
                        <div class="mb-3">
                            <!-- Display existing photo -->
                            <img id="existingPhoto" src="" alt="Existing Photo" style="max-width: 100%; margin-bottom: 10px;">

                            <!-- Checkbox to change photo -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="changePhotoCheckbox">
                                <label class="form-check-label" for="changePhotoCheckbox">
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
                <button id="updateHubungiKamiBtn" type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL ADD CABANG KAMI -->
<div class="modal fade" id="addCabangModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Cabang Kami</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form id="addCabangKamiForm">
                        <div class="mb-3">
                            <label class="form-label">Nama Cabang</label>
                            <input type="text" class="form-control" autocomplete="off" name="name_office">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <input type="text" class="form-control" autocomplete="off" name="full_address">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Link Maps</label>
                            <input type="text" class="form-control" autocomplete="off" name="link_maps">
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
                <button type="button" class="btn btn-primary" onclick="addCabangKami()">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL EDIT CABANG KAMI -->
<div class="modal fade" id="editCabangModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Hubungi Kami</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form id="updateCabangKamiForm">
                        <div class="mb-3">
                            <label class="form-label">Nama Cabang</label>
                            <input type="text" class="form-control" autocomplete="off" name="name_office">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <input type="text" class="form-control" autocomplete="off" name="full_address">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Link Maps</label>
                            <input type="text" class="form-control" autocomplete="off" name="link_maps">
                        </div>
                        <div class="mb-3">
                            <!-- Display existing photo -->
                            <img id="existingPhotoCabang" src="" alt="Existing Photo" style="max-width: 100%; margin-bottom: 10px;">

                            <!-- Checkbox to change photo -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="changePhotoCheckboxCabang">
                                <label class="form-check-label" for="changePhotoCheckboxCabang">
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
                <button id="updateCabangKamiBtn" type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // When the checkbox is clicked, toggle the visibility of the file input
        document.getElementById("changePhotoCheckbox").addEventListener("change", function() {
            // Select the input element with the name "photo" inside the form with ID "updateHubungiKamiForm"
            var photoInput = document.getElementById("updateHubungiKamiForm").querySelector("input[name='photo']");

            if (photoInput) {
                photoInput.style.display = this.checked ? "block" : "none";
            }
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // When the checkbox is clicked, toggle the visibility of the file input
        document.getElementById("changePhotoCheckboxCabang").addEventListener("change", function() {
            // Select the input element with the name "photo" inside the form with ID "updateHubungiKamiForm"
            var photoInput = document.getElementById("updateCabangKamiForm").querySelector("input[name='photo']");

            if (photoInput) {
                photoInput.style.display = this.checked ? "block" : "none";
            }
        });
    });
</script>
<!-- SCRIPT ADD HUBUNGI KAMI -->
<script>
    function addHubungiKami() {
        var formData = new FormData(document.getElementById('addHubungiKamiForm'));
        $.ajax({
            url: "<?php echo e(base_url('admin/contact/addHubungiKami')); ?>",
            type: "POST",
            data: formData, // Remove enctype property
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

<!-- SCRIPT EDIT HUBUNGI KAMI -->
<script>
    function modalEditHubungiKami(id_contact) {
        $.ajax({
            url: "<?php echo e(base_url('admin/contact/editHubungiKami/')); ?>" + id_contact,
            type: "GET",
            success: function(response) {
                var responseData = JSON.parse(response);
                var title = responseData.title;
                var content = responseData.content;
                var contact = responseData.contact;
                var id_contact = responseData.id_contact;
                var photo = responseData.photo;

                // Set the values of the input fields in the form
                $("#updateHubungiKamiForm input[name='title']").val(title);
                $("#updateHubungiKamiForm input[name='content']").val(content);
                $("#updateHubungiKamiForm input[name='contact']").val(contact);
                // $("#updateHubungiKamiForm input[name='photo']").val(photo); // Do not set the file input value

                // Display the existing photo and provide an option to change it
                if (photo) {
                    $("#existingPhoto").attr("src", "<?php echo e(assets_url('images/cms/contact/')); ?>" + photo);
                    $("#changePhotoCheckbox").show();
                } else {
                    $("#existingPhoto").attr("src", ""); // Clear the existing photo
                    $("#changePhotoCheckbox").hide();
                }

                $("#updateHubungiKamiBtn").off('click').on('click', function() {
                    // Call the updateHubungiKami function with id_contact
                    updateHubungiKami(id_contact);
                });
                $("#editContactModal").modal('show');
            },
            error: function() {
                alert('Error: Unable to communicate with the server');
            }
        });
    }
</script>

<script>
    function updateHubungiKami(id_contact) {
        var formData = new FormData(document.getElementById('updateHubungiKamiForm'));
        $.ajax({
            url: "<?php echo e(base_url('admin/contact/updateHubungiKami/')); ?>" + id_contact,
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
    function hapusHubungiKami(id_contact) {
        Swal.fire({
            icon: "warning",
            title: "Delete",
            text: 'Apakah Anda yakin ingin menghapus Content ini?',
            showCancelButton: true,
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "<?php echo e(base_url('admin/contact/deleteHubungiKami/')); ?>" + id_contact,
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

<!-- CABANG KAMI -->
<!-- SCRIPT ADD CABANG KAMI -->
<script>
    function addCabangKami() {
        var formData = new FormData(document.getElementById('addCabangKamiForm'));
        

        $.ajax({
            url: "<?php echo e(base_url('admin/contact/addCabangKami')); ?>",
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

<!-- SCRIPT EDIT HUBUNGI KAMI -->
<script>
    function modalEditCabangKami(id_office) {
        $.ajax({
            url: "<?php echo e(base_url('admin/contact/editCabangKami/')); ?>" + id_office,
            type: "GET",
            success: function(response) {
                var responseData = JSON.parse(response);
                var name_office = responseData.name_office;
                var full_address = responseData.full_address;
                var link_maps = responseData.link_maps;
                var id_office = responseData.id_office;
                var photo = responseData.photo;

                // Set the values of the input fields in the form
                $("#updateCabangKamiForm input[name='name_office']").val(name_office);
                $("#updateCabangKamiForm input[name='full_address']").val(full_address);
                $("#updateCabangKamiForm input[name='link_maps']").val(link_maps);
                 // Display the existing photo and provide an option to change it
                 if (photo) {
                    $("#existingPhotoCabang").attr("src", "<?php echo e(assets_url('images/cms/contact/')); ?>" + photo);
                    $("#changePhotoCheckboxCabang").show();
                } else {
                    $("#existingPhotoCabang").attr("src", ""); // Clear the existing photo
                    $("#changePhotoCheckboxCabang").hide();
                }
                $("#updateCabangKamiBtn").off('click').on('click', function() {
                    // Call the updateCabangKami function with id_contact
                    updateCabangKami(id_office);
                });
                $("#editCabangModal").modal('show');

            },
            error: function() {
                alert('Error: Unable to communicate with the server');
            }
        });
    }
</script>

<script>
    function updateCabangKami(id_office) {
        var formData = new FormData(document.getElementById('updateCabangKamiForm'));
        $.ajax({
            url: "<?php echo e(base_url('admin/contact/updateCabangKami/')); ?>" + id_office,
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
    function hapusCabangKami(id_office) {
        Swal.fire({
            icon: "warning",
            title: "Delete",
            text: 'Apakah Anda yakin ingin menghapus Content ini?',
            showCancelButton: true,
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "<?php echo e(base_url('admin/contact/deleteCabangKami/')); ?>" + id_office,
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
<?php echo $__env->make('admin/layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7.3\htdocs\gmi\application\views/admin/contact/index.blade.php ENDPATH**/ ?>