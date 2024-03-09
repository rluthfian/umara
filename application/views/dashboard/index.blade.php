@extends('layouts.master')
@section('title', 'Home')
@section('content')
<div>
   <div class="carousel-cont">
      <div class="carousel">
         <div class="carousel-slide-cont">
            <div class="carousel-slide-bg desktop" style="background-size: cover;background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('https://www.tigaraksa.co.id/upload/carousel/f285273a83dd905d6437a7ac1f9817ae.jpg');"></div>
            <div class="carousel-slide-bg mobile" style="background-size: cover;background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('https://www.tigaraksa.co.id/upload/carousel/f285273a83dd905d6437a7ac1f9817ae.jpg');"></div>
            <img class="carousel-slide-img" src="https://www.tigaraksa.co.id/upload/carousel/f285273a83dd905d6437a7ac1f9817ae.jpg" />
            <div class="carousel-desc">
               <img src="https://www.tigaraksa.co.id/upload/carousel/icon/9e289a327a3fdd650da5b300c2486df9.png" class="home-icon" />
               <h2><strong>PT. Umara Multi Bisnis</strong></h2>
               <h5><strong>Perusahaan pendistribusian produk yang menjadi penghubung atau jembatan antara produsen kepada agen, merchant maupun konsumen akhir.<br /></strong></h5>
               <a href="about-us" class="btn-home">LEARN MORE</a>
            </div>
         </div>
         <div class="carousel-slide-cont">
            <div class="carousel-slide-bg desktop" style="background-size: cover;background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('https://www.tigaraksa.co.id/upload/carousel/0c6e7b2773a47b41e415ebf086e72fd1.jpg');"></div>
            <div class="carousel-slide-bg mobile" style="background-size: cover;background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('https://www.tigaraksa.co.id/upload/carousel/0c6e7b2773a47b41e415ebf086e72fd1.jpg');"></div>
            <img class="carousel-slide-img" src="https://www.tigaraksa.co.id/upload/carousel/0c6e7b2773a47b41e415ebf086e72fd1.jpg" />
            <div class="carousel-desc">
               <h1><span style="font-size: 36pt;"><strong>Our Principals<br /></strong></span><span style="font-size: 2pt;"><strong><span style="font-size: 18pt;">We present independent partners and operate an integrated nationwide network.</span></strong></span></h1>
               <a href="our-principals" class="btn-home">LEARN MORE</a>
            </div>
         </div>
         <div class="carousel-slide-cont">
            <div class="carousel-slide-bg desktop" style="background-size: cover;background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('https://www.tigaraksa.co.id/upload/carousel/b546e5396e386f00f461370181ad271c.jpg');"></div>
            <div class="carousel-slide-bg mobile" style="background-size: cover;background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('https://www.tigaraksa.co.id/upload/carousel/b546e5396e386f00f461370181ad271c.jpg');"></div>
            <img class="carousel-slide-img" src="https://www.tigaraksa.co.id/upload/carousel/b546e5396e386f00f461370181ad271c.jpg" />
            <div class="carousel-desc">
               <h1><span style="font-size: 36pt;"> <strong>Our Coverage<br /></strong> </span> <span style="font-size: 18pt;"> <strong>We maintain an in-depth national coverage&nbsp;</strong> <strong>through modern and general trade channels, covered directly and also through various business partnerships.</strong> </span></h1>
            </div>
         </div>
         <div class="carousel-slide-cont">
            <div class="carousel-slide-bg desktop" style="background-size: cover;background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('https://www.tigaraksa.co.id/upload/carousel/53224a341f7c1cc8a0635eadddf9df75.jpeg');"></div>
            <div class="carousel-slide-bg mobile" style="background-size: cover;background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('https://www.tigaraksa.co.id/upload/carousel/53224a341f7c1cc8a0635eadddf9df75.jpeg');"></div>
            <img class="carousel-slide-img" src="https://www.tigaraksa.co.id/upload/carousel/53224a341f7c1cc8a0635eadddf9df75.jpeg" />
            <div class="carousel-desc">
               <img src="https://www.tigaraksa.co.id/upload/carousel/icon/7428c7ff6a666190b84daeb397dbb322.png" class="home-icon" />
               <h1 class="mt-1"><strong><span style="font-size: 36pt;">Our Award</span></strong><br /><strong><span style="font-size: 18pt;">We have received nationwide recognition and certifications for our excellent performance in sales and distribution.</span></strong></h1>
               <a href="our-awards" class="btn-home">LEARN MORE</a>
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
   <div class="bottom-content">

   <div class="bottom-content container-fluid" id="about-us">
            <div class="row justify-content-center">
                <div class="col-9 justify-content-center">
                    <div class="row">
                        <h1 class="title-content">
                            Tentang Kami </h1>
                        <p class="">PT. Umara Multi Bisnis merupakan perusahaan pendistribusian produk yang menjadi penghubung atau jembatan antara produsen kepada agen, merchant maupun konsumen akhir.​

                            PT. Umara Multi Bisnis telah berdiri secara resmi pada tanggal 11 Januari 2021, dan sudah menyebarkan berbagai macam produk ke seluruh Indonesia.</p>
                    </div>
                    <div class="text-center">
                        <a href="{{base_url('about')}}" class="custom-btn btn-7"><span style="letter-spacing:0.15em">Company Profile</span></a>
                    </div>

                    <div class="row">
                        <div id="slide-timeline-cont">

                            <div class="slide-timeline-item-cont">

                                <div class="slide-item" data-num="0" style="flex: 0 1 calc(100%/6);">
                                    <a href="#" class="timeline-item focus">
                                        <div class="timeline-title">Visi</div>
                                        <div class="timeline-ico"></div>
                                        <div class="timeline-desc"></div>
                                    </a>
                                </div>
                                <div class="slide-item" data-num="1" style="flex: 0 1 calc(100%/6);">
                                    <a href="#" class="timeline-item ">
                                        <div class="timeline-title">Misi</div>
                                        <div class="timeline-ico"></div>
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
                                <div class="slide-desc-text text-left" style="font-size:1rem" data-num="1">
                                    <ul>
                                        <li>
                                            Memberikan produk berkualitas dengan harga kompetitif dan bermanfaat demi memastikan kepuasan pelanggan dan membina hubungan baik dengan mitra berkelanjutan.
                                        </li>
                                        <li>
                                            Merancang ekosistem terintegrasi yang dapat menyangga bisnis utama dalam perdagangan.
                                        </li>
                                        <li>
                                            Melakukan perdagangan umum dan khusus untuk produk pangan maupun non pangan dengan sasaran pasar domestik hingga internasional.
                                        </li>
                                        <li>
                                            Meningkatkan produktivitas, ketangkasan, dan kualitas kerja SDM lewat pelatihan dan pengembangan kompetensi.
                                        </li>
                                    </ul>
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
            <div class="row darker justify-content-center" id="core-values">
                <div class="col-xl-10 col-md-12">

                    <div class="row">
                        <div class="col">
                            <h1 class="title-content">
                                Produsen Kami </h1>
                        </div>
                    </div>
                    <div class="row" id="cv-item-cont">

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
                                    To ensure <br />we deliver our promise
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
                                <img src="https://umaramultibisnis.com/wp-content/uploads/2023/03/your-logo-here-copy2.jpg" />
                            </div>
                            <div class="cv-item-title">
                                <h2 style="font-size: 1.5em;">
                                    Join With Us
                                </h2>
                            </div>
                            <div class="cv-item-desc">
                                <p style="font-size: 1em;">
                                    To ensure <br />we always stay current and relevant
                                </p>
                            </div>
                        </div>


                    </div>

                </div>
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