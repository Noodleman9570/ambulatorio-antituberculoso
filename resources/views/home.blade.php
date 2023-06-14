
<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="Your name">
<meta name = "format-detection" content = "telephone=no" />
<!--CSS-->
<link rel="stylesheet" href="../css/bootstrap.css" >
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ Request::root() }}/css/animate.css">
<link rel="stylesheet" href="{{ Request::root() }}/css/camera.css">
<link rel="stylesheet" href="{{ Request::root() }}/css/contact-form.css">
<link rel="stylesheet" href="{{ Request::root() }}/fonts/font-awesome.css">
<!--JS-->
<script src="{{ Request::root() }}/js/jquery.js"></script>
<script src="{{ Request::root() }}/js/jquery-migrate-1.2.1.min.js"></script>
<script src="{{ Request::root() }}/js/jquery.easing.1.3.js"></script>
<script src="{{ Request::root() }}/s/jquery.mobilemenu.js"></script>
<script src="{{ Request::root() }}/js/jquery.equalheights.js"></script> 
<script src="{{ Request::root() }}/js/camera.js"></script>
<script src="{{ Request::root() }}/js/TMForm.js"></script>
<script src="{{ Request::root() }}/js/modal.js"></script>  
<script src="{{ Request::root() }}/js/bootstrap-filestyle.js"></script> 

<script>
    $(document).ready(function(){
        jQuery('.camera_wrap').camera();
    });
</script>
<!--[if (gt IE 9)|!(IE)]><!-->
<script src="{{ Request::root() }}/js/wow/wow.js"></script>
<script src="{{ Request::root() }}/js/wow/device.min.js"></script>
<script src="{{ Request::root() }}/js/jquery.mobile.customized.min.js"></script>
<script>
    $(document).ready(function () {       
      if ($('html').hasClass('desktop')) {
        new WOW().init();
      }   
    });
</script>
<!--<![endif]-->

<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>

    <div id="ie6-alert" style="width: 100%; text-align:center;">
    <img src="http://beatie6.frontcube.com/images/ie6.jpg" alt="Upgrade IE 6" width="640" height="344" border="0" usemap="#Map" longdesc="http://die6.frontcube.com" />
      <map name="Map" id="Map"><area shape="rect" coords="496,201,604,329" href="http://www.microsoft.com/windows/internet-explorer/default.aspx" target="_blank" alt="Download Interent Explorer" /><area shape="rect" coords="380,201,488,329" href="http://www.apple.com/safari/download/" target="_blank" alt="Download Apple Safari" /><area shape="rect" coords="268,202,376,330" href="http://www.opera.com/download/" target="_blank" alt="Download Opera" /><area shape="rect" coords="155,202,263,330" href="http://www.mozilla.com/" target="_blank" alt="Download Firefox" />
        <area shape="rect" coords="35,201,143,329" href="http://www.google.com/chrome" target="_blank" alt="Download Google Chrome" />
      </map>
  </div>
  <![endif]-->
</head>
<body>
<!--header-->
<header class="clearfix">
    <div class="container">
        <h1 class="navbar-brand navbar-brand_"><a href="index.html"><img src="../img/logo.png" alt="logo"></a></h1>
        <div class="box1 clearfix">
            <div class="box2 clearfix">
                <img src="img/call_girl.png" alt="">
                <p>Contacta a éste número telefónico <br> por si estás teniendo problemas <span>+58 414 371 9797</span></p>
            </div>
        </div>
    </div>



    <nav class="navbar navbar-default navbar-static-top tm_navbar clearfix" role="navigation">
        <div class="container">
            <ul class="nav sf-menu clearfix">
                <li class="active"><a href="index.html">Inicio</a></li>
                <li class="sub-menu"><a href="index-1.html">Sobre la página</a><span></span>
                    <ul class="submenu">
        				<li><a href="#">history</a></li>
        				<li><a href="#">news</a><span class="fa fa-angle-right"></span>
                            <ul class="submenu">
                                <li><a href="#">latest</a></li>
                                <li><a href="#">archive</a></li>
                              </ul> 
                        </li>
        				<li><a href="#">testimonials</a></li>
        			</ul>
                </li>
                <li><a href="index-2.html">services</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Registrarse</a></li>
            </ul>
            <form id="search" class="search" action="search.php" method="GET" accept-charset="utf-8">
                <input type="text" name="s" value="" onfocus="if (this.value == '') {this.value=''}" onblur="if (this.value == '') {this.value=''}">
                <a href="#" onClick="document.getElementById('search').submit()"><img src="img/magnify.png" alt=""></a>
            </form><br>
            <ul class="follow_icon">
                <li><a href="#" class="fa fa-facebook"></a></li>
                <li><a href="#" class="fa fa-google-plus"></a></li>
                <li><a href="#" class="fa fa-rss"></a></li>
                <li><a href="#" class="fa fa-pinterest"></a></li>
                <li><a href="#" class="fa fa-linkedin"></a></li>
            </ul>
        </div>
    </nav>
