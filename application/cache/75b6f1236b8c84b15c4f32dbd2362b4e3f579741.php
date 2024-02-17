

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>

<section id="hero">
   <div class="container-fluid">
      <div class="row d-flex justify-content-center align-items-center p-lg-5">
         <div class="pt-5 col-lg-6 col-12 text-white text-left p-lg-5">
            <h1 class="fs-1 fw-bold montserrat-bold-text">Investasi Emas Cerdas, Aman dan Menguntungkan</h1>
            <p>Dapatkan harga emas terbaik dan promo hanya di MASANTAM.<br>Hubungi dan mulai pesan emas sekarang!</p>
            <div class="button d-lg-flex">
               <a target="_blank" href="https://api.whatsapp.com/send/?phone=6282215711339&text&type=phone_number&app_absent=0" class="btn text-white mb-3 mb-lg-0 p-3 btn-custom">Konsultasi Sekarang</a>
               <a href="<?php echo e(base_url('product')); ?>" class="btn text-white p-3 mx-lg-2 btn-custom-primary">Lihat Emas</a>
            </div>
         </div>
         <div class="col-12 py-5 col-lg-6 p-lg-5">
            <div class="swiper mySwiper">
               <div class="swiper-wrapper">
                  <?php $__currentLoopData = $carousel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="swiper-slide">
                     <a href="<?php echo e($value->link); ?>">
                        <img src="<?php echo e(assets_url('images/cms/beranda/')); ?><?php echo e($value->photo); ?>" style="width:100%;object-fit:cover;" alt="">
                     </a>
                  </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </div>
               <div class="swiper-pagination"></div>
            </div>
         </div>
      </div>
   </div>

</section>
<section id="about_us" class="p-lg-5">
   <div class="container-fluid px-lg-5">
      <div class="row px-lg-5">
         <div class="py-3 col-12 col-lg-4 d-flex justify-content-center align-items-center">
            <img data-aos="fade-up" src="<?php echo e(assets_url('images/dark-logo.png')); ?>" alt="">
         </div>
         <div class="col-12 col-lg-8 d-flex justify-content-center align-items-center">
            <div class="wrapper-about-us">
               <h2 class="fs-5 montserrat-bold-text" data-aos="fade-up" style="color:#9C7E1F">Tentang Kami</h2>
               <h3 class="fs-3 montserrat-bold-text" data-aos="fade-up">GLOBAL MASANTAM INDONESIA</h3>
               <?php
               $contentWords = explode(' ', $about_us[0]->content);
               $limitedContent = implode(' ', array_slice($contentWords, 0, 51));
               $limitedContent = count($contentWords) > 3 ? $limitedContent . '...' : $limitedContent;
               ?>
               <p data-aos="fade-up"><?php echo e($limitedContent); ?></p>
               <p data-aos="fade-up"><a class="text-dark fw-bold" href="<?php echo e(base_url('about_us')); ?>">Lihat Selengkapnya..</a></p>
            </div>
         </div>
      </div>
   </div>
</section>

