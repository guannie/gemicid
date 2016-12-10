<!DOCTYPE html>
<html lang="en">
  <head>
    @include('includes.head')
  </head>
  <body> 
      @yield('preheader')
      
        @include('includes.header')


      @yield('content')

    <!-- Start Footer -->    
  <footer id="footer">
        @include('includes.footer')
  </footer>
  <!-- End Footer -->
    
    @include('includes.script')

    @yield('extraScript')
  </body>
</html>