@extends('admin/layouts.master')

@section('title', 'CMS ADMIN | PT. Umara Multi Bisnis')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 font-weight-bolder">CMS HOME</h1>
    </div>

    <!-- HUBUNGI KAMI -->
    <div class="card shadow mb-1">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary"> <i class="fas fa-newspaper"></i> Slider Preview</h6>
            <a class="btn btn-success" data-toggle="modal" data-target="#addSliderModal">
                <h6 class="m-0"><i class="fas fa-plus fa-sm text-white-100"></i> Add Slider</h6>
            </a>
        </div>
    </div>

    <div class="container-fluid px-0">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Urutan</th>
                            <th>Title</th>
                            <th class="text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($home as $key => $value)
                        <tr>
                            <td>{{$value->order_number}}</td>
                            <td>{{$value->title}}</td>
                            <td class="text-right">
                                <div>
                                    <button class="btn btn-primary" onclick="modalEditSlider('{{$value->id_slider}}')">Edit</button>
                                    <button class="btn btn-danger" onclick="hapusSlider('{{$value->id_slider}}')">Delete</button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <!-- MODAL ADD HUBUNGI KAMI -->
    <div class="modal fade" id="addSliderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Slider</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form id="addSliderForm">
                            <div class="mb-3">
                                <label class="form-label">Urutan</label>
                                <input type="text" class="form-control" autocomplete="off" name="order_number">
                            </div>
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
                                <br>
                                <label class="custom-file-upload">
                                    <input type="file" class="form-control" autocomplete="off" name="photo" size="20" onchange="updateFileName(this)">
                                    <span class="file-name">Choose Photo</span>
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="addSlider()">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL EDIT HUBUNGI KAMI -->
    <div class="modal fade" id="editSliderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Slider</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form id="updateSliderForm">
                        <div class="mb-3">
                                <label class="form-label">Urutan</label>
                                <input type="text" class="form-control" autocomplete="off" name="order_number">
                            </div>
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
                    <button id="updateSliderBtn" type="button" class="btn btn-primary">Update changes</button>
                </div>
            </div>
        </div>
    </div>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("changePhotoCheckbox").addEventListener("change", function() {
                var photoInput = document.getElementById("updateSliderForm").querySelector("input[name='photo']");
                if (photoInput) {
                    photoInput.style.display = this.checked ? "block" : "none";
                }
            });
        });
    </script>
    <!-- SCRIPT ADD Slider -->
    <script>
        function addSlider() {
            var formData = new FormData(document.getElementById('addSliderForm'));
            $.ajax({
                url: "{{ base_url('admin/cms/home/add-slider') }}",
                type: "POST",
                data: formData, 
                dataType: 'json',
                contentType: false, 
                processData: false, 
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
        function modalEditSlider(id_slider) {
            $.ajax({
                url: "{{ base_url('admin/cms/home/edit-slider/') }}" + id_slider,
                type: "GET",
                success: function(response) {
                    var responseData = JSON.parse(response);
                    var order_number = responseData.order_number;
                    var title = responseData.title;
                    var content = responseData.content;
                    var photo = responseData.photo;

                    // Set the values of the input fields in the form
                    $("#updateSliderForm input[name='order_number']").val(order_number);
                    $("#updateSliderForm input[name='title']").val(title);
                    $("#updateSliderForm input[name='content']").val(content);
                    if (photo) {
                        $("#existingPhoto").attr("src", "{{ assets_url('images/cms/home/') }}" + photo);
                        $("#changePhotoCheckbox").show();
                    } else {
                        $("#existingPhoto").attr("src", ""); // Clear the existing photo
                        $("#changePhotoCheckbox").hide();
                    }

                    $("#updateSliderBtn").off('click').on('click', function() {
                        updateSlider(id_slider);
                    });
                    $("#editSliderModal").modal('show');
                },
                error: function() {
                    alert('Error: Unable to communicate with the server');
                }
            });
        }
    </script>

    <script>
        function updateSlider(id_slider) {
            var formData = new FormData(document.getElementById('updateSliderForm'));
            $.ajax({
                url: "{{ base_url('admin/cms/home/update-slider/') }}" + id_slider,
                type: "POST",
                data: formData,
                dataType: 'json',
                contentType: false,
                processData: false, 
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
        function hapusSlider(id_slider) {
            Swal.fire({
                icon: "warning",
                title: "Delete",
                text: 'Apakah Anda yakin ingin Slider ini?',
                showCancelButton: true,
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ base_url('admin/cms/home/delete-slider/') }}" + id_slider,
                        type: "POST",
                        dataType: 'json',
                        success: function(response) {
                            if (response.status === 'success') {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Success',
                                    text: 'Slider deleted successfully!',
                                });
                                // Optionally, you can reload the page or update the UI
                                window.location.reload();
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Error',
                                    text: 'Failed to delete Slider!',
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

    <script>
        function updateFileName(input) {
            var fileName = input.files[0].name;
            var fileLabel = input.parentNode.querySelector('.file-name');
            fileLabel.textContent = fileName;
        }
    </script>

    @endsection