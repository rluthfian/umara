@extends('layouts.master')

@section('title', 'Chevalier')

@section('content')

<section id="hero">
   <div class="container-fluid position-relative" style="z-index: 2;">
      <div class="row d-flex align-items-center p-lg-5" >
         <div class="pt-5 col-lg-4 col-12 text-white text-center p-lg-5">
            <div class="swiper mySwiper">
               <div class="swiper-wrapper">
                  <div class="swiper-slide">
                     <a href="#">
                        <img src="{{assets_url('images/ChevalierLab.png')}}" class="img-fluid" alt="">
                     </a>
                  </div>
                  <div class="swiper-slide">
                     <a href="#">
                        <img src="{{assets_url('images/about-img.png')}}" class="img-fluid" alt="">
                     </a>
                  </div>
               </div>
               <div class="swiper-pagination"></div>
            </div>
            <h1 style="z-index: 2;" class="fs-1 fw-bold montserrat-bold-text">WELCOME TO <br><span style="color: #e93f1a;">CHEVALIER LAB</span></h1>
         </div>
      </div>
   </div>
</section>

@endsection