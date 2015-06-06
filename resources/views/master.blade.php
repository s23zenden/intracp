<!doctype html>

<html lang="end">
    <head>
        <meta charset="UTF-8">
        <title>Intracp</title>
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <div class="container">
            <header class="navigation" role="banner">
              <div class="navigation-wrapper">
                <a href="{{url('/')}}" class="logo">
                  <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_1.png" alt="Logo Image">
                </a>
                <nav role="navigation">
                  <ul id="js-navigation-menu" class="navigation-menu show">
                    <li class="nav-link"><a href="{{url('/')}}">Home</a></li>
                    <li class="nav-link"><a href="{{url('about')}}">About Intracp</a></li>
                    <li class="nav-link"><a href="{{url('contact')}}">Contact</a></li>
                  </ul>
                </nav>
              </div>
            </header>
            <div class="container">
               @yield('content')
            </div>
            <div class='container'>
                <div class="boxes">
                    <div class="box-span2">
                        <p>Logo</p>
                    </div>
                    <div class="box-span3">
                        <p>info@intracp.com <br/> +31 (0)685561114</p>
                    </div>
                    <div class="box-span3">
                        <a href="#">Social media</a><br/>
                    </div>
                    <div class="box-span4">
                        <p>Copyright © 2015 | Intracp | All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>