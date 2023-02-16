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
        <li class="menu-active"><a href="<?= url('/'); ?>">Home</a></li>
        <li><a href="<?= url('/About'); ?>">About</a> </li>
        <li><a href="#cal_shipment">Pricing</a></li>
        <li><a href="#how_it_works">How It Works</a></li>
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

  <section id="home">
    <div class="home-container" data-aos="zoom-in" data-aos-delay="100">
      <!-- <img src="assets/img/banner/slide-banner1.jpg" class="img-fluid">-->
      <div id="demo" class="carousel slide" data-ride="carousel"> 
        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul> 
        <!-- The slideshow -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/img/banner/slide-banner1.jpg" class="img-fluid" alt=" ">
          </div>
          <div class="carousel-item">
            <img src="assets/img/banner/slide-banner2.jpg" class="img-fluid" alt=" ">
          </div>
          <div class="carousel-item">
            <img src="assets/img/banner/slide-banner3.jpg" class="img-fluid" alt=" ">
          </div>
        </div> 
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a> 
      </div>
      <!-- End of Carousel -->
    <!--<div class="home-container" data-aos="zoom-in" data-aos-delay="100">
      <h1 class="mb-4 pb-0">The Annual<br><span>Marketing</span> Conference</h1>
      <p class="mb-4 pb-0">10-12 December, Downtown Conference Center, New York</p>
      <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
      <a href="#about" class="about-btn scrollto">About The Event</a>-->
    </div>
  </section><!-- End Intro Section -->

  <main id="main">

    <!-- ======= CALCULATE Section ======= -->
    <section id="cal_shipment">
      <div class="container">
        <div class="section-header section-header1">
          <h2>CALCULATE YOUR SHIPMENT</h2> 
        </div> 
        <div class="row">
          <div class="container">
            <div class="form">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="form-row">
                  <div class="form-group col-md-6 mb-4 pr-md-2">
                    <label for="calcDdwnCountry">Contry</label>
                    <select class="form-control" id="calcDdwnCountry" name="calcDdwnCountry">
                      <option value="">Select Country</option>
                      <option value="Åland Islands">Åland Islands</option>
                      <option value="American Samoa">American Samoa</option>
                      <option value="Andorra">Andorra</option>
                      <option value="Argentina">Argentina</option>
                      <option value="Australia">Australia</option>
                      <option value="Austria">Austria</option>
                      <option value="Azores">Azores</option>
                      <option value="Bahrain">Bahrain</option>
                      <option value="Bangladesh">Bangladesh</option>
                      <option value="Barbados">Barbados</option>
                      <option value="Belarus">Belarus</option>
                      <option value="Belgium">Belgium</option>
                      <option value="Bhutan">Bhutan</option>
                      <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                      <option value="Brunei Darussalam">Brunei Darussalam</option>
                      <option value="Bulgaria">Bulgaria</option>
                      <option value="Cambodia">Cambodia</option>
                      <option value="Canada">Canada</option>
                      <option value="Canary Island">Canary Island</option>
                      <option value="Chile">Chile</option>
                      <option value="China">China</option>
                      <option value="Colombia">Colombia</option>
                      <option value="Cook Islands">Cook Islands</option>
                      <option value="Costa Rica">Costa Rica</option>
                      <option value="Croatia">Croatia</option>
                      <option value="Cyprus">Cyprus</option>
                      <option value="Czech Republic">Czech Republic</option>
                      <option value="Denmark">Denmark</option>
                      <option value="Ecuador">Ecuador</option>
                      <option value="El Salvador">El Salvador</option>
                      <option value="England">England</option>
                      <option value="Estonia">Estonia</option>
                      <option value="Faroe Islands">Faroe Islands</option>
                      <option value="Fiji">Fiji</option>
                      <option value="Finland">Finland</option>
                      <option value="France">France</option>
                      <option value="French Polynesia">French Polynesia</option>
                      <option value="Georgia">Georgia</option>
                      <option value="Germany">Germany</option>
                      <option value="Gibraltar">Gibraltar</option>
                      <option value="Great Britain">Great Britain</option>
                      <option value="Greece">Greece</option>
                      <option value="Greenland">Greenland</option>
                      <option value="Guam">Guam</option>
                      <option value="Guatemala">Guatemala</option>
                      <option value="Guernsey">Guernsey</option>
                      <option value="Guyana">Guyana</option>
                      <option value="Haiti">Haiti</option>
                      <option value="Holland">Holland</option>
                      <option value="Honduras">Honduras</option>
                      <option value="Hong Kong">Hong Kong</option>
                      <option value="Hungary">Hungary</option>
                      <option value="Iceland">Iceland</option>
                      <option value="India">India</option>
                      <option value="Indonesia">Indonesia</option>
                      <option value="Ireland">Ireland</option>
                      <option value="Israel">Israel</option>
                      <option value="Italy">Italy</option>
                      <option value="Jamaica">Jamaica</option>
                      <option value="Japan">Japan</option>
                      <option value="Jersey">Jersey</option>
                      <option value="Kenya">Kenya</option>
                      <option value="Kiribati">Kiribati</option>
                      <option value="Kosovo">Kosovo</option>
                      <option value="Lao Peoples Democratic Republic">Lao Peoples Democratic Republic</option>
                      <option value="Latvia">Latvia</option>
                      <option value="Liechtenstein">Liechtenstein</option>
                      <option value="Lithuania">Lithuania</option>
                      <option value="Luxembourg">Luxembourg</option>
                      <option value="Macao">Macao</option>
                      <option value="Malaysia">Malaysia</option>
                      <option value="Malta">Malta</option>
                      <option value="Marshall Islands">Marshall Islands</option>
                      <option value="Mexico">Mexico</option>
                      <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                      <option value="Monaco">Monaco</option>
                      <option value="Mongolia">Mongolia</option>
                      <option value="Morocco">Morocco</option>
                      <option value="Netherlands">Netherlands</option>
                      <option value="New Caledonia">New Caledonia</option>
                      <option value="New Zealand">New Zealand</option>
                      <option value="Nigeria">Nigeria</option>
                      <option value="Norfolk Island">Norfolk Island</option>
                      <option value="Northern Ireland">Northern Ireland</option>
                      <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                      <option value="Norway">Norway</option>
                      <option value="Palau">Palau</option>
                      <option value="Papua New Guinea">Papua New Guinea</option>
                      <option value="Philippines">Philippines</option>
                      <option value="Poland">Poland</option>
                      <option value="Portugal">Portugal</option>
                      <option value="Puerto Rico">Puerto Rico</option>
                      <option value="Romania">Romania</option>
                      <option value="Rota">Rota</option>
                      <option value="Russia">Russia</option>
                      <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                      <option value="San Marino">San Marino</option>
                      <option value="Saudi Arabia">Saudi Arabia</option>
                      <option value="Scotland">Scotland</option>
                      <option value="Serbia">Serbia</option>
                      <option value="Singapore">Singapore</option>
                      <option value="Slovakia">Slovakia</option>
                      <option value="Slovenia">Slovenia</option>
                      <option value="Solomon Islands">Solomon Islands</option>
                      <option value="South Africa">South Africa</option>
                      <option value="South Korea">South Korea</option>
                      <option value="Spain">Spain</option>
                      <option value="St Croix">St Croix</option>
                      <option value="St. John">St. John</option>
                      <option value="St. Thomas">St. Thomas</option>
                      <option value="Suriname">Suriname</option>
                      <option value="Sweden">Sweden</option>
                      <option value="Switzerland">Switzerland</option>
                      <option value="Tahiti (French Polynesia)">Tahiti (French Polynesia)</option>
                      <option value="Taiwan">Taiwan</option>
                      <option value="Thailand">Thailand</option>
                      <option value="Timor-Leste">Timor-Leste</option>
                      <option value="Tinian">Tinian</option>
                      <option value="Tonga">Tonga</option>
                      <option value="Turkey">Turkey</option>
                      <option value="Tuvalu">Tuvalu</option>
                      <option value="United Arab Emirates">United Arab Emirates</option>
                      <option value="United Kingdom">United Kingdom</option>
                      <option value="Uruguay">Uruguay</option>
                      <option value="Vanuatu">Vanuatu</option>
                      <option value="Vatican City">Vatican City</option>
                      <option value="Vietnam">Vietnam</option>
                      <option value="Wales">Wales</option>
                      <option value="Wallis and Futuna">Wallis and Futuna</option>
                      <option value="Western Samoa">Western Samoa</option>
                    </select>
                    <div class="validate">error</div>
                  </div>
                  <div class="form-group col-md-6 mb-4 pl-md-2">
                    <label for="postal_code">Postal Code</label>
                    <input type="number" class="form-control" name="postal_code" id="postal_code" placeholder="Postal Code" data-rule="Postal Code" data-msg="Postal Code">
                    <div class="validate">error</div>
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-3 pr-md-2">
                    <label for="calcDdwnCountry">Package Count <span class="tooltip-icon"><i class="fa fa-question-circle"  data-toggle="tooltip" data-placement="top" data-title="The number of packages you expect to deliver to our warehouse will determine your handling charges.  Consolidating will not reduce your handling, only the shipping portion of your final rate (Premium only)." data-original-title="" title=""></i></span></label>
                    <select class="form-control">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      <option>6</option>
                      <option>7</option>
                      <option>8</option>
                      <option>9</option>
                      <option>10</option>
                    </select>
                    <div class="validate">error</div>
                  </div>
                  <div class="form-group col-md-6 pr-md-2 pl-md-2">
                    <label for="Dimensions">Dimensions </label>
                    <div class="borderinput clearfix"> 
                     <div class="form-row" id="multicols">
                      <div class="form-group col-xs-3 col-sm-3 col-md-3">
                        <div class="mfInput">
                          <input type="text" class="form-control txtLength" maxlength="4" id="txtLength" placeholder="Length" onkeypress="return CalcIsNumberKey(event,this);"> 
                        </div>
                        <span>X</span>
                        <div class="validate">error</div>
                      </div>
                      <div class="form-group col-xs-3 col-sm-3 col-md-3">
                        <div class="mfInput">
                          <input type="text" class="form-control txtWidth" maxlength="4" id="txtWidth" placeholder="Width" onkeypress="return CalcIsNumberKey(event,this);"> 
                        </div>
                        <span>X</span>
                        <div class="validate">error</div>
                      </div>
                      <div class="form-group col-xs-3 col-sm-3 col-md-3">
                        <div class="mfInput">
                          <input type="text" class="form-control txtLength" maxlength="4" id="txtLength" placeholder="Length" onkeypress="return CalcIsNumberKey(event,this);"> 
                        </div> 
                        <div class="validate">error</div>
                      </div>
                      <div class="form-group col-xs-3 col-sm-3 col-md-3">
                          <select class="form-control" id="dimsUnit">
                              <option>cm</option>
                              <option>inch</option>
                          </select>
                      </div> 
                     </div> 
                    </div> 
                  </div>
                  <div class="form-group col-md-3 pr-md-2 pl-md-2">
                    <label for="Dimensions">Actual Weight </label>
                    <div class="borderinput clearfix"> 
                     <div class="form-row" id="multicols">  
                      <div class="form-group col-xs-9 col-sm-9 col-md-9">
                        <div class="mfInput">
                          <input type="text" class="form-control txtLength" maxlength="4" id="txtLength" placeholder="Actual Weight" onkeypress="return CalcIsNumberKey(event,this);"> 
                        </div> 
                        <div class="validate">error</div>
                      </div>
                      <div class="form-group col-xs-3 col-sm-3 col-md-3">
                          <select class="form-control" id="dimsUnit">
                              <option>kg</option>
                              <option>ibs</option>
                          </select>
                      </div> 
                     </div>
                    </div>  
                  </div>
                </div>  
                 
                <div class="form-row text-center">
                  <div class="form-group col-md-12 mt-4 text-center add_another">
                    <h4><span class="plus"><img src="assets/img/plus.png" class="img-fluid"></span> Add Another Package</h4>
                  </div>
                </div> 

                <div class="form-row">
                  <div class="form-group col-md-7 mt-2 text-center add_another mx-auto">
                    <div class="form-row">
                      <div class="form-group col-md-6 text-center add_another pr-md-2 pl-md-2">
                        <input type="mail" class="form-control" name="email" id="email" placeholder="Enter Eail Address" >
                        <div class="validate">error</div>
                      </div> 
                      <div class="form-group col-md-6 text-center add_another pr-md-2 pl-md-2">
                        <button type="mail" class="form-control calculate"> CALCULATE </button>
                      </div>
                    </div>  
                  </div>
                </div>
 
              </form>
            </div>
          </div>  
        </div>
      </div> 
    </section><!-- End CALCULATE Section -->

    <!-- ======= why_choose_ppo Section ======= -->

    <section id="why_choose_ppo">
      <div class="container">
        <div class="section-header">
          <h2>Why Choose PPOBOX?</h2> 
        </div>
      </div>
    </section>    
    <section id="why_choose_ppo1">
      <div class="container" data-aos="zoom-in">
       
       <div class="row">
          <div class="col-md-10 mx-auto"> 
            <div class="row">
              <div class="col-sm-12 col-md-4 text-center mb-4">
                <div class="choose_box_top_logo">
                  <img src="assets/img/sainsburys.png" class="choose_logo">
                </div>
                <div class="choose_box1">
                  <img src="assets/img/shou_icon.png" class="choose_icon">
                  
                  <div class="choose_box_table">
                    <table align="left" class="" width="100%" style="padding:10px; color:#ffffff;"> 
                      <tr>
                        <td  align="left">Weight </td>
                        <td  align="left">1 Ibs</td> 
                      </tr>
                      <tr>
                        <td  align="left">Shipping Cost</td>
                        <td  align="left">$ 30</td> 
                      </tr> 
                    </table>
                  </div>  
                  <img src="assets/img/Choose_box_1.jpg" class="img-fluid">
                </div>

              </div>
              <div class="ccol-sm-12 col-md-4 text-center mb-4">
                <div class="choose_box_top_logo">
                  <img src="assets/img/Amazon_Logo.png" class="choose_logo">
                </div>  
                <div class="choose_box2">
                  <img src="assets/img/game_icon.png" class="choose_icon">
                  
                  <div class="choose_box_table">
                    <table align="left" class="" width="100%" style="padding:10px; color:#ffffff;"> 
                      <tr>
                        <td  align="left">Weight </td>
                        <td  align="left">2 Ibs</td> 
                      </tr>
                      <tr>
                        <td  align="left">Shipping Cost</td>
                        <td  align="left">$ 42</td> 
                      </tr> 
                    </table>
                  </div> 
                  <img src="assets/img/Choose_box_2.jpg" class="img-fluid">
                </div>
              </div>
              <div class="col-sm-12 col-md-4 text-center mb-4">
                <div class="choose_box_top_logo">
                  <img src="assets/img/Macys_logo.png" class="choose_logo">
                </div>  
                <div class="choose_box3">
                  <img src="assets/img/dress_icon.png" class="choose_icon"> 
                  <div class="choose_box_table">
                    <table align="left" class="" width="100%" style="padding:10px; color:#ffffff;"> 
                      <tr>
                        <td  align="left">Weight </td>
                        <td  align="left">1 kg</td> 
                      </tr>
                      <tr>
                        <td  align="left">Shipping Cost</td>
                        <td  align="left">$ 42</td> 
                      </tr> 
                    </table>
                  </div>  
                  <img src="assets/img/Choose_box_3.jpg" class="img-fluid">
                  
                </div>
              </div>
                

            </div>  
          </div>

          <div class="col-md-8 mx-auto"> 
            <h1 class="or_line">or</h1>
          </div>  

          <div class="col-md-10 mx-auto mt-4"  data-aos="fade-up"> 
            <img src="assets/img/ppo_bot.png" class="img-fluid">
          </div>  
        

      </div>
    </section><!-- End why_choose_ppo Section -->

    <!-- ======= how_it_works Section ======= -->
    <section id="how_it_works">
      <div class="container">
        <div class="section-header">
          <h2>How it Works?</h2> 
        </div>
        <div class="row" data-aos="fade-up">
          <div class="col-lg-4">
            <div class="step_box text-center">
              <div class="step">STEP 1</div>
              <img src="assets/img/step_box1.png" class="">
              <h3>GET A PPOBOX ADDRESS</h3>
              <p>Sign up with us and get yourPPOBOX Address quickly.</p>
              <div class="right-arrow"><img src="assets/img/right-arrow.png" class="img-fluid"></div>
              <div class="bottom-arrow"><img src="assets/img/bottom-arrow.png" class="img-fluid"></div>
            </div>  
          </div>
          <div class="col-lg-4">
            <div class="step_box text-center">
              <div class="step">STEP 2</div>
              <img src="assets/img/step_box1.png" class="">
              <h3>SHOP AT ANY GLOBAL STORE</h3>
              <p>Add PPOBOX Address at the checkout page. Your Order is delivered to us.</p>
              <div class="right-arrow"><img src="assets/img/right-arrow.png" class="img-fluid"></div>
              <div class="bottom-arrow"><img src="assets/img/bottom-arrow.png" class="img-fluid"></div>
            </div>
          </div>
          <div class="col-lg-4"> 
            <div class="step_box text-center">
              <div class="step">STEP 3</div>
              <img src="assets/img/step_box1.png" class="">
              <h3>DELIVERING TO YOU</h3>
              <p>We ship your order to your local address at affordable rates.</p>
            </div>
          </div>
          <div class="col-lg-12 text-center">
            <div class="learn_more">LEARN MORE</div>
          </div>  
        </div>
      </div>
    </section><!-- End how_it_works Section --> 

    <!-- ======= Schedule Section ======= -->
    <section id="categories" >
      <div class="container" data-aos="fade-up"> 
        <h3 class="sub-heading">Categories You can Ship To Your Address</h3> 

        <div class="row">
          <div class="col-6 col-sm-4 col-md-2 text-center mt-4 categories_box">
            <img src="assets/img/categories/Camera.png" class="categories_icon">
            <p>Camera</p>
          </div>  
          <div class="col-6 col-sm-4 col-md-2 text-center mt-4 categories_box">
            <img src="assets/img/categories/Tshirt.png" class="categories_icon">
            <p>Tshirt</p>
          </div>
          <div class="col-6 col-sm-4 col-md-2 text-center mt-4 categories_box">
            <img src="assets/img/categories/Sweater.png" class="categories_icon">
            <p>Sweater</p>
          </div>
          <div class="col-6 col-sm-4 col-md-2 text-center mt-4 categories_box">
            <img src="assets/img/categories/Trouser.png" class="categories_icon">
            <p>Trouser</p>
          </div>
          <div class="col-6 col-sm-4 col-md-2 text-center mt-4 categories_box">
            <img src="assets/img/categories/Shoes.png" class="categories_icon">
            <p>Shoes</p>
          </div>
          <div class="col-6 col-sm-4 col-md-2 text-center mt-4 categories_box">
            <img src="assets/img/categories/Wristwatch.png" class="categories_icon">
            <p>Wristwatch</p>
          </div>
        </div>  

        <div class="row">
          <div class="col-md-12 text-center">
            <div class="via_trusted">
              <a href="javascript:void(0);">  Via Trusted Shipping Partner </a>
            </div>
            <div class="icc_worldwide text-center">
              <img src="assets/img/icc_worldwide.png" class="">  
            </div>
        </div>  
      </div>  
    </section><!-- End Schedule Section -->
 
    <!-- ======= Reviews Section ======= -->
    <section id="reviews"> 
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>REVIEWS</h2> 
        </div>
      </div>
      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="container">
        <div class="owl-carousel reviews-carousel">
          <div data-gall="reviews-carousel">
            <div class="rivies_box">
              <img src="assets/img/reviews/1.jpg" alt=""> 
              <h3> Manish, Mumbai </h3>
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-full"></i>
              </div> 
              <p>It is one of the best freight forwarding service from USA.Now in India</p>  
            </div>
          </div>
          <div data-gall="reviews-carousel">
            <div class="rivies_box">
              <img src="assets/img/reviews/1.jpg" alt=""> 
              <h3>Manjeera, New Delhi</h3>
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-full"></i>
              </div> 
              <p>Thank you so much.I was very skeptic about the shipping charges, but you offer shipping at so economical rates.its ammazing. I am so pleased with you services. Thank you So much LOL</p>  
            </div>
          </div>
          <div data-gall="reviews-carousel">
            <div class="rivies_box">
              <img src="assets/img/reviews/1.jpg" alt=""> 
              <h3>Mastan, Chennai</h3>
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-full"></i>
              </div> 
              <p>I got a 30% discount for shipping 4 or more packages! Saved a ton of money!</p>  
            </div>
          </div>
          <div data-gall="reviews-carousel">
            <div class="rivies_box">
              <img src="assets/img/reviews/1.jpg" alt=""> 
              <h3> Manish, Mumbai </h3>
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-full"></i>
              </div> 
              <p>It is one of the best freight forwarding service from USA.Now in India</p>  
            </div>
          </div>
          <div data-gall="reviews-carousel">
            <div class="rivies_box">
              <img src="assets/img/reviews/1.jpg" alt=""> 
              <h3>Manjeera, New Delhi</h3>
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-full"></i>
              </div> 
              <p>Thank you so much.I was very skeptic about the shipping charges, but you offer shipping at so economical rates.its ammazing. I am so pleased with you services. Thank you So much LOL</p>  
            </div>
          </div>
          <div data-gall="reviews-carousel">
            <div class="rivies_box">
              <img src="assets/img/reviews/1.jpg" alt=""> 
              <h3>Mastan, Chennai</h3>
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-full"></i>
              </div> 
              <p>I got a 30% discount for shipping 4 or more packages! Saved a ton of money!</p>  
            </div>
          </div> 
        </div>
        </div>
      </div>   
    </section><!-- End Gallery Section -->
 
    
 

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
  @endsection