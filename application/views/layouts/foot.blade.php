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
                    $(".list-menu-cont > .list-menu > li > .menu-item").removeClass("active");
                    return false;
                }
                $(".list-menu-cont > .list-menu > li > .menu-item").removeClass("active");

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
        $(document).on('click', '.down-button', function(ev) {
            ev.preventDefault();
            $("html, body").animate({
                scrollTop: $(document).height()
            }, 300);
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