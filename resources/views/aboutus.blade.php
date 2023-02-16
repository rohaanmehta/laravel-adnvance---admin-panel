@extends('01main')
@section('content')

<!-- ======= Intro Section ======= -->
<div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container text-center">
      Now Delivering in Kuwait, Bahrain & Qatar | Get Extra 15% Off
    </div>
  </div>
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#intro">The<span>Event</span></a></h1>-->
        <a href="index.html" class="scrollto"><img src="assets/img/logo.png" alt="" title=""></a>
      </div>
      <div class="deks_login_box">
        <ul class="deks_login">
          <li class="login_btn"><a href="login.html"><i class="fa fa-user"></i> Login</a></li>
          <li class="login_btn"><a href="register.html"><i class="fa fa-user"></i> Register</a></li>
        </ul>
      </div>  
      <nav id="nav-menu-container">
        <ul class="nav-menu">
        <li><a href="<?= url('/'); ?>">Home</a></li>
        <li  class="menu-active"><a href="<?= url('/About'); ?>">About</a> </li>
        <li><a href="<?= url('/#cal_shipment'); ?>">Pricing</a></li>
        <li><a href="<?= url('/#how_it_works'); ?>">How It Works</a></li>
          <li class="menu-has-children"><a href="javascript:void(0);">Shipping Terms</a>
            <ul>
              <li><a href="#">Unclaimed/unpaid Packages</a></li>
              <li><a href="#">Shipping Electronics</a></li>
              <li><a href="#">Resellers</a></li>
              <li><a href="#">User Agreement</a></li>
              <li><a href="#">Insurance Policy</a></li>
              <li><a href="#">Banned Items</a></li>
            </ul>  
          </li>
           
          <li class="login_btn"><a href="<?= url('/Login'); ?>"><i class="fa fa-user"></i> Login</a></li>
          <li class="login_btn"><a href="<?= url('/Standard_register'); ?>"><i class="fa fa-user"></i> Register</a></li>
          <!--<li class="menu-has-children"><a href="javascript:void(0);">MultiLevel</a>
            <ul>
              <li><a href="#">test 1</a></li>
              <li><a href="#">test 2</a></li>
              <li class="menu-has-children"><a href="#">test 3</a>
                <ul>
                  <li><a href="#">test 3.1</a></li>
                  <li><a href="#">test 3.2</a></li>
                </ul>
              </li>

            </ul>
          </li>-->
        </ul>
      </nav><!-- #nav-menu-container -->
      <!--<button type="button" id="mobile-nav-toggle"><i class="fa fa-bars"></i></button>-->
    </div>
  </header><!-- End Header -->

  <main id="main" class="main-page">
    <!-- ======= about Details Section ======= -->
    <section id="about_us">
      <div class="container">
        <div class="section-header">
          <h2>ABOUT US</h2> 
        </div>

        <div class="row"> 
          <div class="col-md-12">
            <div class="details">
              <h5 class="blue_color">Staying in India and wish to buy from UK to India or USA to India. PPObox is the only service.</h5> 
              <p>Worried about the safe shipping of your courier? Well, such questions always confront people who wish to order products from foreign locations. The current world is fast-paced and product courier services increasingly rely on the expertise of the transportation industry. The customers expect vibrant services and features like better tracking of shipments, online facilities, predictable and timely delivery and transparent billing and invoicing information.</p>

              <p>All this is good if you intend to receive the shipments within your country of residence. However, the problem arises when the courier is to be ordered from a foreign country. For example, you may be intending to buy from USA to India, or may be buy China products in India, the issue is that, most of the online companies or sellers do not ship products outside their country. This is where <b>PPOBox</b> comes to your rescue, which is a service providing you with your own unique address in the country you intend to purchase goods from. We then ship these products to your permanent residences, or to places where you wish to get the products at.</p>

              <p>Courier companies are obsessed for goods delivery and proper service which is also quick and affordable. They continuously invest in their resources and begin initiatives for achievement of cost-effectiveness and greater speed deliveries which are the objectives of any courier service. Most of the resources and efforts are spent in up-to-date technologies and hiring proficient talents for boosting their performance. Nevertheless, the resources and technologies are not the only aspects which count at the end of the day. PPOBox realizes the quest for efficiency and speed with efficient networking across different countries anchored by better transport modes and connectivity.</p>

              <p>Right from its inception, <b>PPOBox has established itself in the market to become one amongst the preferred choices of customers for their courier needs.</b> Our stand out point is catering to people who are unable to obtain their requests due to the sellers not shipping products outside their demography. Our commitment lies in the provision of reliable, flexible and efficient services, even for goods that are difficult to ship to your doorsteps. Our strength lies in the cultivation of endearing partnerships across continents and efficient practices for meeting the specific requirements of clients with a zeal for quality.</p>

              <h5>Staying in India and wish to buy from UK to India or USA to India. You have come to right place.</h5>
            </div>
          </div>

        </div>
      </div>

    </section>

  </main><!-- End #main -->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script> 
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/superfish/superfish.min.js"></script>
  <script src="assets/vendor/hoverIntent/hoverIntent.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
<script>
// Navigation active state on scroll
  var nav_sections = $('section');
  var main_nav = $('.nav-menu, #mobile-nav');

  $(window).on('scroll', function() {
    var cur_pos = $(this).scrollTop() + 200;

    nav_sections.each(function() {
      var top = $(this).offset().top,
        bottom = top + $(this).outerHeight();

      if (cur_pos >= top && cur_pos <= bottom) {
        if (cur_pos <= bottom) {
          main_nav.find('li').removeClass('menu-active');
        }
        main_nav.find('a[href="#' + $(this).attr('id') + '"]').parent('li').addClass('menu-active');
      }
      if (cur_pos < 300) {
        $(".nav-menu li:first").removeClass('menu-active');
        $(".active").addClass("menu-active");
      }
    });
  });
</script>
@endsection