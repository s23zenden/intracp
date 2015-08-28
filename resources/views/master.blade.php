<!doctype html>

<html lang="end">
    <head>
        <meta charset="UTF-8">
        <title>Intracp</title>
        <link rel="stylesheet" href="/css/style.css">
        <link href='http://fonts.googleapis.com/css?family=Lusitana:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:400,300,300italic,400italic,700italic,700,800,800italic' rel='stylesheet' type='text/css'>

        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    </head>
    <body>


        <div class="main">
            <header class="navigation" role="navigation">
                <div class="navigation-wrapper">
                    <a href="{{url('/')}}" class="logo">
                        <img src="/image/logo.png" alt="Logo Image">
                    </a>
                    <a href="javascript:void(0)" class="navigation-menu-button" id="js-mobile-menu">
                        <div id="hamburger" class="hamburglar is-close">

                            <div class="burger-icon">
                                <div class="burger-container">
                                    <span class="burger-bun-top"></span>
                                    <span class="burger-filling"></span>
                                    <span class="burger-bun-bot"></span>
                                </div>
                            </div>

                            <!-- svg ring containter -->
                            <div class="burger-ring">
                                <svg class="svg-ring">
                                    <path class="path" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="4" d="M 34 2 C 16.3 2 2 16.3 2 34 s 14.3 32 32 32 s 32 -14.3 32 -32 S 51.7 2 34 2" />
                                </svg>
                            </div>
                            <!-- the masked path that animates the fill to the ring -->

                            <svg width="0" height="0">
                                <mask id="mask">
                                    <path xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#ff0000" stroke-miterlimit="10" stroke-width="4" d="M 34 2 c 11.6 0 21.8 6.2 27.4 15.5 c 2.9 4.8 5 16.5 -9.4 16.5 h -4" />
                                </mask>
                            </svg>
                            <div class="path-burger">
                                <div class="animate-path">
                                    <div class="path-rotation"></div>
                                </div>
                            </div>

                        </div>
                    </a>
                    <nav role="navigation">
                        <ul id="js-navigation-menu" class="navigation-menu show">
                            <li class="nav-link"><a href="{{url('/')}}">Home</a></li>
                            <li class="nav-link"><a href="{{url('about')}}">About</a></li>
                            <li class="nav-link"><a href="{{url('services')}}">Services</a></li>
                            <li class="nav-link"><a href="{{url('portfolios')}}">Portfolio</a></li>
                            <li class="nav-link"><a href="{{url('contact')}}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </header>

            @yield('content')
        </div>
            {{--<div class='container'>--}}
                {{--<div class="boxes">--}}
                    {{--<div class="box-span2">--}}
                        {{--<p>Logo</p>--}}
                    {{--</div>--}}
                    {{--<div class="box-span3">--}}
                        {{--<p>info@intracp.com <br/> +31 (0)685561114</p>--}}
                    {{--</div>--}}
                    {{--<div class="box-span3">--}}
                        {{--<a href="#">Social media</a><br/>--}}
                    {{--</div>--}}
                    {{--<div class="box-span4">--}}
                        {{--<p>Copyright © 2015 | Intracp | All Rights Reserved</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        <div class="row">
            <footer class="footer-2" role="contentinfo">
                <div class="container">
                    <div class="footer-logo">
                        <img src="/image/logo.png" alt="Logo image">
                    </div>
                    <div class="footer-secondary-links">
                        <ul>
                            <li><a href="javascript:void(0)">Copyright © 2015 | Intracp | All Rights Reserved</a></li>
                        </ul>

                        <ul class="footer-social">
                            <li><a href="javascript:void(0)">
                                    <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/facebook-logo-circle.png" alt="Facebook">
                                </a></li>
                            <li><a href="javascript:void(0)">
                                    <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/twitter-logo-circle.png" alt="Twitter">
                                </a></li>
                            <li><a href="javascript:void(0)">
                                    <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/youtube-logo-circle.png" alt="YouTube">
                                </a></li>
                        </ul>
                    </div>
                </div>
            </footer>

        </div>

        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script>
          var bittersMap = (function () {
            var myLatlng = new google.maps.LatLng(51.427480, 5.456924),
                mapCenter = new google.maps.LatLng(51.425481, 5.456924),
                mapCanvas = document.getElementById('map_canvas'),
                mapOptions = {
                  center: mapCenter,
                  zoom: 13,
                  scrollwheel: false,
                  draggable: true,
                  disableDefaultUI: true,
                  mapTypeId: google.maps.MapTypeId.ROADMAP
                },
                map = new google.maps.Map(mapCanvas, mapOptions),
                contentString =
                  '<div id="content">'+
                  '<div id="siteNotice">'+
                  '</div>'+
                  '<h1 id="firstHeading" class="firstHeading">thoughtbot</h1>'+
                  '<div id="bodyContent"'+
                  '<p>Sveavägen 98</p>'+
                  '</div>'+
                  '</div>',
                infowindow = new google.maps.InfoWindow({
                  content: contentString,
                  maxWidth: 300
                }),
                marker = new google.maps.Marker({
                  position: myLatlng,
                  map: map,
                  title: 'thoughtbot (Sweden)'
                });

            return {
              init: function () {
                map.set('styles', [{
                  featureType: 'landscape',
                  elementType: 'geometry',
                  stylers: [
                    { hue: '#ffff00' },
                    { saturation: 30 },
                    { lightness: 10}
                  ]}
                ]);

                google.maps.event.addListener(marker, 'click', function () {
                  infowindow.open(map,marker);
                });
              }
            };
          }());

          bittersMap.init();

          $(document).ready(function() {
              if ($("#js-parallax-window").length) {
                  parallax();
              }
          });

          $(window).scroll(function(e) {
              if ($("#js-parallax-window").length) {
                  parallax();
              }
          });

          function parallax(){
              if( $("#js-parallax-window").length > 0 ) {
                  var plxBackground = $("#js-parallax-background");
                  var plxWindow = $("#js-parallax-window");

                  var plxWindowTopToPageTop = $(plxWindow).offset().top;
                  var windowTopToPageTop = $(window).scrollTop();
                  var plxWindowTopToWindowTop = plxWindowTopToPageTop - windowTopToPageTop;

                  var plxBackgroundTopToPageTop = $(plxBackground).offset().top;
                  var windowInnerHeight = window.innerHeight;
                  var plxBackgroundTopToWindowTop = plxBackgroundTopToPageTop - windowTopToPageTop;
                  var plxBackgroundTopToWindowBottom = windowInnerHeight - plxBackgroundTopToWindowTop;
                  var plxSpeed = 0.35;

                  plxBackground.css('top', - (plxWindowTopToWindowTop * plxSpeed) + 'px');
              }
          }

        </script>
        <script>
            $(document).ready(function() {
                var menuToggle = $('#js-mobile-menu').unbind();
                $('#js-navigation-menu').removeClass("show");

                menuToggle.on('click', function(e) {
                    e.preventDefault();
                    $('#js-navigation-menu').slideToggle(function(){
                        if($('#js-navigation-menu').is(':hidden')) {
                            $('#js-navigation-menu').removeAttr('style');
                        }
                    });
                });


                var trigger = $('#hamburger'),
                        isClosed = false;

                trigger.click(function () {
                    burgerTime();
                });

                function burgerTime() {
                    if (isClosed == true) {
                        trigger.removeClass('is-open');
                        trigger.addClass('is-closed');
                        isClosed = false;
                    } else {
                        trigger.removeClass('is-closed');
                        trigger.addClass('is-open');
                        isClosed = true;
                    }
                }

                $( "#dialog").dialog();
            });

        </script>


    </body>

</html>