</header>
<div class="slider">  
    <div class="camera_wrap">
        <div data-src="img/picture1.jpg"><div class="camera-caption fadeIn"><p class="title">Treating the full spectrum<br>of ear and hearing disorders</p></div></div>
        <div data-src="img/picture2.jpg"><div class="camera-caption fadeIn"><p class="title">we will reopen<br>the world of sounds for you!</p></div></div>
        <div data-src="img/picture3.jpg"><div class="camera-caption fadeIn"><p class="title">helping with all types<br>of hearing problems</p></div></div>
    </div>
</div>
<!--content-->
<div class="content"> 
    <div class="thumb-box1">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 wow fadeInUp">
                    <p class="title">Helping you hear better </p>
                    <p>We have earned a reputation for being able to provide patients with nearly all types of hearing loss instruments and services at a reasonable price. If you don't find the exact hearing loss product that you are looking for, let us know and we will do everything that we can to satisfy your needs.</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.2s">
                    <a href="#" class="btn-default btn1">More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="thumb-box2">
        <div class="container">
            <p class="title wow fadeInLeft">Our professional advice</p>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp">
                    <div class="thumb-pad1">
                        <div class="thumbnail">
                            <strong><img src="img/page1_icon1.png" alt=""></strong>
                            <div class="caption">
                                <p class="description">reprehenderit in voluptate</p>
                                <p>Dolor sit amet, consectetur adipisicing elit sed dobe eiusmod tempor incididuntut labore et dolore magna aliquautenim massa ipsum.</p>
                                <a href="#" class="btn-default btn2">read more <i></i></a>
                            </div>  
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="thumb-pad1">
                        <div class="thumbnail">
                            <strong><img src="img/page1_icon1.png" alt=""></strong>
                            <div class="caption">
                                <p class="description">labore et dolore magna</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed dobe eiusmod tempor incidut labore et dolore magna aliquautenad minim veniam, quis nostrud.</p>
                                <a href="#" class="btn-default btn2">read more <i></i></a>
                            </div>  
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="thumb-pad1">
                        <div class="thumbnail">
                            <strong><img src="img/page1_icon1.png" alt=""></strong>
                            <div class="caption">
                                <p class="description">Duis aute irure dolor</p>
                                <p>Epsum dolor sit amet, consectetur adipisicing elit sed ut labore et dolore magna aliquautenim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.</p>
                                <a href="#" class="btn-default btn2">read more <i></i></a>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <div class="thumb-box3">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="thumb-pad2 maxheight">
                        <div class="thumbnail">
                            <figure><img src="img/page1_pic1.jpg" alt=""></figure>
                            <div class="caption">
                                <p class="title">lorem ipsum</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                <a href="#"><img src="img/more_arrow1.png" alt=""></a>
                            </div>  
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="thumb-pad2 maxheight">
                        <div class="thumbnail">
                            <figure><img src="img/page1_pic2.jpg" alt=""></figure>
                            <div class="caption">
                                <p class="title">consequatur</p>
                                <p>Massa dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore est. </p>
                                <a href="#"><img src="img/more_arrow1.png" alt=""></a>
                            </div>  
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInLeft">
                    <div class="thumb-pad2 maxheight">
                        <div class="thumbnail">
                            <figure><img src="img/page1_pic3.jpg" alt=""></figure>
                            <div class="caption">
                                <p class="title">laboriosam</p>
                                <p>Ed dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut </p>
                                <a href="#"><img src="img/more_arrow1.png" alt=""></a>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>
    <div class="thumb-box4">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-6 wow fadeInUp">
                    <p class="title"><img src="img/title_icon1.png" alt="">Our Mission</p>
                    <h3>Quis autem vel eum iure reprehenderit</h3>
                    <p>Dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris  ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
                    <a href="#" class="btn-default btn2">read more <i></i></a>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-6 col-lg-offset-1 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="title"><img src="img/title_icon2.png" alt="">consultation</p>
                    <h3>Ut enim ad minim veniam</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                    <a href="#" class="btn-default btn2">read more <i></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="thumb-box5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 wow fadeInUp">
                    <p class="title">Hearing loss prevention</p>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum.</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="#" class="btn-default btn1">More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="thumb-box6">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 wow fadeInUp" data-wow-delay="0.2s">
                    <figure><a href="#"><img src="img/page1_logo1.png" alt=""></a></figure>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 wow fadeInUp" data-wow-delay="0.3s">
                    <figure><a href="#"><img src="img/page1_logo2.png" alt=""></a></figure>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 wow fadeInUp" data-wow-delay="0.4s">
                    <figure><a href="#"><img src="img/page1_logo3.png" alt=""></a></figure>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 wow fadeInUp" data-wow-delay="0.5s">
                    <figure><a href="#"><img src="img/page1_logo4.png" alt=""></a></figure>
                </div>
            </div>
        </div>
    </div>
    <div class="thumb-box7">
        <div class="container">
            <p class="title wow fadeInLeft">quick Contact</p>
            <div class="contactForm2">
                <form id="contact-form">
                      <div class="contact-form-loader"></div>
                      <div class="row">
                          <fieldset>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <label class="message form-div-4">
                                  <textarea name="message" placeholder="Your Message"></textarea>
                                  <span class="empty-message">*This field is required.</span>
                                  <span class="error-message">*The message is too short.</span>
                                </label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="box">
                                    <label class="name form-div-1">
                                      <input type="text" name="name" placeholder="Your Name" value="" />
                                      <span class="empty-message">*This field is required.</span>
                                      <span class="error-message">*This is not a valid name.</span>
                                    </label>
                                    <label class="email form-div-2">
                                      <input type="text" name="email" placeholder="Your Email" value=""/>
                                      <span class="empty-message">*This field is required.</span>
                                      <span class="error-message">*This is not a valid email.</span>
                                    </label>
                                    <div class="btns">
                                        <a href="#" data-type="submit" class="btn-default btn3">Submit the form</a>
                                    </div>
                                </div>
                            </div>
                          </fieldset> 
                      </div>
                      <div class="modal fade response-message">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title">Modal title</h4>
                            </div>
                            <div class="modal-body">
                              You message has been sent! We will be in touch soon.
                            </div>      
                          </div>
                        </div>
                      </div>
                </form>
            </div>
        </div>
    </div>
    <div class="thumb-box8">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp">
                    <div class="thumb-pad3-1">
                        <div class="thumbnail">
                            <div class="box clearfix">
                                <div>
                                    <strong>23</strong>
                                    <span>august</span>
                                </div>
                                <hr>
                                <a href="#">Ut enim ad minim veniamquis nostrud ullamco reprehenderit in volup.</a>
                            </div>
                            <div class="caption">
                                <p>Tempore, cum soluta nobis est eligendi opticumque nihil impedit quo minus id quod maxime placeat facerepossimus, omnis voluptas assumenda est omnidolor repellendusemporibus...</p>
                            </div> 
                            <a href="#" class="btn-default btn2">read more <i></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="thumb-pad3-1">
                        <div class="thumbnail">
                            <div class="box clearfix">
                                <div>
                                    <strong>14</strong>
                                    <span>august</span>
                                </div>
                                <hr>
                                <a href="#">Massa ad minim veniamquis nostrud exercitation estullamco.</a>
                            </div>
                            <div class="caption">
                                <p>Nam libero tempore, cum soluta nobis est eligendi opticumque nihil impedit quo minus id quod maxime placeat facerepossimus, omnis voluptas assumenda est omnisdolor repellendus...</p>
                            </div> 
                            <a href="#" class="btn-default btn2">read more <i></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 logo-box wow fadeInUp" data-wow-delay="0.2s">
                    <figure><a href="#"><img src="img/logo2.png" alt=""></a></figure>
                    <p>9870 St Vincent Place,<br>Glasgow, DC 45 Fr 45.<br><a href="#">contact@demolink.org</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--footer-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 indent maxheight2 wow fadeInUp">
                <p class="title">copyright</p>
                <p class="prev">&copy; <em id="copyright-year"></em> <a href="index-5.html">Privacy Policy</a></p>
                <ul class="follow_icon2">
                    <li><a href="#" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-google-plus"></a></li>
                    <li><a href="#" class="fa fa-rss"></a></li>
                    <li><a href="#" class="fa fa-pinterest"></a></li>
                    <li><a href="#" class="fa fa-linkedin"></a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 maxheight2 wow fadeInUp" data-wow-delay="0.1s">
                <p class="title">Important Links</p>
                <ul class="list1">
                    <li><a href="#">Affiliate Program</a></li>
                    <li><a href="#">Special Promotions</a></li>
                    <li><a href="#">Newsletter</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 maxheight2 wow fadeInUp" data-wow-delay="0.2s">
                <p class="title">Support Menu</p>
                <ul class="list1">
                    <li><a href="#">Lost Password?</a></li>
                    <li><a href="#">Forgot your Username?</a></li>
                    <li><a href="#">Your Membership</a></li>
                    <li><a href="#">Your Account</a></li>
                    <li><a href="#">Support Forum</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 maxheight2 wow fadeInUp" data-wow-delay="0.3s">
                <p class="title">About Us</p>
                <ul class="list1">
                    <li><a href="#">Customer focus</a></li>
                    <li><a href="#">Performance</a></li>
                    <li><a href="#">Innovation</a></li>
                    <li><a href="#">Responsibility</a></li>
                </ul>
            </div>
        </div>
    </div>
  <!-- {%FOOTER_LINK} -->
</footer>
<script src="{{ Request::root() }}/js/bootstrap.min.js"></script>
<script src="{{ Request::root() }}/js/tm-scripts.js"></script>
</body>
</html>