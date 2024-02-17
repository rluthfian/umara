
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.1/dist/sweetalert2.all.min.js"></script>
<!-- Bootstrap core JavaScript-->
<script src="{{assets_url('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{assets_url('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{assets_url('js/swiper-bundle.min.js')}}"></script>
<!-- Core plugin JavaScript-->
<script src="{{assets_url('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{assets_url('js/sb-admin-2.min.js')}}"></script>

<!-- Page level plugins -->
<script src="{{assets_url('vendor/chart.js/Chart.min.js')}}"></script>

<script>
   var swiper = new Swiper(".mySwiper", {
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        speed:1000,
        grabCursor: true,
        pagination: {
            el: ".swiper-pagination",
        },
    });
    var swiper = new Swiper(".swiperProduct", {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        slidesPerView: 5, // Display 5 slides per view
        spaceBetween: 10, // Add space between slides if needed
        loop: true,
        breakpoints: {
            320: {
                slidesPerView: 2,
                spaceBetween: 5,
            },
            480: {
                slidesPerView: 2,
                spaceBetween: 5,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 5,
            },
            992: {
                slidesPerView: 4,
                spaceBetween: 5,
            },
            1200: {
                slidesPerView: 5,
                spaceBetween: 10,
            },
            1440: {
                slidesPerView: 6,
                spaceBetween: 10,
            },
            2000: {
                slidesPerView: 6,
                spaceBetween: 10,
            },
        },
    });
    var swiper = new Swiper(".swiperTestimonial", {
        slidesPerView: 6,
        spaceBetween: 10,
        loop: true,
        autoplay: {
            delay: 1,
            disableOnInteraction: false,
        },
        speed: 6000,
        grabCursor: true,

        breakpoints: {
            320: {
                slidesPerView: 3,
                spaceBetween: 10,
            },
            480: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            992: {
                slidesPerView: 4,
                spaceBetween: 40,
            },
            1200: {
                slidesPerView: 5,
                spaceBetween: 50,
            },
            1440: {
                slidesPerView: 4,
                spaceBetween: 60,
            },
        },
    });
    var swiper = new Swiper(".swiperFounder", {
        slidesPerView: 1,
        spaceBetween: 10,
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 0,
            },
            480: {
                slidesPerView: 1,
                spaceBetween: 0,
            },
            768: {
                slidesPerView: 1,
                spaceBetween: 0,
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 0,
            },
            1200: {
                slidesPerView: 3,
                spaceBetween: 0,
            },
            1440: {
                slidesPerView: 3,
                spaceBetween: 0,
            },
        },
    });
</script>