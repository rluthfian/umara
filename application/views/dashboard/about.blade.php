@extends('layouts.master')
@section('title', 'Home')
@section('content')

<section id="about-us">
<div id="hero" class="d-flex justify-content-center align-items-center" style="height: 70vh; background-size: cover; background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('{{assets_url('images/about-us-header.jpg')}}');">
    <h1 class="text-white">ABOUT US</h1>
</div>
    <div class="bottom-content bg-white container-fluid py-5" id="about-us">
        <div class="row justify-content-center">
            <div class="col-9 justify-content-center">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="{{assets_url('images/icons/logo-1.png')}}" class="p-3" />
                    </div>
                    <div class="col-12">
                        <h3 class="main-title">Tentang Kami</h3>
                        <p> PT. Umara Multi Bisnis is a company focused on product
                            distribution, serving as an intermediary connecting
                            manufacturers with various entities such as agents,
                            traders, and end consumers.<br>Since its official establishment on January 11, 2021,
                            PT. Umara Multi Bisnis has been actively distributing
                            various types of products throughout Indonesia. With a
                            strong commitment to service quality and efficiency in the
                            distribution process, the company continues to solidify its
                            position as a reliable partner for manufacturers and
                            customers nationwide.
                           </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-9 justify-content-center">
            <h3 class="title-content main-title ">Visi & Misi </h3>
            <div class="row">
                <div id="slide-timeline-cont">
                    <div class="slide-timeline-item-cont">
                        <div class="slide-item" data-num="0" style="flex: 0 1 calc(100%/6);">
                            <a href="#" class="timeline-item focus">
                                <div class="timeline-title">Visi</div>
                                <div class="timeline-ico">
                                    <img class="p-3" src="{{assets_url('images/vision.png')}}" />
                                </div>
                                <div class="timeline-desc"></div>
                            </a>
                        </div>
                        <div class="slide-item" data-num="1" style="flex: 0 1 calc(100%/6);">
                            <a href="#" class="timeline-item ">
                                <div class="timeline-title">Misi</div>
                                <div class="timeline-ico">
                                    <img class="p-3" src="{{assets_url('images/mission.png')}}" />
                                </div>
                                <div class="timeline-desc"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div id="slide-desc-cont" class="row">
                    <div id="prev-ico">
                        <a href="#">
                            <img src="https://www.tigaraksa.co.id/image/assets/Icons2-31.png" />
                        </a>
                    </div>
                    <div id="slide-desc" class="col">
                        <div class="slide-desc-text active" data-num="0">
                            <p class="p1">Menjadi Perusahaan yang unggul dan terdepan dalam pendistribusian kebutuhan hewan peliharaan di seluruh indonesia yang berkualitas tinggi.</p>
                        </div>
                        <div class="slide-desc-text text-left" data-num="1">
                            <p class="p1">Memberikan produk berkualitas dengan harga kompetitif dan bermanfaat demi memastikan kepuasan pelanggan dan membina hubungan baik dengan mitra berkelanjutan.</p>
                        </div>


                    </div>
                    <div id="next-ico">
                        <a href="#">
                            <img src="https://www.tigaraksa.co.id/image/assets/Icons2-31.png" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-gray-f9 container-fluid py-5">
        <div class="row justify-content-center">
            <div class="col-9">
                <div class="container-fluid">
                    <div class="row">
                    <div class="col-12 d-flex align-items-center">
                            <div>
                                <h1 class="title-content text-center" style="color:#4a4b4d !important">OUR TEAM </h1>
                                <p>Semua produk kami sudah terdaftar dan tersertifikasi dan izin dari ASOHI (Asosiasi Obat-obatan Indonesia) menjadikan seluruh produk yang didistrbusikan oleh perusahaan kami dipercayai oleh banyak dokter hewan yang ada di Indonesia.</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <img src="https://umaramultibisnis.com/wp-content/uploads/2023/03/Logo-ASOHI.png" class="img-fluid px-5" alt="">
                        </div>

                        <div class="col-6 d-flex align-items-center">
                            <div>
                                <h1 class="title-content" style="color:#4a4b4d !important">SERTIFIKASI </h1>
                                <p>Semua produk kami sudah terdaftar dan tersertifikasi dan izin dari ASOHI (Asosiasi Obat-obatan Indonesia) menjadikan seluruh produk yang didistrbusikan oleh perusahaan kami dipercayai oleh banyak dokter hewan yang ada di Indonesia.</p>
                                <div class="mt-5">
                                    <a href="about-us" class="btn-home">Lihat Selengkapnya</a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background-color:#073068 !important">
        <div class="row justify-content-center">
            <div class="col-9 justify-content-center">
                <div class="row">
                    <div class="col-6 py-3 text-white">
                        <p class="mb-0">Ada pertanyaan yang ingin disampaikan ? Sampaikan kebutuhan Anda kepada tim kami untuk mendapatkan pelayanan terbaik
                        </p class="mb-0">
                    </div>

                    <div class="col-6 align-items-center d-flex justify-content-center">
                        <div>
                            <a target="_blank" href="http://wa.me/6285171102858" class="btn-home" style="background-color:#28a745!important">HUBUNGI KAMI</a>
                        </div>
                    </div>


                </div>
            </div>

        </div>

    </div>
</section>



@endsection