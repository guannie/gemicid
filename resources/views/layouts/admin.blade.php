<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.includes.head')
  </head>
  <body> 
  <div id="wrapper">

      @yield('preheader')
      
      @include('admin.includes.header')


      @yield('content')

    <!-- Start Footer -->    
  <footer id="footer">
       @include('admin.includes.footer')
  </footer>
  <!-- End Footer -->
    </div><!-- /#wrapper -->
    @include('admin.includes.script')

    @yield('extraScript')


  </body>
</html>