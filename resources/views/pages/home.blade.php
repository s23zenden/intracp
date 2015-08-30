@extends('master')

@section('content')
    {{--<div class="image-gradient-dynamic">--}}
      {{--<img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/mountains.png" alt="">--}}
      {{--<div class="overlay"></div>--}}
      {{--<div class="copy">--}}
        {{--<p>Dynamic height container</p>--}}
      {{--</div>--}}
    {{--</div>--}}
    <div class="hero">
      <div class="hero-inner">
        <a href="" class="hero-logo"><img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_1.png
" alt="Logo Image"></a>
        <div class="hero-copy">
          <h1>Short description of Product</h1>
          <p>A few reasons why this product is worth using, who it's for and why they need it.</p>
        </div>
      </div>
    </div>

    <div class="container">
        <div class="flex-boxes">
          <a href="{{url('services')}}" class="flex-box">
            <img src="/image/homepage/services.png" alt="services">
            <h1 class="flex-title">Services</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quis ipsum, officia, aperiam tenetur dolor molestiae voluptate perferendis dolorem vel ex, unde fugit blanditiis sapiente.</p>
          </a>
          <a href="{{url('portfolios')}}" class="flex-box">
            <img src="/image/homepage/portfolio.png" alt="portfolio">
            <h1 class="flex-title">Portfolio</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo obcaecati in provident illo.</p>
          </a>
          <a href="{{url('about')}}" class="flex-box">
            <img src="/image/homepage/about.png" alt="about us">
            <h1 class="flex-title">About Us</h1>
            <p>Lorem ipsum dolor sit amet, elit. Rem, illum.</p>
          </a>
        </div>
    </div>
@endsection