<section id="testimonial" class="p-lg-5 text-center">
   <div class="container-fluid px-lg-5">
      <div class="row">
         <div class="col-12 py-5 py-lg-0 px-lg-5">
            <h2>Our Partnership</h2>
            <div class="swiper swiperTestimonial">
               <div class="swiper-wrapper">
                  <?php $__currentLoopData = $our_partnership; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="swiper-slide text-center d-flex justify-content-center" style="border-radius:20px">
                     <div class="p-lg-3 text-center swiper-img">
                        <img src="<?php echo e(assets_url('images/cms/beranda/')); ?><?php echo e($value->photo); ?>" class="img-fluid" style="height: 100%;" alt="">
                     </div>
                  </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<section id="harga_emas" class="p-lg-5">
   <div class="container-fluid px-lg-5">
      <div class="row">
         <div class="col-lg-12 px-lg-5">
            <p class="montserrat-bold-text d-inline-block p-2 px-2 text-diperbaharui"><span class="p-1" style="border: 1px solid #C6C9CC; border-radius:8px;">Terakhir Diperbaharui</span> Minggu 5 November 2023</p>
            <h2 class="montserrat-bold-text">Emas Hari Ini: Harga Jual & Beli</h2>
            <p style="color: #71797F;">Lihat pembaruan harga emas harian di sini!</p>
            <div class="container-fluid px-1">
               <div class="row justify-content-between d-flex">
                  <div class="col-lg-6 col-12 text-center">
                     <div class="wrapper-harga p-lg-5 p-3 pb-5 mb-3 mb-lg-0 bg-white" style="border-radius:20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                        <img src="<?php echo e(assets_url('images/icon_shopping.png')); ?>" width="50" height="50" alt="">
                        <h5 class="montserrat-bold-text pt-lg-2">Harga beli emas hari ini</h5>
                        <h2 class="montserrat-bold-text pt-lg-2">IDR 1,032,000,-/Gram</h2>
                     </div>

                  </div>
                  <div class="col-lg-6 col-12 text-center">
                     <div class="wrapper-harga p-lg-5 p-3 pb-5 mb-3 mb-lg-0 bg-white" style="border-radius:20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                        <img src="<?php echo e(assets_url('images/icon_transaction.png')); ?>" width="50" height="50" alt="">
                        <h5 class="montserrat-bold-text pt-lg-2">Harga jual emas hari ini</h5>
                        <h2 class="montserrat-bold-text pt-lg-2">IDR 1,032,000,-/Gram</h2>
                     </div>

                  </div>
                  <div class="col-12 my-3 bg-white my-lg-5 px-0 text-center" style="border-radius: 12px;box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                     <h4 class="montserrat-bold-text pt-lg-3 pt-3">ANTAM CERTIEYE</h4>

                     <table class="fw-bold" style="font-size: 0.8rem;">
                        <thead>
                           <tr class="montserrat-bold-text">
                              <th>Pecahan</th>
                              <th>Harga Beli</th>
                              <th>Harga Jual</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td class="py-2">0.5 Gram</td>
                              <td>613,500</td>
                              <td>503,500</td>
                           </tr>
                           <tr>
                              <td class="py-2">1 Gram</td>
                              <td>1,127,000</td>
                              <td>1,007,000</td>
                           </tr>
                           <tr>
                              <td class="py-2">2 Gram</td>
                              <td>2,254,000</td>
                              <td>2,014,000</td>
                           </tr>
                           <tr>
                              <td class="py-2">3 Gram</td>
                              <td>3,381,000</td>
                              <td>3,021,000</td>
                           </tr>
                           <tr>
                              <td class="py-2">5 Gram</td>
                              <td>5,635,000</td>
                              <td>5,035,000</td>
                           </tr>
                           <tr>
                              <td class="py-2">10 Gram</td>
                              <td>11,270,000</td>
                              <td>10,070,000</td>
                           </tr>
                           <tr>
                              <td class="py-2">25 Gram</td>
                              <td>28,175,000</td>
                              <td>25,175,000</td>
                           </tr>
                           <tr>
                              <td class="py-2">50 Gram</td>
                              <td>56,350,000</td>
                              <td>50,350,000</td>
                           </tr>
                           <tr>
                              <td class="py-2">100 Gram</td>
                              <td>112,700,000</td>
                              <td>100,700,000</td>
                           </tr>
                           <!-- Add more rows as needed -->
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<section id="layanan_kami" class="py-3 p-lg-5 text-white">
   <div class="container-fluid px-lg-5">
      <div class="row px-lg-5">
         <div class="col-12 mb-lg-3">
            <h1 data-aos="fade-up" class="montserrat-bold-text pt-3 pt-lg-0">
               Layanan Kami
            </h1>
            <p data-aos="fade-up">
               <span class="montserrat-bold-text">Global Masantam Indonesia</span> menawarkan layanan Beli Emas, Jual Emas, dan Titip Emas dengan harga yang kompetitif. Transaksi dilakukan secara aman dan terjamin melalui sistem online. Kunjungi website kami atau hubungi nomor telepon kami untuk informasi lebih lanjut
            </p>
         </div>
         <div class="col-12">
            <div class="row text-center text-dark justify-content-center d-flex">
               <?php $__currentLoopData = $our_service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <div data-aos="fade-up" class="col-6 col-lg-4 p-1 p-lg-3">
                  <a class="text-decoration-none" href="#">
                     <div class="card py-3" style="border-radius:15px">
                        <div class="card-body px-lg-4">
                           <img class="image-layanan" src="<?php echo e(assets_url('images/cms/beranda/')); ?><?php echo e($value->photo); ?>" alt="">
                           <h1 class="text-dark card-title montserrat-bold-text pt-3"><?php echo e($value->title); ?></h1>
                           <p class="text-dark card-text pb-lg-3"><?php echo e($value->content); ?></p>
                           <a href="#" class="text-white btn btn-ask-admin py-2"><?php echo e($value->title); ?></a>
                        </div>
                     </div>
                  </a>
               </div>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
         </div>
      </div>
   </div>

</section>

