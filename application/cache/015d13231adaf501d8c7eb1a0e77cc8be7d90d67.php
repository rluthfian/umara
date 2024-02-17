<link rel="stylesheet" href="<?php echo e(assets_url('css/bootstrap5.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(assets_url('fonts/fonts.css')); ?>">
<link rel="stylesheet" href="<?php echo e(assets_url('css/swiper-bundle.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(assets_url('css/aos.css')); ?>">
<style>
  .logo_wa {
    z-index: 999;
    position: fixed;
    bottom: 5%;
    right: 10px;
    width: 65px;
    height: 65px;
    opacity: 0.7;
  }

  .logo_wa img {
    animation: bounceZoom 1s infinite alternate;
  }

  @keyframes  bounceZoom {
    0% {
      transform: scale(1);
    }

    100% {
      transform: scale(1.1);
    }
  }

  .logo_wa:hover {
    opacity: 1;
  }

  .logo_wa:hover .text_logo_wa {
    display: block;
  }

  .text_logo_wa {
    border-radius: 20px;
    background-color: #C39D27;
    position: fixed;
    right: 10px;
    bottom: 15%;
    display: none;
  }

  #hero .swiper {
    border-radius: 20px;
  }

  #hero .swiper-slide {
    max-height: 400px;
    border-radius: 20px;
    overflow: hidden;
  }

  #product-hero .swiper {
    border-radius: 20px;
  }

  #product-hero .swiper-slide {
    max-height: 400px;
    border-radius: 20px;
    overflow: hidden;
  }

  #product .swiper-slide {
    max-height: 400px;
    border-radius: 20px;
    overflow: hidden;
  }

  .navbar-light .navbar-nav .nav-link {
    position: relative;
    transition: color 0.5s;
  }

  .navbar-light .navbar-nav .nav-link::before {
    content: "";
    position: absolute;
    width: 100%;
    height: 2px;
    /* Adjust the height of the underline */
    bottom: 0;
    left: 0;
    background-color: transparent;
    transform-origin: bottom right;
    transform: scaleX(0);
    transition: transform 0.5s ease, background-color 0.5s ease;
  }

  .navbar-light .navbar-nav .nav-link:hover {
    color: #000;
    /* Change to your desired hover color */
  }

  .navbar-light .navbar-nav .nav-link:hover::before {
    transform-origin: bottom left;
    transform: scaleX(1);
    background-color: #C39D27;
    /* Change to your desired underline color */
  }

  .btn-ask-admin {
    background: #C39D27;
    border: none;
    width: 100%;

  }

  .lihat-produk:hover {
    background-color: #C39D27;
    color: #FFF !important;
  }

  .lihat-produk:hover h5 {
    color: #FFF !important;
  }

  .lihat-produk {
    transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
  }

  #product .btn-ask-admin {
    font-size: 0.7rem;
    border-radius: 15px;
  }

  #product .swiper {
    overflow: visible;
  }

  .fs-06 {
    font-size: 0.6rem;
  }
  .fs-07 {
    font-size: 0.7rem;
  }
  .fs-08 {
    font-size: 0.8rem;
  }

  .fs-09 {
    font-size: 0.9rem;
  }

  .fs-10 {
    font-size: 1rem;
  }

  #layanan_kami {
    background-image: url("<?php echo e(assets_url('images/heroBanner.jpg')); ?>");
    background-size: 100% 100%;

  }

  .bg-download-aplikasi {
    background-image: url("<?php echo e(assets_url('images/heroBanner.jpg')); ?>");
    background-size: 100% 100%;

  }
  .navbar-dark .navbar-nav .nav-link:hover {
    color: #e93f1a!important;
  }
  .nav-item:hover{

  }

  #footer {
    background-color: rgba(72, 72, 74,1);
  }

  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
  }

  th,
  td {
    padding: 8px;
    padding-left: 1rem;
    padding-right: 1rem;
    text-align: left;
  }

  th {
    background-color: #f2f2f2;
  }

  .primary-color-text {
    color: #44494C;
  }

  tr {
    border-bottom: 1px solid #F1F2F2;
  }

  body {
    font-family: Montserrat;
  }

  #about_us {
    background: #F9FAFB;
  }

  #harga_emas {
    background: #F9FAFB;

  }

  .poppins-text {
    font-family: 'Poppins', sans-serif;
  }

  .montserrat-light-text {
    font-family: 'montserrat-light';
  }

  .montserrat {
    font-family: Montserrat;
  }

  .montserrat-bold-text {
    font-family: montserrat-bold;
  }

  .navbar-light {
    background-color: #FFFFFF !important;
  }

  ::-webkit-scrollbar {
    width: 7px;
    /* Width of the scrollbar */
  }

  .swiper-pagination-bullet {
    width: 12px;
    height: 12px;
    background: transparent;
    border: 1px solid #e93f1a;
    opacity: 1;
  }

  .swiper-pagination-bullet-active {
    width: 40px;
    transition: width .5s;
    border-radius: 5px;
    background: #e93f1a;
    border: 1px solid transparent;
  }

  .swiper-button-next::after,
  .swiper-button-prev::after {
    content: "";
  }

  ::-webkit-scrollbar-thumb {
    background-color: #5A5A5C;
    /* Color of the thumb */
    border-radius: 10px;
    /* Rounded corners of the thumb */
  }

  ::-webkit-scrollbar-track {
    background-color: #f1f1f1;
    /* Color of the track */
  }

  .gradient-custom-2 {
    border-top-right-radius: .3rem;
    border-bottom-right-radius: .3rem;
    background: linear-gradient(to right, #F8A400,#F8A400, #F8A400, #C39D27);
  }

  .img_contact img{
    filter: invert(100%) sepia(100%) saturate(0%) hue-rotate(105deg) brightness(106%) contrast(101%);
  }
  .img_contact img:hover{
    filter: invert(41%) sepia(94%) saturate(4751%) hue-rotate(353deg) brightness(94%) contrast(94%);
  }
  #hero {
    position: relative;
    background-image: url("<?php echo e(assets_url('images/background.jpg')); ?>");
    background-size: 100% 100%;
  }
  #dosen-hero{
    position: relative;
    background-image: url("<?php echo e(assets_url('images/dosen_bg.jpg')); ?>");
    background-size: 100% 100%;
  }

  #hero::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(72, 72, 74, 0.4); /* Adjust the last value for opacity (0 to 1) */
  z-index: 1; /* Adjust the z-index if necessary */
}

  .swiper-wrapper {
    transition-timing-function: linear;
  }

  #testimonial {
    background: #F9FAFB;
  }

  .btn-custom {
    border: 1px solid white;
    border-radius: 8px;
    transition: background-color 0.6s, color 0.6s;
  }

  #cabang .btn-custom {
    border: 1px solid black;
    border-radius: 8px;
    transition: background-color 0.6s, color 0.6s;
  }

  #about_hero .btn-custom {
    border: 1px solid black;
    border-radius: 8px;
    transition: background-color 0.6s, color 0.6s;
  }

  #hero .btn-custom:hover {
    border: 1px solid #C39D27;
    border-radius: 8px;
    background-color: #C39D27;
    color: #FFFFFF;
  }

  #blogs .btn-custom:hover {
    border: none;
    border-radius: 8px;
    background-color: #C39D27;
    color: #FFFFFF !important;
  }

  .btn-custom-primary {
    color: #FFF;
    background-color: #e93f1a;
    border-radius: 4px;
    transition: background-color 0.6s, color 0.6s;
  }

  .navbar-light .navbar-nav .nav-link {
    color: rgba(0, 0, 0, 1);
  }

  .btn-custom-primary:hover {
    background-color: transparent;
    border-color: #e93f1a;
    color: #e93f1a;
  }

  #dashboard .swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  #dashboard .swiper-slide img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .card-product {
    cursor: pointer;
    border: 0.5px solid #C6C9CC;
    border-radius: 20px;
  }

  #layanan_kami .card {
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    /* Add box-shadow to the transition property */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0);
    /* Initial box shadow (adjust values as needed) */
  }

  #layanan_kami .card:hover {
    transform: scale(1.05);
    box-shadow: 0 0 20px rgba(195, 157, 39, 1);
    /* Change border to box shadow on hover (adjust values as needed) */
  }

  #blogs .blogs-wrapper {
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    /* Add box-shadow to the transition property */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0);
    /* Change border to box shadow on hover (adjust values as needed) */
  }

  #blogs .blogs-wrapper:hover {
    transform: scale(1.05);
    box-shadow: 0 0 20px rgba(195, 157, 39, 1);
    /* Change border to box shadow on hover (adjust values as needed) */
  }

  #product .card-product {
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    /* Add box-shadow to the transition property */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0);
    /* Initial box shadow (adjust values as needed) */
  }

  #product .card-product:hover {
    box-shadow: 0 0 20px rgba(195, 157, 39, 1);
    /* Change border to box shadow on hover (adjust values as needed) */
  }

  .wrapper-img-slider {
    width: 200px;
    height: 200px;
  }

  .swiper-img {
    width: 150px;
    height: 150px;
  }

  #about_hero .swiper-img {
    width: auto;
    height: auto;
  }

  .text-diperbaharui {
    border-radius: 10px;
    border: 1px solid #C6C9CC
  }

  .image-layanan {
    width: 200px;
  }

  #contact_hero .card {
    background: #F9FAFB;
    border: none;
  }

  @media  screen and (max-width:576px) {
    .card-body {
      flex: 1 1 auto;
      padding: 0.5rem 0.5rem;
    }

    .image-layanan {
      width: 100px;
    }

    #hero .button a {
      width: 100%;
    }

    #hero .swiper-slide {
      height: auto;
      border-radius: 20px;
      overflow: hidden;
    }

    #hero .swiper-slide img {
      height: 250px;
      border-radius: 20px;
      overflow: hidden;
    }

    .swiper-img {
      width: 100px;
      height: 100px;
    }

    #product-hero .swiper-slide {
      height: auto;
      overflow: hidden;
    }

    #product-hero .swiper-slide img {
      height: 250px;
      overflow: hidden;
    }

    .text-diperbaharui {
      font-size: 0.7rem;
      border-radius: 10px;
      border: 1px solid #C6C9CC
    }

    .card {
      height: 100%;
    }
  }
</style><?php /**PATH C:\xampp7.3\htdocs\chevalier\application\views/layouts/head.blade.php ENDPATH**/ ?>