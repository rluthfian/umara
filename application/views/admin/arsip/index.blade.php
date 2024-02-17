@extends('admin/layouts.master')

@section('title', 'Data Arsip | Admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 font-weight-bolder">Data Arsip</h1>
    </div>

    <!-- HUBUNGI KAMI -->
    <div class="card shadow mb-1">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary"> <i class="fas fa-newspaper"></i> Data Arsip Preview</h6>
            <a class="btn btn-success" data-toggle="modal" data-target="#addArsipModal">
                <h6 class="m-0"><i class="fas fa-plus fa-sm text-white-100"></i> Add Arsip</h6>
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
                            <th>Judul Arsip</th>
                            <th class="text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($arsip as $key => $value)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$value->title}}</td>
                            <td class="text-right">
                                <div>
                                    <button class="btn btn-primary" onclick="modalEditArsip('{{$value->id_arsip}}')">Edit</button>
                                    <button class="btn btn-danger" onclick="hapusArsip('{{$value->id_arsip}}')">Delete</button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <!-- MODAL ADD ARSIP -->
    <div class="modal fade" id="addArsipModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Arsip</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form id="addArsipForm">
                            <div class="mb-3">
                                <label class="form-label">Judul Arsip</label>
                                <input type="text" class="form-control" autocomplete="off" name="title">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Isi Arsip</label>
                                <input type="text" class="form-control" autocomplete="off" name="isi_arsip">
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
                    <button type="button" class="btn btn-primary" onclick="addArsip()">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL EDIT ARSIP -->
    <div class="modal fade" id="editArsipModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Arsip</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form id="updateArsipForm">
                        <div class="mb-3">
                                <label class="form-label">Judul Arsip</label>
                                <input type="text" class="form-control" autocomplete="off" name="title">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Isi Arsip</label>
                                <input type="text" class="form-control" autocomplete="off" name="isi_arsip">
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
                    <button id="updateArsipBtn" type="button" class="btn btn-primary">Update changes</button>
                </div>
            </div>
        </div>
    </div>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // When the checkbox is clicked, toggle the visibility of the file input
            document.getElementById("changePhotoCheckbox").addEventListener("change", function() {
                var photoInput = document.getElementById("updateArsipForm").querySelector("input[name='foto']");
                if (photoInput) {
                    photoInput.style.display = this.checked ? "block" : "none";
                }
            });
        });
    </script>
    <!-- SCRIPT ADD ARSIP -->
    <script>
        function addArsip() {
            var formData = new FormData(document.getElementById('addArsipForm'));
            $.ajax({
                url: "{{ base_url('admin/arsip/addArsip') }}",
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

    <!-- SCRIPT EDIT ARSIP -->
    <script>
        function modalEditArsip(id) {
            $.ajax({
                url: "{{ base_url('admin/arsip/editArsip/') }}" + id,
                type: "GET",
                success: function(response) {
                    var responseData = JSON.parse(response);
                    var title = responseData.title;
                    var isi_arsip = responseData.isi_arsip;
                    var foto = responseData.foto;

                    // Set the values of the input fields in the form
                    $("#updateArsipForm input[name='title']").val(title);
                    $("#updateArsipForm input[name='isi_arsip']").val(isi_arsip);
                    // Display the existing photo and provide an option to change it
                    if (foto) {
                        $("#existingPhoto").attr("src", "{{ assets_url('images/arsip/') }}" + foto);
                        $("#changePhotoCheckbox").show();
                    } else {
                        $("#existingPhoto").attr("src", ""); // Clear the existing photo
                        $("#changePhotoCheckbox").hide();
                    }

                    $("#updateArsipBtn").off('click').on('click', function() {
                        updateArsip(id);
                    });
                    $("#editArsipModal").modal('show');
                },
                error: function() {
                    alert('Error: Unable to communicate with the server');
                }
            });
        }
    </script>

    <script>
        function updateArsip(id) {
            var formData = new FormData(document.getElementById('updateArsipForm'));
            $.ajax({
                url: "{{ base_url('admin/arsip/updateArsip/') }}" + id,
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
        function hapusArsip(id) {
            Swal.fire({
                icon: "warning",
                title: "Delete",
                text: 'Apakah Anda yakin ingin Arsip ini?',
                showCancelButton: true,
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ base_url('admin/arsip/deleteArsip/') }}" + id,
                        type: "POST",
                        dataType: 'json',
                        success: function(response) {
                            if (response.status === 'success') {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Success',
                                    text: 'Arsip deleted successfully!',
                                });
                                // Optionally, you can reload the page or update the UI
                                location.reload();
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Error',
                                    text: 'Failed to delete Arsip!',
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

    @endsection