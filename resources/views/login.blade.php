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
        <li><a href="<?= url('/About'); ?>">About</a> </li>
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

    <!-- ======= login Details Sectionn ======= -->
     <section id="login_sec">
      <div class="container" data-aos="zoom-in"> 
       <div>
          <div class="wrap">
            <div class="login-box" >
              <div class="login-box-header">
                <div class="user-login-img">&nbsp;</div>
                <span>USER LOGIN</span>
              </div>
              <div class="login-form">
                <form action=" " method="post" accept-charset="utf-8">            
                  <input type="text" placeholder="User Name" name="users_email" autofocus="">
                  <input type="password" placeholder="Password" name="users_password">
                  <img alt="Captcha" style="width: 60%;height: auto;" class="text3 pull-left" src="https://www.ppobox.com/assets/includes/captcha/captcha.php">
                  <input name="Captcha" class="text1" type="text" placeholder="Please type the letters you see">
                  <input type="checkbox" id="Remember" checked="checked">
                  <label for="Remember" class="color-hotpink">Remember</label>
                  <span style="float:right"><a href="https://www.ppobox.com/signup/forgot_password">Forgot Password?</a></span>
                  <div class="clear"></div>
                  <button class="button login-btn"><span>LOGIN</span></button>
                </form> 
              </div>
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