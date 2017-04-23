<!DOCTYPE html>
<html lang="en">
<head>
  @include('partials._head')
 
  </head>

  <body>
    @include('partials._nav')
    
    @include('partials._message')
       <div class="container">
           @yield('content')
           @include('partials._footer')
       </div> <!--End of container -->

  @include('partials._javascript')
  @yield('scripts')
  </body>
</html>