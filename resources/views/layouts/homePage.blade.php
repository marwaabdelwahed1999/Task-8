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
    <!-- slider section -->
   @include('includes.slider')
    <!-- end slider section -->
  </div>

  <!-- about section -->

  @include('includes.about')

  <!-- end about section -->

  <!-- service section -->

  @include('includes.service')

  <!-- end service section -->


  <!-- client section -->

  @include('includes.client')

  <!-- end client section -->

  <!-- contact section -->

  @include('includes.contact')

  <!-- end contact section -->

  <!-- team section -->

  @include('includes.team')

  <!-- end team section -->

  <!-- info section -->
 @include('includes.info')

  <!-- end info_section -->




  <!-- footer section -->
  @include('includes.footer')
  <!-- footer section -->

  @include('includes.footerJs')
</body>

</html>