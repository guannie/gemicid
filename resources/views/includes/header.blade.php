

  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

    <!-- Start menu section -->
  <section id="menu-area">
    <nav class="navbar navbar-default main-navbar" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="navbar" aria-expanded="true" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->
           <a class="navbar-brand logo" href="{{url('/')}}"><img src="{{ URL::asset('public/images/logo.jpg') }}" alt="logo"></a>                      
        </div>

        
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav main-nav menu-scroll">
            
          @if (Auth::guest())
            @if (Request::url() === URL::to('/index'))
            <li class="active"><a href="#header">Home</a></li>
            <li><a href="#about">ABOUT</a></li> 
            <li><a href="#team">TEAM</a></li>                    
            <li><a href="#service">SERVICE</a></li>
            <li class="dropdown">           
              <ul><a href="#from-blog">TOOLS</a></ul>      
            <li><a href="#contact">CONTACT</a></li>

            @else
            <li {{{ (Request::is('home') ? 'class=active' : '') }}}><a href="{{url('index')}}">Home</a></li>
            <li {{{ (Request::is('login') ? 'class=active' : '') }}}><a href="{{ URL::to('/lg') }}">Login</a></li>
            <li {{{ (Request::is('register') ? 'class=active' : '') }}}><a href="{{ URL::to('/rg') }}">Register</a></li>
            
           
            @endif

          @else


            @if (Request::url() === URL::to('/home'))
            <li class="active"><a href="#Home">Home</a></li>
            <li><a href="#about">ABOUT</a></li> 
            <li><a href="#team">TEAM</a></li>                    
            <li><a href="#service">SERVICE</a></li>             
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">TOOLS<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="{{url('gene-expression')}}">Gene Expression</a></li>
                  <li><a href="{{url('gene-comparison')}}">Gene Comparison</a></li>
                  <li><a href="{{url('amino-acid')}}">AMINO ACIDS</a></li>
                </ul>
              </li>     
            <li><a href="#contact">CONTACT</a></li>
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"  aria-expanded="false">{{ Auth::user()->username }}<span class="caret"></span></a>   
              <ul class="dropdown-menu">
                  @if (Auth::user()->isAdmin())
                        <li><a href="{{ URL::to('protected') }}"> Admin Page</a>
                  
                   </li>
                  @endif

                  <li><a href="{{ URL::to('/logout') }}"
                       onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                           Logout
                  </a>
                   <form id="logout-form" action="{{ URL::to('/logout') }}" method="POST" style="display: none;">
                           {{ csrf_field() }}
                   </form>
                   </li>
                </ul>
              </li> 
              @else 
                          <li><a href="{{url('home')}}">Home</a></li>              
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">TOOLS<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="{{url('gene-expression')}}">Gene Expression</a></li>
                  <li><a href="{{url('gene-comparison')}}">Gene Comparison</a></li>
                  <li><a href="{{url('amino-acid')}}">AMINO ACIDS</a></li>
                </ul>
              </li>  
              @endif
          @endif   
          </ul>                            
        </div><!--/.nav-collapse -->

        
       <!-- <div class="search-area">
          <form action="">
            <input id="search" name="search" type="text" placeholder="What're you looking for ?">
            <input id="search_submit" value="Rechercher" type="submit">
          </form>
        </div>    -->      
      </div>          
    </nav> 
  </section>


  
  <!-- End menu section -->