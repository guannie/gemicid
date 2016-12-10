<!DOCTYPE html>
<html lang="en">
  <head>
    @include('includes.head')
  </head>
  <body> 

<!-- BEGAIN PRELOADER -->
  <div id="preloader">
    <div class="loader">&nbsp;</div>
  </div>
  <!-- END PRELOADER -->
<script>
document.ready(window.setTimeout(location.href = "{{url('/register')}}",5000));

$(window).load(function() {
               window.setTimeout(window.location.href = "{url('/register')}}",5000);
            });
</script>
    
    @include('includes.script')
  </body>
</html>