<section id="product" class="py-3 p-lg-5">
   <div class="container-fluid px-lg-5">
      <div class="row px-lg-5">
         <div class="col-12 pb-3" style=" overflow:hidden;">
            <h1 class="montserrat-bold-text">Produk Kami</h1>
            <p><span class="montserrat-bold-text">Global Masantam Indonesia </span>menawarkan berbagai produk emas berkualitas tinggi dengan harga yang kompetitif. Kami menyediakan berbagai pilihan produk, mulai dari perhiasan, koin, hingga batangan</p>
            <div class="swiper swiperProduct">
               <div class="swiper-wrapper">
                  <div class="swiper-slide">
                     <div class="container-fluid py-3 text-left">
                        <div class="row">
                           <a href="#" class="text-dark text-decoration-none">
                              <div class="card-product col-12 text-left p-3">
                                 <img src="<?php echo e(assets_url('images/05gram.jpg')); ?>" class="img-fluid" alt="">
                                 <p class="mt-3 mb-0">Emas 0.5gr</p>
                                 <p class="mb-2 montserrat-bold-text">Rp. 650.000</p>
                                 <a href="#" class="p-3 text-white btn btn-ask-admin">Beli Sekarang</a>
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="container-fluid py-3 text-left">
                        <div class="row">
                           <a href="#" class="text-dark text-decoration-none">
                              <div class="card-product col-12 text-left p-3">
                                 <img src="<?php echo e(assets_url('images/05gram.jpg')); ?>" class="img-fluid" alt="">
                                 <p class="mt-3 mb-0">Emas 1gr</p>
                                 <p class="mb-2 montserrat-bold-text">Rp. 1.300.000</p>
                                 <a href="#" class="p-3 text-white btn btn-ask-admin">Beli Sekarang</a>
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="container-fluid py-3 text-left">
                        <div class="row">
                           <a href="#" class="text-dark text-decoration-none">
                              <div class="card-product col-12 text-left p-3">
                                 <img src="<?php echo e(assets_url('images/05gram.jpg')); ?>" class="img-fluid" alt="">
                                 <p class="mt-3 mb-0">Emas 2gr</p>
                                 <p class="mb-2 montserrat-bold-text">Rp. 2.550.000</p>
                                 <a href="#" class="p-3 text-white btn btn-ask-admin">Beli Sekarang</a>
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="container-fluid py-3 text-left">
                        <div class="row">
                           <a href="#" class="text-dark text-decoration-none">
                              <div class="card-product col-12 text-left p-3">
                                 <img src="<?php echo e(assets_url('images/05gram.jpg')); ?>" class="img-fluid" alt="">
                                 <p class="mt-3 mb-0">Emas 3gr</p>
                                 <p class="mb-2 montserrat-bold-text">Rp. 3.400.000</p>
                                 <a href="#" class="p-3 text-white btn btn-ask-admin">Beli Sekarang</a>
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="container-fluid py-3 text-left">
                        <div class="row">
                           <a href="#" class="text-dark text-decoration-none">
                              <div class="card-product col-12 text-left p-3">
                                 <img src="<?php echo e(assets_url('images/05gram.jpg')); ?>" class="img-fluid" alt="">
                                 <p class="mt-3 mb-0">Emas 50gr</p>
                                 <p class="mb-2 montserrat-bold-text">Rp. 57.550.000</p>
                                 <a href="#" class="p-3 text-white btn btn-ask-admin">Beli Sekarang</a>
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="container-fluid py-3 text-left">
                        <div class="row">
                           <a href="#" class="text-dark text-decoration-none">
                              <div class="card-product col-12 text-left p-3">
                                 <img src="<?php echo e(assets_url('images/05gram.jpg')); ?>" class="img-fluid" alt="">
                                 <p class="mt-3 mb-0">Emas 100gr</p>
                                 <p class="mb-2 montserrat-bold-text">Rp. 112.550.000</p>
                                 <a href="#" class="p-3 text-white btn btn-ask-admin">Beli Sekarang</a>
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="swiper-button-next">
                  <img src="<?php echo e(assets_url('images/next_button.png')); ?>" width="40" height="40" alt="Next">
               </div>
               <div class="swiper-button-prev">
                  <img src="<?php echo e(assets_url('images/prev_button.png')); ?>" width="40" height="40" alt="Previous">
               </div>
            </div>

         </div>
         <div class="col-12 text-center pt-lg-5">
            <div class="lihat-produk d-inline-block m-auto p-3" style="border-radius:8px;border: 0.5px solid #C6C9CC;">
               <a class="btn " href="<?php echo e(base_url('product')); ?>">
                  <h5 class="mb-0">Lihat Semua Produk</h5>
               </a>
            </div>
         </div>
      </div>
   </div>
