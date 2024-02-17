<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="<?php echo e(assets_url('js/swiper-bundle.min.js')); ?>"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo e(assets_url('js/aos.js')); ?>"></script>

<script>
    AOS.init({
        offset: 100,
        duration: 1000, // Animation duration
    });
</script>

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
                slidesPerView: 6,
                spaceBetween: 60,
            },
        },
    });
    var swiper = new Swiper(".swiperFounder", {
        slidesPerView: 3,
        spaceBetween: 10,
        loop: true,
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
</script><?php /**PATH C:\xampp7.3\htdocs\umara\application\views/layouts/foot.blade.php ENDPATH**/ ?>