<!DOCTYPE html>
<html class="csstransforms csstransforms3d csstransitions no-js skrollr skrollr-desktop" lang="en">

  <head>
    @include('heads.head')
  </head>

  <body>
    <!-- main page -->
    <div class="main">
      @yield('content')

      @include('footers.footer')
    </div>
    <!-- main page end -->
  </body>

  @include('includes.scripts')

</html>
