<!DOCTYPE html>
<html>

@include('includes.head')

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <div class="hero_bg_box">
      <div class="img-box">
        <img src="{{asset('assets/images/hero-bg.jpg')}}" alt="">
      </div>
    </div>
    @include('includes.header')
   
    <!-- end header section -->
   
     @yield('contact_content')



  <!-- footer section -->
  @include('includes.footer')
  <!-- footer section -->

  @include('includes.footerJs')
</body>

</html>