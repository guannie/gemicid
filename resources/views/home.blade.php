@extends('layouts.master')

@section('preheader')
  <!-- Start header section -->  
  <header id="header">
    <div class="header-inner">
      <!-- Header image -->
      <img src="{{url('public/assets/images/header-bg.jpg')}}" alt="img">
      <div class="header-overlay">
        <div class="header-content">
        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
          <h3 style="color:white">Hello, {{ Auth::user()->username }}</h3>
        <!-- Start header content slider -->
        <h2 class="header-slide">WE PROVIDE
          <span>GENETIC TOOLS</span>
          <span>GENETIC TECHNOLOGIES</span>
          <span>GENEBANK</span>
          FOR YOU
        </h2>
        <!-- End header content slider --> 

         <!--Search Gene-->
              <div class="row">
                  <form action="{{url('gene-list')}}" class="form-horizontal" method="get" id="user_index">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                  <div class="col-sm-6 col-sm-offset-3">
                      <div id="imaginary_container"> 
                          <div class="input-group stylish-input-group">
                              <input name="search" id="search" style="text-transform: uppercase;" type="text" class="form-control"  placeholder="Search Gene" >
                              <span class="input-group-addon">
                                  <a type="button" onclick="event.preventDefault();
                                                     document.getElementById('user_index').submit();">
                                      <span class="fa fa-search"></span>
                                  </a>  
                              </span>
                          </div>
                      </div>
                  </div>
                  </form>
              </div>
        <!--End Search Gene-->

        <!-- Header btn area -->
        <div class="header-btn-area">
          <a class="knowmore-btn" href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"</a>
                                            LOGOUT
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
        </div>
      </div>
      </div>      
    </div>
  </header>
  <!-- End header section -->

  @endsection

