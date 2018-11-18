<!DOCTYPE html>
<html lang="en">
<head>
  <title>Product</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--===============================================================================================-->
  <link rel="icon" type="image/png" href="/images/icons/favicon.png"/>
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="/fonts/iconic/css/material-design-iconic-font.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="/fonts/linearicons-v1.0.0/icon-font.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="/vendor/animate/animate.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="/vendor/css-hamburgers/hamburgers.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="/vendor/animsition/css/animsition.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="/vendor/select2/select2.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="/vendor/daterangepicker/daterangepicker.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="/vendor/slick/slick.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="/vendor/MagnificPopup/magnific-popup.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="/vendor/perfect-scrollbar/perfect-scrollbar.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="/vendor/waitMe/waitMe.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="/css/util.css">
  <link rel="stylesheet" type="text/css" href="/css/main.css">
  <!--===============================================================================================-->
</head>
<body class="animsition">

<!-- Header -->
<header class="header-v4">
  <!-- Header desktop -->
  <div class="container-menu-desktop" style="height: 80px;">
    <!-- Topbar -->
    <div class="wrap-menu-desktop how-shadow1" style="position: relative; top:0px;">
      <nav class="limiter-menu-desktop container">

        <!-- Logo desktop -->
        <a href="/" class="logo">
          <img src="/images/icons/logo-01.png" alt="IMG-LOGO">
        </a>

        <!-- Icon header -->
        <div class="wrap-icon-header flex-w flex-r-m">
          <!-- <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                          <i class="zmdi zmdi-search"></i>
                      </div> -->

          <a class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-cart" href="{{route('cart.index')}}">
            <i class="zmdi zmdi-shopping-cart"></i>
            <span
              style="font-family: Poppins-Regular; font-size: 12px; color: #fff; line-height: 15px; text-align: center; display: block; position: absolute; top: -7px; right: 0; min-width: 15px; height: 15px; padding: 0 3px; background-color: #717fe0;"
              id="total_quantity">{{$total_quantity}}</span>
          </a>
          <div class="user">
            <div id="dropdownMenuButton"
                 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="zmdi zmdi-account zmdi-hc-2x"></i>
            </div>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              @if(Auth::check())
                <a href="/logout" class="dropdown-item"><i class="zmdi zmdi-sign-in"> Log out</i></a>
              @else
                <a href="/register" class="dropdown-item"><i class="zmdi zmdi-sign-in"> Sign Up</i></a>
                <a href="/login" class="dropdown-item"><i class="zmdi zmdi-sign-in"> Sign In</i></a>
              @endif
            </div>
          </div>
        </div>
      </nav>
    </div>
  </div>

  <!-- Header Mobile -->
  <div class="wrap-header-mobile">
    <!-- Logo moblie -->
    <div class="logo-mobile">
      <a href="index.html"><img src="/images/icons/logo-01.png" alt="IMG-LOGO"></a>
    </div>

    <!-- Icon header -->
    <div class="wrap-icon-header flex-w flex-r-m m-r-15">
      <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
        <i class="zmdi zmdi-search"></i>
      </div>

      <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
        <i class="zmdi zmdi-shopping-cart"></i>
      </div>

      <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti"
         data-notify="0">
        <i class="zmdi zmdi-favorite-outline"></i>
      </a>
    </div>

    <!-- Button show menu -->
    <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
    </div>
  </div>


  <!-- Menu Mobile -->
  <div class="menu-mobile">
    <ul class="main-menu-m">
      <li>
        <a href="index.html">Home</a>
        <ul class="sub-menu-m">
          <li><a href="index.html">Homepage 1</a></li>
          <li><a href="home-02.html">Homepage 2</a></li>
          <li><a href="home-03.html">Homepage 3</a></li>
        </ul>
        <span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
      </li>

      <li>
        <a href="product.html">Shop</a>
      </li>

      <li>
        <a href="shoping-cart.html" class="label1 rs1" data-label1="hot">Features</a>
      </li>

      <li>
        <a href="blog.html">Blog</a>
      </li>

      <li>
        <a href="about.html">About</a>
      </li>

      <li>
        <a href="contact.html">Contact</a>
      </li>
    </ul>
  </div>

  <!-- Modal Search -->
  <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
    <div class="container-search-header">
      <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
        <img src="/images/icons/icon-close2.png" alt="CLOSE">
      </button>

      <form class="wrap-search-header flex-w p-l-15">
        <button class="flex-c-m trans-04">
          <i class="zmdi zmdi-search"></i>
        </button>
        <input class="plh3" type="text" name="search" placeholder="Search...">
      </form>
    </div>
  </div>
</header>

@yield('content')

