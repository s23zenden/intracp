@extends('master')

@section('content')
    <div>
        <div class="flex-boxes">
          <a href="{{url('solutions')}}" class="flex-box flex-box-big">
            <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_2_dark.png" alt="">
            <h1 class="flex-title">Solutions</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad nostrum, libero! Laborum distinctio necessitatibus voluptates eaque officiis, unde illo, earum voluptatum rerum, reiciendis ipsa ex dolorem a dicta, maxime aliquam.</p>
          </a>
          <a href="{{url('markets')}}" class="flex-box">
            <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_1_dark.png" alt="">
            <h1 class="flex-title">Markets</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum molestiae fugiat tenetur fugit atque dignissimos, fugiat natus vitae.</p>
          </a>
          <a href="{{url('products')}}" class="flex-box">
            <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_3_dark.png" alt="">
            <h1 class="flex-title">Products</h1>
            <p>Lorem adipisicing elit. Voluptas consectetur tempora quis nam, officia tenetur blanditiis in illo dolor?</p>
          </a>
          <a href="{{url('services')}}" class="flex-box flex-box-big">
            <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_2_dark.png" alt="">
            <h1 class="flex-title">Services</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quis ipsum, officia, aperiam tenetur dolor molestiae voluptate perferendis dolorem vel ex, unde fugit blanditiis sapiente.</p>
          </a>
          <a href="{{url('portfolios')}}" class="flex-box">
            <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_2_dark.png" alt="">
            <h1 class="flex-title">Portfolios</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo obcaecati in provident illo.</p>
          </a>
          <a href="{{url('followus')}}" class="flex-box">
            <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_3_dark.png" alt="">
            <h1 class="flex-title">Follow Us</h1>
            <p>Lorem ipsum dolor sit amet, elit. Rem, illum.</p>
          </a>
        </div>
    </div>
@endsection
