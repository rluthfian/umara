<script src="{{assets_url('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{assets_url('js/fontawesome.min.js')}}"></script>
<script src="{{assets_url('js/bootstrap.min.js')}}"></script>
<script src="{{assets_url('js/slick/slick.min.js')}}"></script>
<script src="{{assets_url('js/slider.js')}}"></script>

<script>
    $(document).ready(function() {
        $(document).on('scroll', function() {
            var scroll = $(window).scrollTop();
            var top = 30;
            if (scroll > top)
                $(".header-top").addClass("scrolled");
            else
                $(".header-top").removeClass("scrolled");
        });

        contentReveal();
        $(window).scroll(function() {
            contentReveal();
        });

        function contentReveal() {
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            $('.bottom-content > div').each(function(i) {
                var outerHeight = ($(this).outerHeight() / 3) < 50 ? ($(this).outerHeight() / 3) : 50;
                // var bottom_of_object = $(this).offset().top + ($(this).outerHeight() / 3);
                var bottom_of_object = $(this).offset().top + outerHeight;

                // Fade in
                if ($(this).css('opacity') == "0" && bottom_of_window > bottom_of_object) {
                    $(this).addClass('active');
                }
            });
        }
    });
</script>

<script>
    $(document).ready(function() {
        $(document).on("click", ".menu-item a", function(ev) {
            // console.log('$(this).attr("href")', $(this).children("a").attr("href"))
            if ($(this).closest(".menu-item").children(".submenu").length > 0) {
                ev.preventDefault();

                if ($(this).closest(".menu-item").hasClass("active")) {
                    $(".list-menu-cont > .container-fluid > .row  > .col-12 > .list-menu > li > .menu-item").removeClass("active");
                    return false;
                }
                $(".list-menu-cont > .container-fluid > .row  > .col-12 > .list-menu > li > .menu-item").removeClass("active");

                $(this).closest(".menu-item").addClass("active");
            }
        });
        $(document).on("click", ".main-menu-close a", function(ev) {
            ev.preventDefault();
            $("#main-menu-container").removeClass("active");
        });
        $(document).on("click", ".menu-ico", function(ev) {
            ev.preventDefault();
            $("#main-menu-container").addClass("active");
        });
    });
</script>

<script>
    $(document).ready(function() {
        $(document).on('click', '.scroll-more', function(ev) {
            ev.preventDefault();
            $("html, body").animate({
                scrollTop: '+=700' // Ubah nilai ini sesuai keinginan Anda
            }, 600); // Ubah durasi animasi jika perlu
        });


        $(window).scroll(function() {
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            $('.bottom-content > div').each(function(i) {
                var bottom_of_object = $(this).offset().top + ($(this).outerHeight() / 2);

                // Fade in
                if ($(this).css('opacity') == "0" && bottom_of_window > bottom_of_object) {
                    $(this).addClass('active');
                }
            });
        });

        $(document).on('scroll', function() {
            var scroll = $(window).scrollTop();
            var top = -1 * (scroll / 2);
            if (scroll == 0) {
                top = 0;
            }
            $(".carousel").css("transform", "translateY(" + top + "px)")
        });

        $(".carousel-cont .carousel-desc[data-num='0']").addClass("active");
        $('.carousel').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
            // console.log('Slide event', nextSlide, nextSlide);
            $(".carousel-cont .carousel-desc").removeClass("active");
            $(".carousel-cont .carousel-desc[data-num='" + nextSlide + "']").addClass("active");
        });

        var width = $(window).width();
        $(".carousel-title").width(width * 0.8 + "px");
        $(".carousel-subtitle").width(width * 0.8 + "px");
        $(window).resize(function() {
            $(".carousel-title").width(width * 0.8 + "px");
            $(".carousel-subtitle").width(width * 0.8 + "px");
        });
    });
</script>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!-- <script src="/js/slick.min.js"></script> -->


<script>
    var current_slider = 0;

    function slider_move(stat) {
        // console.log(val);

        if (stat == "prev") prev_slide();
        if (stat == "next") next_slide();
        $(".slide-item").removeClass('active');
        // el.addClass('active');
    }

    function next_slide(slideTo) {
        if (current_slider >= ($(".slide-item").length - 1)) return false;
        current_slider = typeof slideTo == "undefined" ? ++current_slider : slideTo;

        $(".slide-item").css("transition", "all .5s");
        //$(".slide-item").css("transform", "translateX(calc(100%*"+(current_slider*-1)+"))");
        $(".slide-desc-text").removeClass("active");
        $(".slide-desc-text[data-num='" + current_slider + "']").addClass("active");
        $(".slide-item .timeline-item").removeClass("focus");
        $(".slide-item[data-num='" + current_slider + "'] .timeline-item").addClass("focus");

    }

    function prev_slide(slideTo) {
        if (current_slider <= 0) return false;
        current_slider = typeof slideTo == "undefined" ? --current_slider : slideTo;

        $(".slide-item").css("transition", "all .5s");
        //$(".slide-item").css("transform", "translateX(calc(100%*"+(current_slider*-1)+"))");
        $(".slide-desc-text").removeClass("active");
        $(".slide-desc-text[data-num='" + current_slider + "']").addClass("active");
        $(".slide-item .timeline-item").removeClass("focus");
        $(".slide-item[data-num='" + current_slider + "'] .timeline-item").addClass("focus");

    }

    function initSlider() {
        var slideItems = $(".slide-timeline-item-cont .slide-item");
        var lastSlide = slideItems.filter(function(k, v) {
            if (k >= (slideItems.length - 2)) return true;
            return false;
        });
        var lastSlideEl = "";
        lastSlide.map(function(k, v) {
            // var disV = v.outerHTML;
            // $(disV).find("a").css("display", "none");
            // console.log($(disV)[0].outerHTML);
            // lastSlideEl += $(disV)[0].outerHTML;
            lastSlideEl += "<div class=\"slide-item\" data-num=\"0\"><a href=\"#\" class=\"timeline-item\"></a></div>";
            // v.remove();
        });
        $(".slide-timeline-item-cont .slide-item").first().addClass("active");
        // $(".slide-timeline-item-cont").prepend(lastSlideEl)
    }
    $(document).ready(function() {
        initSlider();
        // $(".slide-item").css("transform", "translateX(-200%)");

        $(document).on('scroll', function() {
            var scroll = $(window).scrollTop();
            var top = scroll / 2;
            if (scroll == 0) {
                top = 0;
            }
            $(".jumbotron-background").css("transform", "translateY(" + top + "px)")
        });

        // Slider Event
        $(document).on("click", "#next-ico a", function(ev) {
            ev.preventDefault();
            slider_move("next");
        });
        $(document).on("click", "#prev-ico a", function(ev) {
            ev.preventDefault();
            slider_move("prev");
        });
        $(document).on("click", ".slide-item a", function(ev) {
            ev.preventDefault();
            let dataNum = $(this).closest(".slide-item").attr("data-num");
            if (dataNum < current_slider) prev_slide(dataNum);
            if (dataNum > current_slider) next_slide(dataNum);
        });
        // END Slider Event
    });
</script>