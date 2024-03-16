@extends('layouts.master')
@section('title', 'Home')
@section('content')

<section id="about-us">
    <div id="hero" class="d-flex justify-content-center align-items-center" style="height: 70vh; background-size: cover; background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('{{assets_url('images/about-us-header.jpg')}}');">
        <h1 class="text-white">PRODUSEN</h1>
    </div>

    <div class="bottom-content">
        <div class="bottom-content container-fluid" id="about-us">

            <!-- PRODUSEN KAMI -->
            <div class="container-fluid">
                <div class="row darker justify-content-center" id="core-values">
                    <div class="col-xl-10 col-md-12">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <h1 class="title-content pt-5">Our Partnership </h1>
                                </div>
                            </div>

                            <div class="row justify-content-center" id="cv-item-cont">
                                <div class="col-sm-12 col-md-6 col-lg-4">
                                    <div class="cv-item-ico">
                                        <img class="" src="https://umaramultibisnis.com/wp-content/uploads/2023/03/Logo-PT.-Holycat-Laboratory-Indonesia-2.jpg" />
                                    </div>
                                    <div class="cv-item-title">
                                        <h2 style="font-size: 1.5em;">
                                            PT Holly Labs Indonesia
                                        </h2>
                                    </div>
                                    <div class="cv-item-desc">
                                        <p style="font-size: 1em;">
                                            To ensure <br />
                                            we deliver our promise
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-4">
                                    <div class="cv-item-ico">
                                        <img src="https://umaramultibisnis.com/wp-content/uploads/2023/03/Logo-Fijarindo.jpg" />
                                    </div>
                                    <div class="cv-item-title">
                                        <h2 style="font-size: 1.5em;">
                                            Fijarindo Fermented
                                        </h2>
                                    </div>
                                    <div class="cv-item-desc">
                                        <p style="font-size: 1em;">
                                            To ensure <br />unbiased treatment
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-4">
                                    <div class="cv-item-ico">
                                        <img src="https://umaramultibisnis.com/wp-content/uploads/2023/03/Logo-PT.-Garuda-Parahita-Pharama-300x300.jpg" />
                                    </div>
                                    <div class="cv-item-title">
                                        <h2 style="font-size: 1.5em;">
                                            PT. Garuda Parahita Pharama
                                        </h2>
                                    </div>
                                    <div class="cv-item-desc">
                                        <p style="font-size: 1em;">
                                            To ensure <br />unbiased treatment
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <!-- END PRODUSEN KAMI -->

           
        </div>
    </div>
</section>



@endsection