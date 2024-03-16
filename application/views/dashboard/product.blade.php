@extends('layouts.master')
@section('title', 'Home')
@section('content')
<div>
    <div class="carousel-cont">
        <div class="carousel">
            <div class="carousel-slide-cont">
                <div class="carousel-slide-bg desktop" style="background-size: cover;background-image: linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0)),url('https://www.tigaraksa.co.id/upload/carousel/f285273a83dd905d6437a7ac1f9817ae.jpg');"></div>
                <div class="carousel-slide-bg mobile" style="background-size: cover;background-image: linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0)),url('https://www.tigaraksa.co.id/upload/carousel/f285273a83dd905d6437a7ac1f9817ae.jpg');"></div>
                <img class="carousel-slide-img" src="https://www.tigaraksa.co.id/upload/carousel/f285273a83dd905d6437a7ac1f9817ae.jpg" />
                <div class="carousel-desc">
                    <img src="https://www.tigaraksa.co.id/upload/carousel/icon/9e289a327a3fdd650da5b300c2486df9.png" class="home-icon" />
                    <h2><strong>An Independent Sales and Distribution </strong></h2>
                    <h2><strong>Company with a Nationwide Network<br /></strong></h2>
                    <a href="about-us" class="btn-home">LEARN MORE</a>
                </div>
            </div>
        </div>
        <div>
            <a class="down-button" href="#">
                <div class="down-button-ico">
                    <div class="down-button-chevron"></div>
                </div>
            </a>
        </div>
    </div>
</div>

<div class="bottom-content">

    <div class="bottom-content container-fluid" id="about-us">
        <div class="row justify-content-center">
            <div class="col-9 justify-content-center" style="padding-top:20px; padding-bottom:20px;">
                <div class="row">
                    <h1 class="title-content">
                        PT. Holycat Labs Indonesia</h1>
                    <p class="title-content">
                        INI LOGO NANTI SI HOLY
                    </p>

                </div>
                <!-- <div class="text-center">
                <a href="{{base_url('about')}}" class="custom-btn btn-7"><span style="letter-spacing:0.15em">Company Profile</span></a>
            </div> -->


            </div>
        </div>

    </div>
</div>

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