<!-- Footer -->
<footer class="bg3 p-t-75 p-b-32">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-lg-3 p-b-50">
        <h4 class="stext-301 cl0 p-b-30">
          Categories
        </h4>

        <ul>
          <li class="p-b-10">
            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
              Women
            </a>
          </li>

          <li class="p-b-10">
            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
              Men
            </a>
          </li>

          <li class="p-b-10">
            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
              Shoes
            </a>
          </li>

          <li class="p-b-10">
            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
              Watches
            </a>
          </li>
        </ul>
      </div>

      <div class="col-sm-6 col-lg-3 p-b-50">
        <h4 class="stext-301 cl0 p-b-30">
          Help
        </h4>

        <ul>
          <li class="p-b-10">
            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
              Track Order
            </a>
          </li>

          <li class="p-b-10">
            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
              Returns
            </a>
          </li>

          <li class="p-b-10">
            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
              Shipping
            </a>
          </li>

          <li class="p-b-10">
            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
              FAQs
            </a>
          </li>
        </ul>
      </div>

      <div class="col-sm-6 col-lg-3 p-b-50">
        <h4 class="stext-301 cl0 p-b-30">
          GET IN TOUCH
        </h4>

        <p class="stext-107 cl7 size-201">
          Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716
          6879
        </p>

        <div class="p-t-27">
          <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
            <i class="fa fa-facebook"></i>
          </a>

          <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
            <i class="fa fa-instagram"></i>
          </a>

          <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
            <i class="fa fa-pinterest-p"></i>
          </a>
        </div>
      </div>

      <div class="col-sm-6 col-lg-3 p-b-50">
        <h4 class="stext-301 cl0 p-b-30">
          Newsletter
        </h4>

        <form>
          <div class="wrap-input1 w-full p-b-4">
            <input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email" placeholder="email@example.com">
            <div class="focus-input1 trans-04"></div>
          </div>

          <div class="p-t-18">
            <button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
              Subscribe
            </button>
          </div>
        </form>
      </div>
    </div>

    <div class="p-t-40">
      <div class="flex-c-m flex-w p-b-18">
        <a href="#" class="m-all-1">
          <img src="/images/icons/icon-pay-01.png" alt="ICON-PAY">
        </a>

        <a href="#" class="m-all-1">
          <img src="/images/icons/icon-pay-02.png" alt="ICON-PAY">
        </a>

        <a href="#" class="m-all-1">
          <img src="/images/icons/icon-pay-03.png" alt="ICON-PAY">
        </a>

        <a href="#" class="m-all-1">
          <img src="/images/icons/icon-pay-04.png" alt="ICON-PAY">
        </a>

        <a href="#" class="m-all-1">
          <img src="/images/icons/icon-pay-05.png" alt="ICON-PAY">
        </a>
      </div>

      <p class="stext-107 cl6 txt-center"><!--
					Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0.
				Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
				Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

      </p>
    </div>
  </div>
</footer>


<!-- Back to top -->
<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
</div>

<!--===============================================================================================-->
<script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="/vendor/bootstrap/js/popper.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="/vendor/waitMe/waitMe.min.js"></script>
<!--===============================================================================================-->
<script src="/vendor/select2/select2.min.js"></script>
<script>
  $(".js-select2").each(function () {
    $(this).select2({
      minimumResultsForSearch: 20,
      dropdownParent: $(this).next('.dropDownSelect2')
    });
  })
</script>
<!--===============================================================================================-->
<script src="/vendor/daterangepicker/moment.min.js"></script>
<script src="/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="/vendor/slick/slick.min.js"></script>
<script src="/js/slick-custom.js"></script>
<!--===============================================================================================-->
<script src="/vendor/parallax100/parallax100.js"></script>
<script>
  $('.parallax100').parallax100();
</script>
<!--===============================================================================================-->
<script src="/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<script>
  $('.gallery-lb').each(function () { // the containers for all your galleries
    $(this).magnificPopup({
      delegate: 'a', // the selector for gallery item
      type: 'image',
      gallery: {
        enabled: true
      },
      mainClass: 'mfp-fade'
    });
  });
</script>
<!--===============================================================================================-->
<script src="/vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
<script src="/vendor/sweetalert/sweetalert.min.js"></script>
<script>
  $('.js-addwish-b2, .js-addwish-detail').on('click', function (e) {
    e.preventDefault();
  });

  $('.js-addwish-b2').each(function () {
    var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
    $(this).on('click', function () {
      swal(nameProduct, "is added to wishlist !", "success");

      $(this).addClass('js-addedwish-b2');
      $(this).off('click');
    });
  });

  $('.js-addwish-detail').each(function () {
    var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

    $(this).on('click', function () {
      swal(nameProduct, "is added to wishlist !", "success");

      $(this).addClass('js-addedwish-detail');
      $(this).off('click');
    });
  });
</script>
<!--===============================================================================================-->
<script src="/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script>
  $('.js-pscroll').each(function () {
    $(this).css('position', 'relative');
    $(this).css('overflow', 'hidden');
    var ps = new PerfectScrollbar(this, {
      wheelSpeed: 1,
      scrollingThreshold: 1000,
      wheelPropagation: false,
    });

    $(window).on('resize', function () {
      ps.update();
    })
  });
</script>
<!--===============================================================================================-->
<script src="/js/main.js"></script>
@yield('script')
</body>
</html>