@section('content')
  <!-- Start about section -->
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- Start welcome area -->
          <div class="welcome-area">
            <div class="title-area">
              <h2 class="tittle">Welcome to <span>Gemicid</span></h2>
              <span class="tittle-line"></span>
              <p>Your best genetics manipulation site which makes you stay forever</p>
            </div>
            <div class="welcome-content">
              <ul class="wc-table">
                <li>
                  <div class="single-wc-content wow fadeInUp">
                    <span class="fa fa-users wc-icon"></span>
                    <h4 class="wc-tittle">Cool concept</h4>
                    <p>Users will be dazzled and will never change to other website </p>
                  </div>
                </li>
                <li>
                  <div class="single-wc-content wow fadeInUp">
                    <span class="fa fa-sellsy wc-icon"></span>
                    <h4 class="wc-tittle">Cool design</h4>
                    <p>Minialist and attrative design used to enhance the website's interface</p>
                  </div>
                </li>
                <li>
                  <div class="single-wc-content wow fadeInUp">
                    <span class="fa fa-line-chart wc-icon"></span>
                    <h4 class="wc-tittle">Cool strategy</h4>
                    <p>Gemicid to be the best and most useful website used by 2020</p>
                  </div>
                </li>
                <li>
                  <div class="single-wc-content wow fadeInUp">
                    <span class="fa fa-bus wc-icon"></span>
                    <h4 class="wc-tittle">Cool solution</h4>
                    <p>As the world's largest genebanks with detailed dictionary contents</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <!-- End welcome area -->
        </div>
      </div>
      
    </div>
  </section> 
  <!-- End about section -->

  <!-- Start call to action -->
  <section id="call-to-action">
    <img src="{{ url('public/assets/images/call-to-action-bg.png')}}" alt="img">
    <div class="call-to-overlay">
      <div class="container">
        <div class="call-to-content wow fadeInUp">
          <h2>How do you feel now? Love us?</h2>
          <h1>SCROLL DOWN FOR MORE!</h1>
        </div>
      </div>
    </div> 
  </section>
  <!-- End call to action -->

  <!-- Start Team action -->
  <section id="team">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="team-area">
            <div class="title-area">
              <h2 class="tittle">Meet our team</h2>
              <span class="tittle-line"></span>
              <p>Get to know us better!</p>
            </div>
            <!-- Start team content -->
            <div class="team-content">
              <ul class="team-grid">
                <li>
                  <div class="team-item team-img-1 wow fadeInUp">
                    <div class="team-info">
                      <p><h2>Holla!</h2></p>
                      <a href="https://www.facebook.com/shita.parman"><span class="fa fa-facebook"></span></a>
                      <a href="https://twitter.com/tcmshitaaa"><span class="fa fa-twitter"></span></a>
                    </div>
                  </div>
                  <div class="team-address">
                    <p>MASIHTA PARMAN</p>
                    <span>Product Owner</span>
                  </div>
                </li>
                <li>
                  <div class="team-item team-img-2 wow fadeInUp">
                    <div class="team-info">
                      <p><h2> Yes? </h2></p>
                      <a href="https://www.facebook.com/guan.xuan.75"><span class="fa fa-facebook"></span></a>
                      <a href="https://twitter.com/guanxuan1"><span class="fa fa-twitter"></span></a>
                    </div>
                  </div>
                  <div class="team-address">
                    <p>LEE KUAN XIN</p>
                    <span>Scrum Master</span>                  
                  </div>
                </li>
                <li>
                  <div class="team-item team-img-3 wow fadeInUp">
                    <div class="team-info">
                      <p><h2>G'day!</h2></p>
                      <a href="https://www.facebook.com/itsallboutyou"><span class="fa fa-facebook"></span></a>
                      <a href="https://twitter.com/myra_radarada"><span class="fa fa-twitter"></span></a>
                    </div>
                  </div>
                  <div class="team-address">
                    <p>AMIRAH ADNAN</p>
                    <span>Front-End Developer</span>
                  </div>
                </li>
                  <li>
                  <div class="team-item team-img-4 wow fadeInUp">
                    <div class="team-info">
                      <p><h2>Yo!</h2></p>
                      <a href="https://www.facebook.com/nurnabilahatikah"><span class="fa fa-facebook"></span></a>
                      <a href="https://twitter.com/billarasib"><span class="fa fa-twitter"></span></a>
                    </div>
                  </div>
                  <div class="team-address">
                    <p>NABILAH RASIB</p>
                    <span>Back-End Developer</span>
                  </div>
                </li>
              </ul>
            </div>
            <!-- End team content -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Start Team action -->

  <!-- Start service section -->
  <section id="service">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="service-area">
            <div class="title-area">
              <h2 class="tittle">Service we offer</h2>
              <span class="tittle-line"></span>
              <p>You will never want to change to other website</p>
            </div>
            <!-- service content -->
            <div class="service-content">
              <ul class="service-table">
                <li class="col-md-3 col-sm-6">
                  <div class="single-service wow slideInUp">
                    <span class="fa fa-edit service-icon"></span>
                    <h4 class="service-title">UX Design</h4>
                    <p>Users will be dazzled and will never change to other website</p>
                  </div>
                </li>
                <li class="col-md-3 col-sm-6">
                  <div class="single-service wow slideInUp">
                    <span class="fa fa-sort-amount-asc service-icon"></span>
                    <h4 class="service-title">Strategy</h4>
                    <p>Gemicid to be the best and most useful website used by 2020</p>
                  </div>
                </li>
                <li class="col-md-3 col-sm-6">
                 <div class="single-service wow slideInUp">
                    <span class="fa fa-map-o service-icon"></span>
                    <h4 class="service-title">UI Design</h4>
                    <p>Minialist and attrative design used to enhance the website's interface</p>
                  </div>
                </li>
                <li class="col-md-3 col-sm-6">
                  <div class="single-service wow slideInUp">
                    <span class="fa fa-rocket service-icon"></span>
                    <h4 class="service-title">Analystic</h4>
                    <p>Tools and technologies provided are updated and at the highest maintenance</p>
                  </div>
                </li>
                <li class="col-md-3 col-sm-6">
                  <div class="single-service wow slideInUp">
                    <span class="fa fa-car service-icon"></span>
                    <h4 class="service-title">Usability</h4>
                    <p>Neat and favorable mapping of contents which eases for navigation</p>
                  </div>
                </li>
                <li class="col-md-3 col-sm-6">
                  <div class="single-service wow slideInUp">
                    <span class="fa fa-bank service-icon"></span>
                    <h4 class="service-title">Research solution</h4>
                    <p>As the world's largest genebanks with detailed dictionary contents</p>
                  </div>
                </li>
                <li class="col-md-3 col-sm-6">
                  <div class="single-service wow slideInUp">
                    <span class="fa fa-user-secret service-icon"></span>
                    <h4 class="service-title">Creative concept</h4>
                    <p>This website capables to tickle user's interest without even touching them *pun*</p>
                  </div>
                </li>
                <li class="col-md-3 col-sm-6">
                  <div class="single-service wow slideInUp">
                    <span class="fa fa-support service-icon"></span>
                    <h4 class="service-title">Support</h4>
                    <p>Of any improvement or maintenance, please contact us</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End service section -->

  <!-- Start Testimonial section -->
  <section id="testimonial">
    <img src="{{ url('public/assets/images/testimonial-bg.jpg')}}" alt="img">
    <div class="counter-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- Start Testimonial area -->
            <div class="testimonial-area">
              <div class="title-area">
                <h2 class="tittle">What people say about us</h2>
                <span class="tittle-line"></span>              
              </div>
              <div class="testimonial-conten">
                <!-- Start testimonial slider -->
                <div class="testimonial-slider">
                  <!-- single slide -->
                  <div class="single-slide">
                    <p>This website has expanded our ability to search and manipulate gene data which is in need for our research and assignments! I would give doube thumbs up for sucha great ideas on creating this website in the first place! Keep up the good work!</p>
                    <div class="single-testimonial">
                      <img class="testimonial-thumb" src="{{ url('public/assets/images/user-1.jpg')}}" alt="img">
                      <p>Al Aiman</p>
                      <span>Student, Sek Sultan Alam Shah</span>
                    </div>
                  </div>
                  <!-- single slide -->
                  <div class="single-slide">
                    <p>I'm a part-time HO and a researcher, and I always don't have an ample time to do my research due to pack schedule and on-call but this website helps me tons by compressing all-in-one tools here and I will be the regular user here I promise! Good job!</p>
                    <div class="single-testimonial">
                      <img class="testimonial-thumb" src="{{ url('public/assets/images/user-2.jpg')}}" alt="img">
                      <p>Yusuf Hisham</p>
                      <span>HO, Hosp Sg Buloh</span>
                    </div>
                  </div>
                  <!-- single slife -->
                  <div class="single-slide">
                    <p>The genebanks and genetic tools and technologies provided here assists me in making DNA test for my clients and this eases me on finalising about nutrition and fitness forever. Thank you for this awesome website!</p>
                    <div class="single-testimonial">
                      <img class="testimonial-thumb" src="{{ url('public/assets/images/user-3.jpg')}}" alt="img">
                      <p>Wee Keong T</p>
                      <span>Coach, Gym & Fitness</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> 
  </section>
  <!-- End Testimonial section -->

  <!-- Start from blog section -->
  <section id="from-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="from-blog-area">
            <div class="title-area">
              <h2 class="tittle">Our Tools</h2>
              <span class="tittle-line"></span>
              <p>Our groundbreaking DNA manipulation tools will change the way you think about genomics forever.</p>
            </div>
            <!-- From Blog content -->
            <div class="from-blog-content" align="center">
              
              <div class="col-sm-4 img-hover">
                <a href="{{url('gene-expression')}}">
                    <img class="img-circle img-responsive img-center" src="https://65.media.tumblr.com/1a3496656eabd8f78d5b5cb8b943637c/tumblr_of1mimCF9c1ua2506o1_400.jpg" alt=""/>
                </a>
                <h3><b>GENE EXPRESSION</b></h3>
                <p>Gene Expression is the process by which information from a gene is used in the synthesis of a functional gene product.</p>
            </div>
            <div class="col-sm-4 img-hover">
                <a href="{{url('gene-comparison')}}">
                <img class="img-circle img-responsive img-center" src="https://66.media.tumblr.com/0643559a0bba808387e460f3ca2600ec/tumblr_of5i5atLjK1ua2506o1_400.jpg" alt="">
                </a>
                <h3><b>GENE COMPARISON</b></h3>
                <p>Gene Comparison is a method of comparing two nucleotide bases of two DNA sequences from different organism.</p>
            </div>
            <div class="col-sm-4 img-hover">
                <a href="{{url('amino-acid')}}">
                <img class="img-circle img-responsive img-center" src="https://66.media.tumblr.com/4151fe31cf2efe182c84320bf339de2c/tumblr_of5i9rREkY1ua2506o1_400.jpg" alt="">
                </a>
                <h3><b>AMINO ACID</b></h3>
                <p>Amino acids are biologically important organic compounds containing amine and carboxylic acid functional groups, along with a specific side-chain.</p>
            </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End from blog section -->

  <section id="client">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="client-area">
            <ul class="client-table">
              <li><img src="{{ url('public/assets/images/1.png')}}" alt="client logo"></li>
              <li><img src="{{ url('public/assets/images/8.png')}}" alt="client logo"></li>
              <li><img src="{{url('public/assets/images/3.png')}}" alt="client logo"></li>
              <li><img src="{{url('public/assets/images/4.png')}}" alt="client logo"></li>
              <li><img src="{{url('public/assets/images/5.png')}}" alt="client logo"></li>
              <li><img src="{{url('public/assets/images/6.png')}}" alt="client logo"></li>
              <li><img src="{{url('public/assets/images/7.png')}}" alt="client logo"></li>
              <li><img src="{{url('public/assets/images/1.png')}}" alt="client logo"></li>
              <li><img src="{{url('public/assets/images/3.png')}}" alt="client logo"></li>
              <li><img src="{{url('public/assets/images/4.png')}}" alt="client logo"></li>
              <li><img src="{{url('public/assets/images/5.png')}}" alt="client logo"></li>
              <li><img src="{{url('public/assets/images/6.png')}}" alt="client logo"></li>
              <li><img src="{{url('public/assets/images/7.png')}}" alt="client logo"></li> 
              <li><img src="{{url('public/assets/images/8.png')}}" alt="client logo"></li>                     
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Start Contact section -->
  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="contact-left wow fadeInLeft">
            <h2>Contact with us</h2>
            <address class="single-address">
              <h4>Postal address:</h4>
              <p>PO Box 117 Jalan Sri Resak KTDI 81310 Johor</p>
            </address>
             <address class="single-address">
              <h4>Headquarters:</h4>
              <p>121 SS09, Subang Jaya 47600 Selangor</p>
            </address>
             <address class="single-address">
              <h4>Phone</h4>
              <p>Phone Number: 018-2511754</p>
              <!-- <p>Fax Number: (06) 456 7890</p> -->
            </address>
             <address class="single-address">
              <h4>E-Mail</h4>
              <p>Support: ad.gemicid@gmail.com</p>
              <p>Helps: ad.gemicid@gmail.com</p>
            </address>
          </div>
        </div>
        <div class="col-md-8 col-sm-6 col-xs-12">
          <div class="contact-right wow fadeInRight">
            <h2>Send a message</h2>
            <form action="https://formspree.io/ad.gemicid@gmail.com" method="POST" class="contact-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Name" name="Name">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Enter Email" name="_replyto">
              </div>
              <div class="form-group">
                <textarea class="form-control" name="Message"></textarea>
              </div>
              <input type="hidden" name="_next" value="{{ url('/') }}" />
              <button type="submit" data-text="SUBMIT" class="button button-default"><span>SUBMIT</span></button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact section -->
  <!-- Start Google Map -->
  <section id="google-map">
  <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m8!1m3!1d6303.67022361714!2d144.955652!3d-37.817331!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d-37.8173306!2d144.9556518!5e0!3m2!1sen!2sbd!4v1442411159706" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>--> 
  <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d127626.95728341167!2d103.5681420870021!3d1.558488836103554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x31da7154a58c424b%3A0x8c133d77584b5ff8!2sutmjb+map!3m2!1d1.55849!2d103.6381827!5e0!3m2!1sen!2s!4v1477785492572" width="1500" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> 
  </section>
  <!-- End Google Map -->
  @endsection