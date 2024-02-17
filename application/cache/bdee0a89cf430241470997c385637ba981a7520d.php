

<?php $__env->startSection('title', 'Data Dosen | Admin'); ?>

<?php $__env->startSection('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 font-weight-bolder">Data Dosen</h1>
    </div>

    <!-- HUBUNGI KAMI -->
    <div class="card shadow mb-1">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary"> <i class="fas fa-newspaper"></i> Data Dosen Preview</h6>
            <a class="btn btn-success" data-toggle="modal" data-target="#addDosensModal">
                <h6 class="m-0"><i class="fas fa-plus fa-sm text-white-100"></i> Add Dosen</h6>
            </a>
        </div>
    </div>

    <div class="container-fluid px-0">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th class="text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $dosens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($key+1); ?></td>
                            <td><?php echo e($value->name); ?></td>
                            <td class="text-right">
                                <div>
                                    <button class="btn btn-primary" onclick="modalEditDosen('<?php echo e($value->id); ?>')">Edit</button>
                                    <button class="btn btn-danger" onclick="hapusDosen('<?php echo e($value->id); ?>')">Delete</button>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <!-- MODAL ADD HUBUNGI KAMI -->
    <div class="modal fade" id="addDosensModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Dosen</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form id="addDosenForm">
                            <div class="mb-3">
                                <label class="form-label">NIP</label>
                                <input type="text" class="form-control" autocomplete="off" name="nip">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control" autocomplete="off" name="name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Pendidikan 1</label>
                                <input type="text" class="form-control" autocomplete="off" name="pendidikan1">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Pendidikan 2</label>
                                <input type="text" class="form-control" autocomplete="off" name="pendidikan2">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control" autocomplete="off" name="email">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">password</label>
                                <input type="text" class="form-control" autocomplete="off" name="password">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jabatan</label>
                                <input type="text" class="form-control" autocomplete="off" name="jabatan">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <input type="text" class="form-control" autocomplete="off" name="status">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Foto</label>
                                <input type="file" class="form-control" autocomplete="off" name="foto" size="20">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="addDosen()">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL EDIT HUBUNGI KAMI -->
    <div class="modal fade" id="editDosenModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Dosen</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form id="updateDosenForm">
                        <div class="mb-3">
                                <label class="form-label">NIP</label>
                                <input type="text" class="form-control" autocomplete="off" name="nip">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control" autocomplete="off" name="name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Pendidikan 1</label>
                                <input type="text" class="form-control" autocomplete="off" name="pendidikan1">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Pendidikan 2</label>
                                <input type="text" class="form-control" autocomplete="off" name="pendidikan2">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control" autocomplete="off" name="email">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">password</label>
                                <input type="text" class="form-control" autocomplete="off" name="password">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jabatan</label>
                                <input type="text" class="form-control" autocomplete="off" name="jabatan">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <input type="text" class="form-control" autocomplete="off" name="status">
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
                                <input type="file" class="form-control" autocomplete="off" name="foto" size="20" style="display: none;">
                            </div>
                        </form>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button id="updateDosenBtn" type="button" class="btn btn-primary">Update changes</button>
                </div>
            </div>
        </div>
    </div>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // When the checkbox is clicked, toggle the visibility of the file input
            document.getElementById("changePhotoCheckbox").addEventListener("change", function() {
                var photoInput = document.getElementById("updateDosenForm").querySelector("input[name='foto']");
                if (photoInput) {
                    photoInput.style.display = this.checked ? "block" : "none";
                }
            });
        });
    </script>
    <!-- SCRIPT ADD DOSEN -->
    <script>
        function addDosen() {
            var formData = new FormData(document.getElementById('addDosenForm'));
            $.ajax({
                url: "<?php echo e(base_url('admin/dosens/addDosen')); ?>",
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

    <!-- SCRIPT EDIT DOSEN -->
    <script>
        function modalEditDosen(id) {
            $.ajax({
                url: "<?php echo e(base_url('admin/dosens/editDosen/')); ?>" + id,
                type: "GET",
                success: function(response) {
                    var responseData = JSON.parse(response);
                    var nip = responseData.nip;
                    var name = responseData.name;
                    var pendidikan1 = responseData.pendidikan1;
                    var pendidikan2 = responseData.pendidikan2;
                    var email = responseData.email;
                    var status = responseData.status;
                    var password = responseData.password;
                    var jabatan = responseData.jabatan;
                    var foto = responseData.foto;

                    // Set the values of the input fields in the form
                    $("#updateDosenForm input[name='nip']").val(nip);
                    $("#updateDosenForm input[name='name']").val(name);
                    $("#updateDosenForm input[name='pendidikan1']").val(pendidikan1);
                    $("#updateDosenForm input[name='pendidikan2']").val(pendidikan2);
                    $("#updateDosenForm input[name='email']").val(email);
                    $("#updateDosenForm input[name='status']").val(status);
                    $("#updateDosenForm input[name='password']").val(password);
                    $("#updateDosenForm input[name='jabatan']").val(jabatan);
                    // Display the existing photo and provide an option to change it
                    if (foto) {
                        $("#existingPhoto").attr("src", "<?php echo e(assets_url('images/dosens/')); ?>" + foto);
                        $("#changePhotoCheckbox").show();
                    } else {
                        $("#existingPhoto").attr("src", ""); // Clear the existing photo
                        $("#changePhotoCheckbox").hide();
                    }

                    $("#updateDosenBtn").off('click').on('click', function() {
                        updateDosen(id);
                    });
                    $("#editDosenModal").modal('show');
                },
                error: function() {
                    alert('Error: Unable to communicate with the server');
                }
            });
        }
    </script>

    <script>
        function updateDosen(id) {
            var formData = new FormData(document.getElementById('updateDosenForm'));
            $.ajax({
                url: "<?php echo e(base_url('admin/dosens/updateDosen/')); ?>" + id,
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
        function hapusDosen(id) {
            Swal.fire({
                icon: "warning",
                title: "Delete",
                text: 'Apakah Anda yakin ingin Dosen ini?',
                showCancelButton: true,
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "<?php echo e(base_url('admin/dosens/deleteDosen/')); ?>" + id,
                        type: "POST",
                        dataType: 'json',
                        success: function(response) {
                            if (response.status === 'success') {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Success',
                                    text: 'Dosen deleted successfully!',
                                });
                                // Optionally, you can reload the page or update the UI
                                location.reload();
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Error',
                                    text: 'Failed to delete Dosen!',
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
<?php echo $__env->make('admin/layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7.3\htdocs\chevalier\application\views/admin/dosens/index.blade.php ENDPATH**/ ?>