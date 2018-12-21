<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'VAP')</title>
    <meta name="description" content="@yield('meta_description', 'Site de ventes et achats ')">
    <meta name="author" content="@yield('meta_author', 'Abderrazak Elkhadiri')">
    @yield('meta')

    <!-- Google font -->
<link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

<!-- Bootstrap -->
<link type="text/css" rel="stylesheet" href="{{asset('eshop/css/bootstrap.min.css')}}" />

<!-- Slick -->
<link type="text/css" rel="stylesheet" href="{{asset('eshop/css/slick.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('eshop/css/slick-theme.css')}}" />

<link type="text/css" rel="stylesheet" href="{{asset('eshop/css/nouislider.min.css')}}" />


<!-- Font Awesome Icon -->
<link rel="stylesheet" href="{{asset('eshop/css/font-awesome.min.css')}}">

<!-- Custom stlylesheet -->
<link type="text/css" rel="stylesheet" href="{{asset('eshop/css/style.css')}}" />

@yield('style')
    
</head>
<body>
    @include('includes.header')
    @include('includes.navigation')
    
    <div id="app">
        @yield('content')
    </div>
    
    @include('includes.footer')

    <!-- jQuery Plugins -->
    <script src="{{asset('eshop/js/jquery.min.js')}}"></script>
    <script src="{{asset('eshop/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('eshop/js/slick.min.js')}}"></script>
    <script src="{{asset('eshop/js/nouislider.min.js')}}"></script>
    <script src="{{asset('eshop/js/jquery.zoom.min.js')}}"></script>
    <!--<script src="{{asset('eshop/js/main.js')}}"></script>-->

    <script>
    (function($) {
  "use strict"

  // NAVIGATION
  var responsiveNav = $('#responsive-nav'),
    catToggle = $('#responsive-nav .category-nav .category-header'),
    catList = $('#responsive-nav .category-nav .category-list'),
    menuToggle = $('#responsive-nav .menu-nav .menu-header'),
    menuList = $('#responsive-nav .menu-nav .menu-list');

  catToggle.on('click', function() {
    menuList.removeClass('open');
    catList.toggleClass('hide');
  });

  menuToggle.on('click', function() {
    catList.removeClass('open');
    menuList.toggleClass('open');
  });

  $(document).click(function(event) {
    if (!$(event.target).closest(responsiveNav).length) {
      if (responsiveNav.hasClass('open')) {
        responsiveNav.removeClass('open');
        $('#navigation').removeClass('shadow');
      } else {
        if ($(event.target).closest('.nav-toggle > button').length) {
          if (!menuList.hasClass('open') && !catList.hasClass('open')) {
            menuList.addClass('open');
          }
          $('#navigation').addClass('shadow');
          responsiveNav.addClass('open');
        }
      }
    }
  });

  // HOME SLICK
//  $('#home-slick').slick({
//    autoplay: true,
//    infinite: true,
//    speed: 300,
//    arrows: true,
//  });

  // PRODUCTS SLICK
  $('#product-slick-1').slick({
    slidesToShow: 3,
    slidesToScroll: 2,
    autoplay: true,
    infinite: true,
    speed: 300,
    dots: true,
    arrows: false,
    appendDots: '.product-slick-dots-1',
    responsive: [{
        breakpoint: 991,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 480,
        settings: {
          dots: false,
          arrows: true,
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      },
    ]
  });

  $('#product-slick-2').slick({
    slidesToShow: 3,
    slidesToScroll: 2,
    autoplay: true,
    infinite: true,
    speed: 300,
    dots: true,
    arrows: false,
    appendDots: '.product-slick-dots-2',
    responsive: [{
        breakpoint: 991,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 480,
        settings: {
          dots: false,
          arrows: true,
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      },
    ]
  });

  // PRODUCT DETAILS SLICK
  $('#product-main-view').slick({
    infinite: true,
    speed: 300,
    dots: false,
    arrows: true,
    fade: true,
    asNavFor: '#product-view',
  });

  $('#product-view').slick({
    slidesToShow: 
    @isset($annonce)
    {{$annonce->images->count() - 1}}
    @else
    3
    @endisset,
    slidesToScroll: 1,
    arrows: true,
    centerMode: true,
    focusOnSelect: true,
    asNavFor: '#product-main-view',
  });

  // PRODUCT ZOOM
  //$('#product-main-view .product-view').zoom();

  // PRICE SLIDER
  var slider = document.getElementById('price-slider');
  if (slider) {
    noUiSlider.create(slider, {
      start: [1, 999],
      connect: true,
      tooltips: [true, true],
      format: {
        to: function(value) {
          return value.toFixed(2) + '$';
        },
        from: function(value) {
          return value
        }
      },
      range: {
        'min': 1,
        'max': 999
      }
    });
  }

})(jQuery);

    </script>

    @yield('scripts');
</body>
</html>
