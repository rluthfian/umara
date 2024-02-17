@extends('layouts.master')

@section('title', 'Product Penelitian')

@section('content')
<section id="dosen-hero">
   <div class="container-fluid">
      <div class="row">
         <div class="col-12 py-5 col-lg-12 p-lg-5 text-center">
            <h1 class="fw-bold d-inline-block" style="border-bottom: 1px solid #000000;">Product Penelitian</h1>
         </div>
         <div class="col-6 text-center pb-3">
            <img src="{{assets_url('images/ChevalierLab.png')}}" class="img-fluid" alt="">
            <h3 class=" pt-3 fw-bold">Penelitian 1</h3>
            <p class="">................</p>
            <a class="px-3 btn btn-custom-primary" href="">READ MORE</a>
         </div>
         <div class="col-6 text-center pb-3">
            <img src="{{assets_url('images/ChevalierLab.png')}}" class="img-fluid" alt="">
            <h3 class=" pt-3 fw-bold">Penelitian 2</h3>
            <p class="">................</p>
            <a class="px-3 btn btn-custom-primary" href="">READ MORE</a>
         </div>
         <div class="col-6 text-center pb-3">
            <img src="{{assets_url('images/ChevalierLab.png')}}" class="img-fluid" alt="">
            <h3 class=" pt-3 fw-bold">Penelitian 3</h3>
            <p class="">................</p>
            <a class="px-3 btn btn-custom-primary" href="">READ MORE</a>
         </div>
         <div class="col-6 text-center pb-3">
            <img src="{{assets_url('images/ChevalierLab.png')}}" class="img-fluid" alt="">
            <h3 class=" pt-3 fw-bold">Penelitian 4</h3>
            <p class="">................</p>
            <a class="px-3 btn btn-custom-primary" href="">READ MORE</a>
         </div>
         <div class="col-6 text-center pb-3">
            <img src="{{assets_url('images/ChevalierLab.png')}}" class="img-fluid" alt="">
            <h3 class=" pt-3 fw-bold">Penelitian 5</h3>
            <p class="">................</p>
            <a class="px-3 btn btn-custom-primary" href="">READ MORE</a>
         </div>
      </div>
   </div>
</section>
@endsection