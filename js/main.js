    var isDesktop = false,
        isTablet = false,
        isMobile = false;

$(document).ready(function(){	
    function resize(){
       if( typeof( window.innerWidth ) == 'number' ) {
            myWidth = window.innerWidth;
            myHeight = window.innerHeight;
        } else if( document.documentElement && ( document.documentElement.clientWidth || 
        document.documentElement.clientHeight ) ) {
            myWidth = document.documentElement.clientWidth;
            myHeight = document.documentElement.clientHeight;
        } else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
            myWidth = document.body.clientWidth;
            myHeight = document.body.clientHeight;
        }

        if( myWidth > 1024 ){
            isDesktop = true;
            isTablet = false;
            isMobile = false;
        }else if( myWidth > 767 && myWidth < 1023 ){
            isDesktop = false;
            isTablet = true;
            isMobile = false;
        }else{
            isDesktop = false;
            isTablet = false;
            isMobile = true;
        }

    }
    $(window).resize(resize);
    resize();

    $.fn.placeholder = function() {
        if(typeof document.createElement("input").placeholder == 'undefined') {
            $('[placeholder]').focus(function() {
                var input = $(this);
                if (input.val() == input.attr('placeholder')) {
                    input.val('');
                    input.removeClass('placeholder');
                }
            }).blur(function() {
                var input = $(this);
                if (input.val() == '' || input.val() == input.attr('placeholder')) {
                    input.addClass('placeholder');
                    input.val(input.attr('placeholder'));
                }
            }).blur().parents('form').submit(function() {
                $(this).find('[placeholder]').each(function() {
                    var input = $(this);
                    if (input.val() == input.attr('placeholder')) {
                        input.val('');
                    }
                });
            });
        }
    }
    $.fn.placeholder();

    $('.b-catalog-preview .b-big-tabs h2').on('click', function(){
        var tab = $(this).attr('data-tab');
        $(this).siblings().addClass('deactive');
        $(this).removeClass('deactive');
        $('.b-catalog-preview .b-catalog-list').addClass('hide');
        $('#'+tab).removeClass('hide');
    });



    $('.b-tab').on('click', function(){
        var tab = $(this).attr('data-tab');
        $(this).parent().siblings().addClass('hide');
        $(this).siblings().removeClass('active');
        if (!$(this).hasClass('active')) {
            $(this).addClass('active');
        }
        if ($('#'+tab).hasClass('hide')) {
             $('#'+tab).removeClass('hide');
        }
    });

    $('.b-tabs-select select').on('change',function(){
        var tab = $(this).val();
        $(this).parent().parent().siblings().addClass('hide');
        if ($('#'+tab).hasClass('hide')) {
            $('#'+tab).removeClass('hide');
        }
    })


    $('.b-tabs-container').each(function(){
        containerWidth = $(this).width();
        width = 0;
        $(this).find('.b-tab').each(function(){
            width += $(this).width();
        })
        if (containerWidth/width > 2) {
            $(this).addClass('taleft');
        }
        else{
            $(this).addClass('tajustify');
        }
    });

    $('.b-filter-item select').styler();
    $('.detail-select-block select').styler();
    $('.b-tabs-select select').styler();

    $('.filter-icon').on('click', function(){
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        var style = $(this).attr('data-style');
        var catalog = $(this).parents('.b-block').find('.b-catalog-list');
        catalog.removeAttr('class');
        catalog.addClass('b-catalog-list');
        catalog.addClass(style);
        return false;
    });

    $(".b-catalog-slider").slick({
        dots: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        cssEase: 'ease', 
        speed: 500,
        arrows: true,
        prevArrow: '<button type="button" class="slick-prev slick-arrow icon-arrow"></button>',
        nextArrow: '<button type="button" class="slick-next slick-arrow icon-arrow"></button>',
        touchThreshold: 100,
        responsive: [
            {
              breakpoint: 1150,
              settings: {
                slidesToShow: 3
              }
            },
        ]
    });

    $('.b-detail-top-slider').slick({
        dots: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        cssEase: 'ease', 
        speed: 500,
        arrows: true,
        asNavFor: '.b-detail-bottom-slider',
        prevArrow: '<button type="button" class="slick-prev slick-arrow icon-arrow"></button>',
        nextArrow: '<button type="button" class="slick-next slick-arrow icon-arrow"></button>',
        touchThreshold: 100
    });

    $('.b-detail-bottom-slider').slick({
        dots: false,
        slidesToShow: 5,
        slidesToScroll: 1,
        infinite: true,
        cssEase: 'ease', 
        speed: 500,
        arrows: false,
        asNavFor: '.b-detail-top-slider',
        prevArrow: '<button type="button" class="slick-prev slick-arrow icon-arrow"></button>',
        nextArrow: '<button type="button" class="slick-next slick-arrow icon-arrow"></button>',
        touchThreshold: 100,
        variableWidth: true,
    });

    $('.b-gallery-preview .b-1-by-3-container').slick({
        dots: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        cssEase: 'ease', 
        speed: 500,
        autoplay: true,
        arrows: false,
        touchThreshold: 100,
        responsive: [
            {
              breakpoint: 600,
              settings: {
                centerMode: true,
                centerPadding: "40px",
                slidesToShow: 1
              },
              breakpoint: 500,
              settings: {
                centerMode: true,
                centerPadding: "30px",
                slidesToShow: 1
              }
            },
        ]
    });


    // // Первая анимация элементов в слайде
    // $(".b-step-slide[data-slick-index='0'] .slider-anim").addClass("show");

    // // Кастомные переключатели (тумблеры)
    // $(".b-step-slider").on('beforeChange', function(event, slick, currentSlide, nextSlide){
    //     $(".b-step-tabs li.active").removeClass("active");
    //     $(".b-step-tabs li").eq(nextSlide).addClass("active");
    // });

    // // Анимация элементов в слайде
    // $(".b-step-slider").on('afterChange', function(event, slick, currentSlide, nextSlide){
    //     $(".b-step-slide .slider-anim").removeClass("show");
    //     $(".b-step-slide[data-slick-index='"+currentSlide+"'] .slider-anim").addClass("show");
    // });


    
	// var myPlace = new google.maps.LatLng(55.754407, 37.625151);
 //    var myOptions = {
 //        zoom: 16,
 //        center: myPlace,
 //        mapTypeId: google.maps.MapTypeId.ROADMAP,
 //        disableDefaultUI: true,
 //        scrollwheel: false,
 //        zoomControl: true
 //    }
 //    var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions); 

 //    var marker = new google.maps.Marker({
	//     position: myPlace,
	//     map: map,
	//     title: "Ярмарка вакансий и стажировок"
	// });

});