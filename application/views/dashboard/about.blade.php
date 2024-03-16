@extends('layouts.master')
@section('title', 'Home')
@section('content')

<section id="about-us">
    <div class="carousel-cont">
        <div class="carousel">
            <div class="carousel-slide-cont d-flex justify-content-center">
                <div class="carousel-slide-bg desktop" style="background-size: cover;background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('{{assets_url('images/about-us-header.jpg')}}');"></div>
                <div class="carousel-slide-bg mobile" style="background-size: cover;background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('{{assets_url('images/about-us-header.jpg')}}');"></div>
                <img class="carousel-slide-img" src="{{assets_url('images/about-us-header.jpg')}}" />
                <div class="carousel-desc text-center">
                    <h1 class="mb-3"><strong>ABOUT US<br /></strong></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-content">

        <div class="bottom-content container-fluid" id="about-us">
            <div class="row justify-content-center">
                <div class="col-9 justify-content-center">
                    <div class="row">
                        <h1 class="title-content">
                            Identitas Perusahaan </h1>
                        <p class="text-justify" style="line-height:2rem;">PT. Umara Multi Bisnis merupakan perusahaan pendistribusian

                            produk yang menjadi penghubung atau jembatan antara produsen kepada agen, merchant maupun konsumen akhir.​


                            PT. Umara Multi Bisnis telah berdiri secara resmi pada tanggal 11 Januari 2021, dan sudah menyebarkan berbagai macam produk ke seluruh Indonesia.


                            Dengan mengantongi izin dari ASOHI (Asosiasi Obat-obatan Indonesia) menjadikan seluruh produk yang didistrbusikan oleh perusahaan kami
                            dipercayai oleh banyak dokter hewan yang ada di Indonesia</p>
                    </div>
                    <!-- <div class="text-center">
                        <a href="{{base_url('about')}}" class="custom-btn btn-7"><span style="letter-spacing:0.15em">Company Profile</span></a>
                    </div> -->


                </div>
            </div>
            <div class="row darker justify-content-center" id="core-values" style="background-color: slateblue;">
                <div class="col-xl-10 col-md-12">

                    <div class="row" style="background-color: slateblue;">
                        <div class="col-8" style="margin-top:5px; margin-bottom:20px;">
                            <h1 class="title-content text-left" style="color: #ffff
                            ;">
                                Konsultan & Diskusi </h1>
                            <p class="text-white">
                                Sampaikan kebutuhan Anda kepada tim kami untuk

                                mendapatkan pelayanan terbaik
                            </p>

                        </div>

                        <div class="col-4 align-items-center d-flex justify-content-center" style="margin-bottom:0.5rem; border-radius:10px; margin-top:0.5rem">
                            <div class="container-button" style="background-color:white; ">
                                <a class="call-us" style="letter-spacing: 4px;">HUBUNGI KAMI</a>
                            </div>
                        </div>


                    </div>

                </div>
            </div>

        </div>
    </div>
</section>



@endsection