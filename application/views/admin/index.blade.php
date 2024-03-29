@extends('admin/layouts.master')

@section('title', 'Dashboard Admin | PT. Umara Multi Bisnis')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
  </div>
  <!-- Content Row -->
  <div class="row">
    <!-- Jumlah Slider -->
    <!-- <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                Jumlah Slider</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{$total_dosens}}</div>
            </div>
            <div class="col-auto">
            <i class="fas fa-user fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Jumlah Arsip -->
    <!-- <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                Jumlah Arsip</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{$total_arsip}}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-address-card fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div> -->
  </div>
  <!-- END CONTENT ROW -->
</div>
<!-- End of Main Content -->
@endsection