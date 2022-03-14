<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport"/>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts-->
    <link href="https://fonts.googleapis.com/css2?family={{ urlencode(theme_option('font_heading', 'Jost')) }}:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family={{ urlencode(theme_option('font_body', 'Muli')) }}:300,400,600,700" rel="stylesheet" type="text/css">
    <!-- CSS Library-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        :root {
            --primary-color: {{ theme_option('primary_color', '#2b4db9') }};
            --font-body: {{ theme_option('font_body', 'Muli') }}, sans-serif;
            --font-heading: {{ theme_option('font_heading', 'Jost') }}, sans-serif;
        }

      
    </style>
    <script>
function myFunction() {
  var x = document.getElementById("Demo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>
    <script>
          function showHover(e){
    var boundingRect = e.getBoundingClientRect();
    var top = boundingRect.top;
    var bottom = boundingRect.bottom;
    var left = boundingRect.left;
    var right = boundingRect.right;
  
    console.log('viewportWidth: ' + window.visualViewport.width)
    console.log('viewportHeight: ' + window.visualViewport.height)
    console.log('mouseX: ' + e.onmouseover.arguments[0].clientX)
    console.log('MouseY:' + e.onmouseover.arguments[0].clientY)

    var mouseXCoords = e.onmouseover.arguments[0].clientX;
    var mouseYCoords = e.onmouseover.arguments[0].clientY;
    var hoverMenu = document.getElementById('hoverMenu');
 
    
    //calculate x draw room
    var drawX = false;
    if(window.visualViewport.width - mouseXCoords >= 300){
      hoverMenu.style.left = mouseXCoords+'px';
      drawX = true;
    }
    else if(mouseXCoords >= 300){
      hoverMenu.style.left = ( mouseXCoords - 300 )+'px';
      drawX = true
    }
    else {
      drawX = false
    }
    
    //calculate y draw room
    var drawY = false;
    if(window.visualViewport.height - mouseYCoords >= 300){
      hoverMenu.style.top = mouseYCoords+'px';
      var drawY = true;
    }
    else if(mouseYCoords >= 300){
      hoverMenu.style.top = ( mouseYCoords - 300 )+'px';
      var drawY = true;
    }
    //if there is space on this viewport but any cursor point position does not allow any room it wont draw. You will need to guess the best renderable area to draw the rect. I gave up due to time contraints. But the else if statement should go here when you want to fix this problem. Use the target div as the allowed renderable area x and y (left and top) to start from. if it's outside of this area then dont draw as you are no longer hovering.  
    else {  
      var drawY = false;
    }
    if(drawX && drawY){
      hoverMenu.style.position = "absolute";
      hoverMenu.style.display = 'block';    
    }
}

function hideHover(e){
  document.getElementById('hoverMenu').style.display = 'none';
}


    </script>
    <script>
        "use strict";
        window.trans = {
            "Price": "{{ __('Price') }}",
            "Number of rooms": "{{ __('Number of rooms') }}",
            "Number of rest rooms": "{{ __('Number of rest rooms') }}",
            "Square": "{{ __('Square') }}",
            "No property found": "{{ __('No property found') }}",
            "million": "{{ __('million') }}",
            "billion": "{{ __('billion') }}",
            "in": "{{ __('in') }}",
            "Added to wishlist successfully!": "{{ __('Added to wishlist successfully!') }}",
            "Removed from wishlist successfully!": "{{ __('Removed from wishlist successfully!') }}",
            "I care about this property!!!": "{{ __('I care about this property!!!') }}",
            "See More Reviews": "{{ __('See More Reviews') }}",
            "Reviews": "{{ __('Reviews') }}",
            "out of 5.0": "{{ __('out of 5.0') }}",
            "service": "{{ trans('plugins/real-estate::review.service') }}",
            "value": "{{ trans('plugins/real-estate::review.value') }}",
            "location": "{{ trans('plugins/real-estate::review.location') }}",
            "cleanliness": "{{ trans('plugins/real-estate::review.cleanliness') }}",
        }
        window.themeUrl = '{{ Theme::asset()->url('') }}';
        window.siteUrl = '{{ url('') }}';
        window.currentLanguage = '{{ App::getLocale() }}';
    </script>
  

    {!! Theme::header() !!}
</head>
<body class="{{ theme_option('skin', 'blue') }}" @if (BaseHelper::siteLanguageDirection() == 'rtl') dir="rtl" @endif>
<div id="alert-container"></div>

@if (theme_option('preloader_enabled', 'no') == 'yes')
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div id="preloader"><div class="preloader"><span></span><span></span></div></div>
@endif

<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">

    <!-- ============================================================== -->
    <!-- Top header  -->

    <div class="topbar bg-brand  d-none d-sm-block">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <nav id="navigation" class="navigation navigation-landscape">
                    <div class="nav-header">
                        @if (theme_option('logo'))
                            <a class="nav-brand" href="{{ route('public.index') }}"><img class="logo" src="{{ RvMedia::getImageUrl(theme_option('logo')) }}" alt="{{ setting('site_title') }}"></a>
                        @endif
                        
                    </div>
                </nav>

                 @if (is_plugin_active('real-estate'))
                    <div class="topbar-right d-flex align-items-center" >
                        <div class="topbar-wishlist" style="display:none;">
                            <a class="text-white" href="{{ route('public.wishlist') }}"><i class="fas fa-heart"></i> {{ __('Wishlist') }}(<span class="wishlist-count">0</span>)</a>
                        </div>
                        @php $currencies = get_all_currencies(); @endphp
                        @if (count($currencies) > 1)
                            <div class="choose-currency ms-3 text-white" style="display:none;">
                                <span>{{ __('Currency') }}: </span>
                                @foreach ($currencies as $currency)
                                    <a href="{{ route('public.change-currency', $currency->title) }}" @if (get_application_currency_id() == $currency->id) class="active" @endif><span>{{ $currency->title }}</span></a>&nbsp;
                                @endforeach
                            </div>
                        @endif

                        <div>
                       
                       <a href="tel:+91-9876 543 210" class="animated-button1">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <i class="fa fa-phone" style="color:#BA0000"></i>  Raj Yadav-8806170989    </a>
                      
                        </div>
                    </div>
                @endif 


                
            </div>
        </div>
    </div>
    <!-- ============================================================== -->

    

    <!-- Start Navigation -->
    <div class="header header-light head-shadow lg-device">
        <div class="container">
            <nav id="navigation" class="navigation navigation-landscape">
                <div class="nav-header" style="display:none;">
                    @if (theme_option('logo'))
                        <a class="nav-brand" href="{{ route('public.index') }}">
                        <img class="logo" src="{{ RvMedia::getImageUrl(theme_option('logo')) }}" alt="{{ setting('site_title') }}"></a>
                    @endif
                 
                </div>
                <div>
                    <div class="dropdown">
                        <a  href="/home" class="dropbtn">Home</a>  
                    </div>
                    <div class="dropdown">
                        <a  href="/about-us" class="dropbtn">About Us</a>  
                    </div>
                    <div class="dropdown">
                        <a href="services" class="dropbtn">Services</a>
                        <div class="dropdown-content">
                            <a href="/advisory-services">Advisory</a>
                            <a href="/transaction-management">Transaction Management</a>
                            <a href="/tenant-representation">Tenant Representation</a>
                            <a href="/interior-design">Interior Design</a>
                            
                        </div>
                    </div> 
                   
                    <div class="dropdown">
                        <a  href="/find-properties" class="dropbtn">Find Properties</a>  
                    </div>
                    <div class="dropdown">
                        <a  href="/news" class="dropbtn">Blog</a>  
                    </div>
                    <div class="dropdown">
                        <a  href="/contact" class="dropbtn">Contact</a>  
                    </div>
                </div>
              
                <div class="nav-menus-wrapper" style="transition-property: none;display: none;">
                    {!! Menu::renderMenuLocation('main-menu', [
                        'view'    => 'menu',
                        'options' => ['class' => 'nav-menu'],
                    ]) !!}

                    @if (is_plugin_active('real-estate'))
                        <ul class="nav-menu nav-menu-social align-to-right"  style="display:none;">
                            <li>
                                <a href="{{ route('public.account.properties.create') }}" class="text-success"><img src="{{ Theme::asset()->url('') }}/img/submit.svg" width="20" alt="" class="mr-2" /> {{ __('Add Property') }}</a>
                            </li>
                            @if (auth('account')->check())
                                <li class="login-item"><a href="{{ route('public.account.dashboard') }}" rel="nofollow"><i class="fas fa-user"></i> <span>{{ auth('account')->user()->name }}</span></a></li>
                                <li class="login-item"><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" rel="nofollow"><i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}</a></li>
                            @else
                                <li class="add-listing">
                                    <a href="{{ route('public.account.login') }}"><img src="{{ Theme::asset()->url('') }}/img/user-light.svg" width="12" alt="" class="mr-2" />{{ __('Sign In') }}</a>
                                </li>
                            @endif
                        </ul>

                        @if (auth('account')->check())
                            <form id="logout-form" action="{{ route('public.account.logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @endif

                        <div class="clearfix"></div>
                        
                        <div class="d-sm-none mobile-menu">
                            <div class="mobile-menu-item mobile-wishlist">
                                <a href="{{ route('public.wishlist') }}"><i class="fas fa-heart"></i> {{ __('Wishlist') }}(<span class="wishlist-count">0</span>)</a>
                            </div>
                            @if (count($currencies) > 1)
                                <div class="mobile-menu-item">
                                    <span>{{ __('Currency') }}: </span>
                                    @foreach ($currencies as $currency)
                                        <a href="{{ route('public.change-currency', $currency->title) }}" @if (get_application_currency_id() == $currency->id) class="active" @endif><span>{{ $currency->title }}</span></a>&nbsp;
                                    @endforeach
                                </div>
                            @endif
                            @if (is_plugin_active('language'))
                                <div class="mobile-menu-item language-wrapper">
                                    {!! $languages = apply_filters('language_switcher') !!}
                                </div>
                            @endif
                        </div>
                    @endif
                </div>
            </nav>
        </div>
    </div>
    <!-- End Navigation -->
    <div class="clearfix"></div>
<!-- mobile vieew -->
<!-- Start Navigation -->
    <div class="sm-device header header-light head-shadow ">
        <div class="container">
            <nav id="navigation" class="navigation navigation-landscape">
                <div class="nav-header">
                    @if (theme_option('logo'))
                        <a class="nav-brand" href="{{ route('public.index') }}">
                        <img class="logo" src="{{ RvMedia::getImageUrl(theme_option('logo')) }}" alt="{{ setting('site_title') }}"></a>
                    @endif
                    <div class="nav-toggle" onclick="openNav()"></div>
                   
                </div>
                <div class="nav-menus-wrapper" style="transition-property: none;">
                   

                    @if (is_plugin_active('real-estate'))
                        <ul class="nav-menu nav-menu-social align-to-right"  style="display:none;">
                            <li>
                                <a href="{{ route('public.account.properties.create') }}" class="text-success"><img src="{{ Theme::asset()->url('') }}/img/submit.svg" width="20" alt="" class="mr-2" /> {{ __('Add Property') }}</a>
                            </li>
                            @if (auth('account')->check())
                                <li class="login-item"><a href="{{ route('public.account.dashboard') }}" rel="nofollow"><i class="fas fa-user"></i> <span>{{ auth('account')->user()->name }}</span></a></li>
                                <li class="login-item"><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" rel="nofollow"><i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}</a></li>
                            @else
                                <li class="add-listing">
                                    <a href="{{ route('public.account.login') }}"><img src="{{ Theme::asset()->url('') }}/img/user-light.svg" width="12" alt="" class="mr-2" />{{ __('Sign In') }}</a>
                                </li>
                            @endif
                        </ul>

                        @if (auth('account')->check())
                            <form id="logout-form" action="{{ route('public.account.logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @endif

                        <div class="clearfix" style=" width: 106%;
    margin-left: -10px;-webkit-box-shadow: 0 5px 30px rgb(0 22 84 / 10%);"></div>
                    
                        <div id="mySidenav" class="sidenav">
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                            <div class="mobile-menu-item mobile-wishlist">
                            <a href="/home"><i class="fas fa-home" style="font-size: 14px;"></i> Home</a>
                            </div>
                            <div class="mobile-menu-item mobile-wishlist">
                            <a href="/about-us"><i class="fa fa-info-circle" style="font-size: 14px;"></i> About Us</a>
                            </div>
                             <div class="w3-dropdown-click">
                                <a onclick="myFunction()" class="w3-button w3-black"><i class="fa fa-server" 
                                    style="font-size: 14px;"></i> Services &nbsp;<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <div id="Demo" class="w3-dropdown-content w3-bar-block w3-border">
                                <a href="/services"  class="w3-bar-item w3-button">Our Services</a>
                                  <a href="/advisory-services" class="w3-bar-item w3-button">Advisory</a>
                                  <a href="/transaction-management" class="w3-bar-item w3-button">Transaction Management</a>
                                  <a href="/tenant-representation" class="w3-bar-item w3-button">Tenant Representation</a>
                                  
                                   <a href="/interior-design" class="w3-bar-item w3-button">Interior Design</a>
                                </div>
                              </div>
                          
                            <div class="mobile-menu-item mobile-wishlist">
                            <a href="/find-properties"><i class="fa fa-building" 
                            style="font-size: 14px;"></i> Find Properties</a>
                            </div>
                            
                            <div class="mobile-menu-item mobile-wishlist">
                            <a href="/news"><i class="fas fa-newspaper" style="font-size: 14px;"></i>
                            <!--<i class="fa fa-newspaper-o" -->
                            <!--style="font-size: 14px;"></i> -->
                            Blog</a>
                            </div>
                            <!--<div class="mobile-menu-item mobile-wishlist">-->
                            <!--<a href="#"><i class="fa fa-graduation-cap" -->
                            <!--style="font-size: 14px;"></i> Careers</a>-->
                            <!--</div>-->
                            <div class="mobile-menu-item mobile-wishlist">
                            <a href="/contact"><i class="fas fa-phone" style="font-size: 14px;"></i> Contact Us</a>
                            </div>
                        </div>
                    @endif
                </div>
            </nav>
        </div>
    </div>
    <!-- End Navigation -->
    <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>-->
    <script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

document.getElementById("price").onkeyup = function() {myFunction()};

 
                // $('#area_available').keyup(calculate);
                // $('#price').keyup(calculate);
             function myFunction()
            {
                alert("hiiiiiiiii");
                // $('#monthly_sq_ft').val($('#area_available').val() * $('#price').val());
             }
</script>