</section>

<section id="download_aplikasi" data-aos="fade-up" class="py-3">
   <div class="container-fluid">
      <div class="row">
         <div class="col-12 px-lg-5">
            <div class=" text-white px-lg-5">
               <div class="container-fluid px-s-2">
                  <div class="bg-download-aplikasi p-lg-5 row" style="border-radius: 20px;">
                     <div class="col-12 col-lg-6 p-5 text-center text-lg-start  p-lg-5">
                        <h1 class="montserrat-bold-text">Download Aplikasi GMI</h1>
                        <p>Transaksi emas mudah dengan aplikasi kami</p>
                        <div class="d-flex align-items-center gap-3">
                           <a href="#">
                              <img src="<?php echo e(assets_url('images/appstore.png')); ?>" class="img-fluid">
                           </a>
                           <a href="#">
                              <img src="<?php echo e(assets_url('images/playstore.png')); ?>" class="img-fluid">
                           </a>
                        </div>
                     </div>
                     <div class="col-6">

                     </div>
                  </div>
               </div>
            </div>
         </div>

      </div>
   </div>
</section>

<section id="blogs" class="p-lg-5">
   <div class="container-fluid px-lg-5">
      <div class="row">
         <div class="col-12 px-lg-5">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-12 col-lg-6 order-2 order-lg-1">
                     <h2 class="fs-5 montserrat-bold-text pt-lg-0 pt-3" style="color:#C39D27">Edukasi & Blogs</h2>
                     <h1 class="montserrat-bold-text">Belajar Investasi Menguntungkan</h1>
                     <p>Edukasi emas dapat membantu Anda untuk berinvestasi emas dengan aman dan terjamin</p>
                     <a target="_blank" href="https://api.whatsapp.com/send/?phone=6282215711339&text&type=phone_number&app_absent=0" class="btn text-dark border-dark p-3 btn-custom my-3 my-lg-0">Konsultasi Sekarang</a>
                  </div>
                  <div class="col-12 col-lg-6 px-lg-0 order-1 order-lg-2">
                     <img src="<?php echo e(assets_url('images/blogs_1.png')); ?>" class="img-fluid" alt="">
                  </div>
               </div>
            </div>
         </div>
         <div class="col-12 p-lg-5 py-3">
            <div class="container-fluid">
               <div class="row">
                  <?php $__currentLoopData = $article; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php
                  $createdAt = strtotime($value->created_at);
                  $day = date('d', $createdAt);
                  $month = date('F', $createdAt);
                  $year = date('Y', $createdAt);
                  ?>
                  <div class="blogs-wrapper col-12 col-lg-4 pt-3" style="border-radius: 20px;">
                     <a class="text-decoration-none position-relative" href="<?php echo e(base_url('article')); ?>/<?php echo e($value->article_id); ?>">
                        <img src="<?php echo e(assets_url('images/blogs_2.png')); ?>" class="img-fluid" alt="">
                        <p class="montserrat-bold-text date-blogs mt-3 mb-1" style="color:#C39D27;">GMI | <?php echo e($day); ?> <?php echo e($month); ?> <?php echo e($year); ?></p>
                        <div class="position-relative">
                           <img src="<?php echo e(assets_url('images/wrap_icon.png')); ?>" width="30" height="35" class="position-absolute" style="top:0;right:0;"alt="">
                           <?php
                           $articleNames = explode(' ', $value->article_name);
                           $articleName = implode(' ', array_slice($articleNames, 0, 3));
                           $articleName = count($articleNames) > 3 ? $articleName . '...' : $articleName;
                           ?>
                           <h3 class="text-dark montserrat-bold-text title-blogs"><?php echo e($articleName); ?></h3>
                           <?php
                           $contentWords = explode(' ', $value->article_content);
                           $limitedContent = implode(' ', array_slice($contentWords, 0, 10));
                           $limitedContent = count($contentWords) > 10 ? $limitedContent . '...' : $limitedContent;
                           ?>
                           <p class="text-dark"><?php echo e($limitedContent); ?></p>
                        </div>
                     </a>
                  </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </div>
            </div>
            <div class="d-flex justify-content-end pt-lg-5">
               <a class="text-dark fw-bold" href="<?php echo e(base_url('blogs')); ?>">Lihat Selengkapnya</a>
            </div>
         </div>
      </div>
   </div>
</section>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7.3\htdocs\gmi\application\views/dashboard/index.blade.php ENDPATH**/ ?>