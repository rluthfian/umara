@extends('layouts.master')

@section('title', 'Pengabdian Masyarakat')

@section('content')
<section id="about_hero" class="p-lg-5">
    <div class="container-fluid px-lg-5">
        <div class="row d-flex align-items-center">
           <div class="col-7">
            <h3 class="fw-bold">Pengabdian Masyarakat</h3>
            <p class="mb-4">Beberapa kegiatan Pengabdian Masyarakat yang dilakukan Chevalier Lab, klik dibawah ini</p>
            <a class="px-5 btn btn-custom-primary" href="">Lihat</a>
           </div>
           <div class="col-5">
           <img src="{{assets_url('images/about-img.png')}}" class="img-fluid" alt="">
           </div>
        </div>
    </div>
</section>
@endsection