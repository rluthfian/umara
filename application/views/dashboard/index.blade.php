@extends('layouts.master')
@section('title', 'Home')
@section('content')
<section id="home">

    <!-- HERO SLIDER -->
    <div class="carousel-cont">
        <div class="carousel">
            @foreach($slider as $value)
            <div class="carousel-slide-cont">
                <div class="carousel-slide-bg desktop" style="background-size: cover;background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),url('{{assets_url('images/cms/home/')}}{{$value->photo}}');"></div>
                <div class="carousel-slide-bg mobile" style="background-size: cover;background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),url('{{assets_url('images/cms/home/')}}{{$value->photo}}');"></div>
                <img class="carousel-slide-img" src="{{assets_url('images/cms/home/')}}{{$value->photo}}" />
                <div class="carousel-desc text-center">
                    <h1><strong>{{$value->title}}</strong></h1>
                    <h5 class="mb-3"><strong>{{$value->content}}<br /></strong></h5>
                    <a href="about-us" class="btn-home">LEARN MORE</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- END HERO SLIDER -->

    <div class="bottom-content">
        <div class="bottom-content container-fluid" id="about-us">

            <!-- PRODUSEN KAMI -->
            <div class="container-fluid">
                <div class="row darker justify-content-center" id="core-values">
                    <div class="col-xl-10 col-md-12">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <h1 class="title-content pt-5">Produsen Kami </h1>
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
                                <div class="col-sm-12 col-md-6 col-lg-4 py-3">
                                    <div class="cv-item-ico">
                                        <img src="https://umaramultibisnis.com/wp-content/uploads/2023/03/your-logo-here-copy2.jpg" />
                                    </div>
                                    <div class="cv-item-title d-flex justify-content-center">
                                        <a href="about-us" class="btn-home bounce">JOIN WITH US</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <!-- END PRODUSEN KAMI -->

            <div class="row justify-content-center">
                <div class="col-9 justify-content-center">
                    <h1 class="title-content pt-5">Our Vision & Mission </h1>
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
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="modalCareer" tabindex="-1" role="dialog" aria-labelledby="modalCareerLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style="font-family: 'Gotham-Book';">

            <div class="modal-body">
                <div class="col">
                    <div style="text-align: justify; line-height: 20pt;">To avoid frauds regarding prospective workers recruitment and selection conducted by irresponsible parties on behalf of PT Tigaraska Satria, Tbk., we hereby declare,<br /><br /></div>
                    <div style="text-align: justify;">
                        <ol style="margin-left: 20px; line-height: 20pt;">
                            <li>PT Tigaraksa Satria, Tbk. only advertise a job vacancy that correlates with company business.</li>
                            <li>Official information regarding job vacancy in PT Tigaraksa Satria, Tbk. can be discovered in the official website&rsquo;s Job Vacancy Page (tigaraksa.co.id/career),&nbsp; as well as other job vacancy online sites including <a href="http://www.jobstreet.com">www.jobstreet.com</a>&nbsp; which have cooperated with PT Tigaraksa Satria, Tbk. as of now</li>
                            <li>In the implementation of recruitment and selection, PT Tigaraksa Satria, Tbk. applied no charge to the applicants.</li>
                            <li>PT Tigaraksa Satria, Tbk. is not responsible for the disadvantaged parties in reference to the frauds conducted with the identity of the company.</li>
                            <li>For further explanations regarding recruitment and selection process of PT Tigaraksa Satria, call our Recruitment Team at 021-2527300.</li>
                        </ol>
                    </div>
                    <div style="text-align: justify; line-height: 20pt;">We encourage our future applicants and the public to be more cautious suppose the frauds regarding prospective workers recruitment and selection on behalf of PT Tigaraska Satria, Tbk. <br /><br />Thank you.<br /><br />HRM PT Tigaraksa Satria, Tbk.<br />E-mail: <a href="mailto:hr-recruitment@tigaraksa.co.id">hr-recruitment@tigaraksa.co.id</a>
                        <!-- <br /><img style="width: 30px;height: 30px;" src="image/assets/WhatsApp_icon.png"> : 0821 1177 9767 (WhatsApp Only) -->
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <a href="https://www.tigaraksa.co.id/career" class="btn btn-primary">Continue</a>
            </div>

        </div>
    </div>
</div>



@endsection