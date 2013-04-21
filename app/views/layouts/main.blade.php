<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>NASA Hearts|@yield("title")</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- @todo: fill with your company info or remove -->
        <meta name="description" content="">
        <meta name="author" content="Themelize.me">

        <!-- Bootstrap CSS -->
        <link href="{{URL::to('css/bootstrap.css')}}" rel="stylesheet">
        <link href="{{URL::to('css/responsive.css')}}" rel="stylesheet">

        <!-- Flexslider -->
        <link href="{{URL::to('css/flexslider.css')}}" rel="stylesheet">

        <!-- Theme style -->
        <link href="{{URL::to('css/theme-style.css')}}" rel="stylesheet">

        <!--Your custom colour override-->
        <!--<link href="#" id="colour-scheme" rel="stylesheet">-->
        <!--color-->
        <link href="{{URL::to('css/colour-red.css')}}" rel="stylesheet">
        <!-- Your custom override -->
        <link href="{{URL::to('css/custom-style.css')}}" rel="stylesheet">

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
              <script src="js/html5.js"></script>
            <![endif]-->
        @yield("headerstyles")

        <!-- Le fav and touch icons - @todo: fill with your icons or remove -->
        <link rel="shortcut icon" href="img/icons/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/icons/114x114.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/icons/72x72.png">
        <link rel="apple-touch-icon-precomposed" href="img/icons/default.png">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300|Rambla|Calligraffitti' rel='stylesheet' type='text/css'>
    </head>

    <body class="page page-index">
        <div id="navigation" class="wrapper">
            <div class="navbar  navbar-static-top"> 

                <!--Hidden Header Region-->


                <!--Header & Branding region-->
                <div class="header">
                    <div class="header-inner container">
                        <div class="row-fluid">
                            <div class="span6"> 
                                <!--branding/logo--> 
                                <a class="brand" href="index.htm" title="Home">
                                    <h1><span>Nasa</span> Hearts<span>.</span></h1>
                                </a>
                                <div class="slogan">Hearts </div>
                            </div>

                            <!--header rightside-->
                            <div class="span6">
                                <div id="header-hidden-link">  </div>

                                <!--social media icons-->
                                <div class="social-media pull-right"> 
                                    <!--@todo: replace with company social media details--> 
                                    <a href="#"><i class="icon-twitter"></i></a> <a href="#"><i class="icon-facebook"></i></a> <a href="#"><i class="icon-linkedin"></i></a> <a href="#"><i class="icon-google-plus"></i></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="navbar-inner"> 

                        <!--mobile collapse menu button--> 
                        <a class="btn btn-navbar pull-left" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> 
                        @if(!Auth::check())
                        <!--user menu-->
                        <ul class="nav user-menu pull-right">
                            <li><a href="sigProfilnup" class="btn btn-primary signup">Sign Up</a></li>
                            <li class="dropdown"> <a href="login" class="btn btn-primary dropdown-toggle login" id="login-drop" data-toggle="dropdown">Login</a>
                                <div class="dropdown-menu" role="menu" aria-labelledby="login-drop">

                                    <form action="/login" method='post' class="form-inline" id="login-form-drop" role="menuitem">
                                        <div class="input-append">
                                            <input class="input-small email" placeholder="Email" type="email">
                                            <input class="input-small password" placeholder="Password" type="password">
                                            <input class="btn btn-primary login" value="Login" type="submit">
                                        </div>
                                    </form>
                                    <span class="divider" role="menuitem"></span> <small role="menuitem">Not a member? <a href="#" class="signup">Sign up now!</a></small> <small role="menuitem"><a href="#">Forgotten password?</a></small> </div>
                            </li>
                        </ul>
                        @endif

                        <!--everything within this div is collapsed on mobile-->
                        <div class="nav-collapse collapse"> 

                            <!--main navigation-->
                            <ul class="nav" id="main-menu">
                                <li class="home-link"><a href="/"><i class="icon-home hidden-phone"></i><span class="visible-phone">Home</span></a></li>
                                <li class="dropdown"><a href="/feelings" class="dropdown-toggle menu-item" id="features-drop" data-toggle="dropdown">Feelings +</a> 
                                    <!-- Dropdown Menu -->
                                    <ul class="dropdown-menu mega-menu" role="menu" aria-labelledby="features-drop">
                                        <li class="mega-menu-wrapper" role="menuitem"> <span class="menu-title">Mega Menu with links &amp; text items</span>
                                            <ul class="row-fluid" role="menu">
                                                <li class="span4" role="menuitem"> <a href="feeling"><img src="img/features/feature-1.png" alt="Feature 1"></a> <a href="features" tabindex="-1" class="menu-item">Mobile Friendly</a> <span>Made using responsive mobile technology so that it scales between your desktop tablet and mobile phone  </span> </li>
                                                <li class="span4" role="menuitem"> <a href="feeling"><img src="img/features/feature-2.png" alt="Feature 2"></a> <a href="features" tabindex="-1" class="menu-item">Json Api </a> <span>In the spirit of sharing our data the data is available though our json api</span> </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                @if(Auth::check())
                                <li><a href="/users/{{Auth::user()->id}}" class="menu-item">Profile</a></li>
                                @endif

                                <li class="dropdown"> <a href="about.htm" class="dropdown-toggle" id="about-drop" data-toggle="dropdown">About +</a> 
                                    <!-- Dropdown Menu -->
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="about-drop">
                                        <li role="menuitem"><a href="about" tabindex="-1" class="menu-item">About Us</a></li>
                                        <li role="menuitem"><a href="team" tabindex="-1" class="menu-item">Our Team</a></li>
                                        <li role="menuitem"><a href="contact" tabindex="-1" class="menu-item">Contact</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"> <a href="blog" class="dropdown-toggle" id="blog-drop" data-toggle="dropdown">Blog +</a> 
                                    <!-- Dropdown Menu -->

                                </li>
                                <li class="dropdown"><a href="pages" class="dropdown-toggle" id="pages-drop" data-toggle="dropdown">More +</a> 
                                    <!-- Dropdown Menu -->
                                    <ul class="dropdown-menu pull-left" role="menu" aria-labelledby="pages-drop">
                                        <li role="menuitem"><a href="login" tabindex="-1" class="menu-item">Login</a></li>
                                        <li role="menuitem"><a href="signup" tabindex="-1" class="menu-item">Sign Up</a></li>
                                        <li role="menuitem"><a href="starter" tabindex="-1" class="menu-item">Starter Snippets</a></li>
                                        <li role="menuitem"><a href="index-static" tabindex="-1" class="menu-item">Homepage Static Banner</a></li>
                                        <li role="menuitem"><a href="fixed-header" tabindex="-1" class="menu-item">Fixed Header</a></li>
                                        <li role="menuitem"><a href="colours" tabindex="-1" class="menu-item">Theme Colours</a></li>
                                        <li role="menuitem"><a href="elements" tabindex="-1" class="menu-item">Theme Elements</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse --> 
                    </div>
                </div>
            </div>
        </div>



        @yield("slider")



        <div id="content">
            <div class="container"> 
                @yield("container")


            </div>
        </div>
        <div id="content-below" class="wrapper">
            <div class="container">
                <div class="row-fluid">
                    <div class="upsell"> <small class="muted">99.9% Uptime <span class="spacer">//</span> Free upgrade assistence <span class="spacer">//</span> 24/7 Support <span class="spacer">//</span> Plans from $19.99/month <span class="spacer">//</span> </small> <a href="pricing.htm" class="btn btn-primary">Start your Free Trial Today! <i class="icon-arrow-right"></i></a> </div>
                </div>
            </div>
        </div>

        <!-- FOOTER -->
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="span3 col">
                        <div class="block contact-block"> 
                            <!--@todo: replace with company contact details-->
                            <h3>Contact Us</h3>
                            <address>
                                <p><abbr title="Phone"><i class="icon-phone"></i></abbr> 019223 8092344</p>
                                <p><abbr title="Email"><i class="icon-envelope"></i></abbr> info@appstrap.me</p>
                                <p><abbr title="Address"><i class="icon-home"></i></abbr> Sunshine House, Sunville. SUN12 8LU.</p>
                            </address>
                        </div>
                    </div>
                    <div class="span5 col">
                        <div class="block">
                            <h3>About Us</h3>
                            <p>Making the web a prettier place one template at a time! We make beautiful, quality, responsive Drupal & web templates!</p>
                        </div>
                    </div>
                    <div class="span4 col">
                        <div class="block newsletter">

                            <!--@todo: replace with mailchimp code-->
                            <form class="form-inline">
                                <div class="input-append">
                                    <input class="input-medium" type="text" placeholder="Email" />
                                    <button class="btn btn-primary" type="button">Go!</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row-fluid">
                    <div id="toplink"><a href="#top" class="top-link" title="Back to top">Back To Top <i class="icon-chevron-up"></i></a></div>
                    <!--@todo: replace with company copyright details-->
                    <div class="subfooter">
                        <div class="span6">

                        </div>
                        <div class="span6">
                            <ul class="inline pull-right">
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!--Scripts --> 
        <script src="js/jquery.js"></script> 

        <!-- @todo: remove unused Javascript for better performance --> 
        <script src="{{URL::to('js/bootstrap-transition.js')}}"></script> 
        <script src="{{URL::to('js/bootstrap-alert.js')}}"></script> 
        <script src="{{URL::to('js/bootstrap-affix.js')}}"></script> 
        <script src="{{URL::to('js/bootstrap-modal.js')}}"></script> 
        <script src="{{URL::to('js/bootstrap-dropdown.js')}}"></script> 
        <script src="{{URL::to('js/bootstrap-scrollspy.js')}}"></script> 
        <script src="{{URL::to('js/bootstrap-tab.js')}}"></script> 
        <script src="{{URL::to('js/bootstrap-tooltip.js')}}"></script> 
        <script src="{{URL::to('js/bootstrap-popover.js')}}"></script> 
        <script src="{{URL::to('js/bootstrap-button.js')}}"></script> 
        <script src="{{URL::to('js/bootstrap-collapse.js')}}"></script> 
        <script src="{{URL::to('js/bootstrap-carousel.js')}}"></script> 
        <script src="{{URL::to('js/bootstrap-typeahead.js')}}"></script> 

        <!--Non-Bootstrap JS--> 
        <script src="{{URL::to('js/jquery.quicksand.js')}}"></script> 
        <script src="{{URL::to('js/jquery.flexslider-min.js')}}"></script> 

        <!--Custom scripts mainly used to trigger libraries --> 
        <script src="{{URL::to('js/script.js')}}"></script>

        @yield("footerjs")


    </body>
</html>