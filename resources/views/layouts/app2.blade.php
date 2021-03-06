<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta property="og:url" content="http://www.oscgeeks.org" />
    <meta property="og:image" content="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Minified%20Images/navbar/logo-osc.png?raw=true" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to OSC</title>
    <!-- Title Icon-->
    <link rel="shortcut icon" href="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Minified%20Images/navbar/logo-osc.png?raw=true">
    <!-- Start Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/font-awesome/css/font-awesome.css') }}">
    <!--End Fonts -->
    <!--Start Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/Form.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/hover-min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/normalize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/layout/header.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/layout/footer.css') }}"> 
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/layout/nav.css') }}">@yield('CSS')
<!--End Styles -->
    <!--Start Scripts -->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery.menu-aim.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/html5shiv.min.js') }}"></script>
    <script src="{{ asset('js/npm.js') }}"></script>
    <script src="{{ asset('js/respond.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/Custom.js') }}"></script>
    <script>new WOW().init();</script> @yield('JS')
<!--End Scripts -->
<!--  spiciale   -->
</head>

<body>
<!--  start Navbar  -->
<div class="navbar navbar-default ">
    <div class="container-fluid">
        <!--navbar logos-->
        <div class="row"><img class=" logo  col-md-1 col-xs-3" src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Minified%20Images/navbar/logo-osc.png?raw=true"> 
            <img class=" osc col-md-4 col-xs-6   " src="https://raw.githubusercontent.com/Open-Source-Community/oscgeeks.orgImages/master/Minified%20Images/navbar/osc-log.png?raw=true"></div>
        <!--<div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span
                        class="sr-only">toggle navigation</span> <span class="icon-bar"></span> <span
                        class="icon-bar"></span> <span class="icon-bar"></span></button>
            <!--<a class="navbar-brand" href="a">OSC</a>-->
        <div class="row">
            <div class="nav hidden-xs hidden-sm  col-md-12 col-lg-12">
                <ul class="navigation col-md-9 col-lg-9">
                    <li><a href="/"><i class="fa fa-home" style="font-size: 20px"></i> <b>Home</b></a></li>
                    <li>|</li>
                    <li class="dropdown" style="padding: 0px">
                            
                        <button class="dropbtn"><b>Committees</b> <i class="fa fa-arrow-down" style="font-size: 9px"></i></button>
                          <div class="dropdown-content">
                            <a href="/Linux">Linux Committee</a>
                            <a href="/Blender">Blender Committee</a>
                            <a href="/English Heroes">English Heroes Committee</a>
                            <a href="/Content Creators">Content Creators Committee</a>
                            <a href="/Artwork">Artwork Committee</a>  
                            <a href="/Projects">Projects Committee</a>  
                            <a href="/Web">Web Committee</a>
                            <a href="/Public Relations">Public Relations Committee</a>  
                            <a href="/Human Resources">Human Resources Committee</a>  
                            <a href="/Fundraising">Fundraising Committee</a>  
                            <a href="/Logistics">Logistics Committee</a>  
                          </div>
                            
                    </li>
                    <li>|</li>
                    <li class="dropdown" style="padding: 0px">
                        
                      <button class="dropbtn"><b>Workshops</b> <i class="fa fa-arrow-down" style="font-size: 10px"></i></button>
                        <div class="dropdown-content">
                            <a href="/Linux Workshop">Linux Workshop</a>
                            <a href="/Blender Workshop">Blender Workshop</a>
                            <a href="/Laravel">Laravel Workshop</a>
                        </div>
                    </li>
                    <li>|</li>
                    <li><a href="/events"><b>Events</b></a></li>
                    <li>|</li>
                    <li><a href="/about"><b>About Us</b></a></li>
                    <li>|</li>
                    <li><a href="/workShop2017"><b>Workshop Registration</b></a></li>
                </ul>
                
                <div class="contact_us col-md-3 col-lg-3">
                    <div class="dropdown">
                      <button class="dropbtn" onclick="window.location='/Companies'" style="font-size: 12px"><b>Previous Sponsors</b></button>
                    </div>
                    <div class="dropdown">
                      <button class="dropbtn" style="font-size: 12px"><b>Contact Us</b> <i class="fa fa-arrow-down" ></i></button>
                      <div class="dropdown-content" style="right: -40px">
                        <a href="mailto:President.of.OSC@gmail.com">President Of OSC</a>
                        <a href="mailto:oschrs@gmail.com">Hrs Of OSC</a>
                      </div>
                    </div>
                </div>
            </div>
            
            
            
            
            <!-- NavBar For Small Screen -->
            
                <p class="fa fa-bars"></p>
            
                <div class="menu" style="display: none;margin-top:70px">
                    <div class="nav small_nav hidden-md hidden-lg col-xs-6 col-xs-6"> 

                    <ul class="navigation">
                        <li><a href="/"><i class="fa fa-home"></i> <b>Home</b></a></li>
                        <li class="dropdown">

                            <b>Committees</b> <i class="fa fa-arrow-down" style="font-size: 10px"></i>
                              <div class="dropdown-content">
                                <a href="/Linux">Linux Committee</a>
                                <a href="/Blender">Blender Committee</a>
                                <a href="/English Heroes">English Heroes Committee</a>
                                <a href="/Content Creators">Content Creators Committee</a>
                                <a href="/Artwork">Artwork Committee</a>  
                                <a href="/Projects">Projects Committee</a>  
                                <a href="/Web">Web Committee</a>
                                <a href="/Public Relations">Public Relations Committee</a>  
                                <a href="/Human Resources">Human Resources Committee</a>  
                                <a href="/Fundraising">Fundraising Committee</a>  
                                <a href="/Logistics">Logistics Committee</a>  
                              </div>

                        </li>
                        <li class="dropdown" style="padding: 0px">

                          <b>Workshops</b> <i class="fa fa-arrow-down" style="font-size: 10px"></i>
                            <div class="dropdown-content">
                                <a href="/Linux Workshop">Linux Workshop</a>
                                <a href="/Blender Workshop">Blender Workshop</a>
                                <a href="/Laravel">Laravel Workshop</a>
                            </div>
                        </li>
                        <li><a href="/events"><b>Events</b></a></li>
                        <li style="padding: 0"><a href="/about"><b>About Us</b></a></li>
                        <li><a href="/workShop2017"><b>Workshop Registration</b></a></li>
                    </ul>

                </div>
                
                <div class="contact_us hidden-md hidden-lg col-xs-6 col-sm-6">
                    <div class="dropdown col-xs-12 col-sm-12">
                      <button class="dropbtn" onclick="window.location='/Companies'"><b>Previous Sponsors</b></button>
                    </div>
                
                    <div class="dropdown col-xs-12 col-sm-12">
                          <button class="dropbtn"><b>Contact Us</b> <i class="fa fa-arrow-down" style="font-size: 10px"></i></button>
                          <div class="dropdown-content contact">
                           <a href="mailto:President.of.OSC@gmail.com">President Of OSC</a>
                           <a href="mailto:oschrs@gmail.com">Hrs Of OSC</a>
                          </div>
                    </div>
                </div>
            
            </div>
                </div>
            
            
            <!-- NavBar For Small Screen -->
            
        </div>
       </div>
       @yield('content')
<!--start footer-->
<div class="footer">
    <div class="row">
        <center>
            <div class="col-xs-12">OSC &copy; 2017</div>
            <br><br>
            
            <a target="_blank" href="https://www.facebook.com/oscgeeks/" id="" class="splings_link"><i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i></a>
            <span>&nbsp;&nbsp;</span>
            <a target="_blank" href="https://twitter.com/oscgeeks" id="" class="splings_link"><i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i></a>   
            <span>&nbsp;&nbsp;</span>
            <a target="_blank" href="https://www.instagram.com/oscgeeks/" id="" class="splings_link"><i class="fa fa-instagram fa-3x" aria-hidden="true"></i></a>
        </center>
    </div>
</div>
<!--End footer-->
<!-- jquery File and MY Js -->
<!-- Latest compiled and minified JavaScript -->
    
    <script>
        
        $(document).ready(function(){
           
            $(".fa-bars").click(function(){
                
               $(".menu").slideToggle(); 
                
            });
            
            
        });
    
    </script>  

</body>

</html>