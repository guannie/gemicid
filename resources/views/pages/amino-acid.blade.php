@extends('layouts.master')

@section('content')

  <!-- Start error page -->
  <section id="error-page">
    <div class="container">
      <div class="row">
        <div class="col-md-12">

        <!-- Gene Expression result -->
          <div class="error-message">
            <!-- <div  style="margin-left:264px; width:600px;"> -->
              <h4>Amino Acids Dictionary</h4> 
              
              <!-- Amino Acid Row -->
              <div class="row">
                  <!-- <div class="col-lg-2 col-md-6 col-sm-6 text-center img-hover img-box"> -->
                  <div class="col-lg-2 col-md-6 col-sm-6 text-center col-lg-offset-1 img-hover img-box">
                      <a href="amino-view/A">
                      <img class="img-circle img-responsive img-center img-center-2" width="150" height="150" src="public/assets/images/amino acids/1.png" alt="">
                      </a>
                      <h3>Alanine</h3>
                      <small>Ala, A</small>
                  </div>
                  <div class="col-lg-2 col-md-6 col-sm-6 text-center img-hover img-box">
                      <a href="amino-view/R">
                      <img class="img-circle img-responsive img-center img-center-2" width="150" height="150" src="public/assets/images/amino acids/2.png" alt="">
                      </a>
                      <h3>Arginine</h3>
                      <small>Arg, R</small>
                  </div>
                  <div class="col-lg-2 col-md-6 col-sm-col-md-6 6 text-center img-hover img-box">
                      <a href="amino-view/N">
                      <img class="img-circle img-responsive img-center img-center-2" width="150" height="150" src="public/assets/images/amino acids/3.png" alt="">
                      </a>
                      <h3>Asparagine</h3>
                      <small>Asn, N</small>
                  </div>
                  <div class="col-lg-2 col-md-6 col-sm-6 text-center img-hover img-box">
                      <a href="amino-view/D">
                      <img class="img-circle img-responsive img-center img-center-2" width="150" height="150" src="public/assets/images/amino acids/4.png" alt="">
                      </a>
                      <h3>Aspartic Acid</h3>
                      <small>Asp, D</small>            
                  </div>
                  <div class="col-lg-2 col-md-6 col-sm-6 text-center img-hover img-box">
                      <a href="amino-view/C">
                      <img class="img-circle img-responsive img-center img-center-2" width="150" height="150" src="public/assets/images/amino acids/5.png" alt="">
                      </a>
                      <h3>Cysteine</h3>
                      <small>Cys, C</small>
                  </div>
              </div>

              <br><br>

              <div class="row">
                  <div class="col-lg-2 col-md-6 col-sm-6 text-center col-lg-offset-1 img-hover img-box">
                      <a href="amino-view/E">
                      <img class="img-circle img-responsive img-center img-center-2" width="150" height="150" src="public/assets/images/amino acids/6.PNG" alt="">
                      </a>
                      <h3>Glutamic Acid</h3>
                      <small>Glu, E</small>
                  </div>
                  <div class="col-lg-2 col-md-6 col-sm-6 text-center img-hover img-box">
                      <a href="amino-view/Q">
                      <img class="img-circle img-responsive img-center img-center-2" width="150" height="150" src="public/assets/images/amino acids/7.PNG" alt="">
                      </a>
                      <h3>Glutamine</h3>
                      <small>Gln, Q</small>
                  </div>
                  <div class="col-lg-2 col-md-6 col-sm-6 text-center img-hover img-box">
                      <a href="amino-view/G">
                      <img class="img-circle img-responsive img-center img-center-2" width="150" height="150" src="public/assets/images/amino acids/8.PNG" alt="">
                      </a>
                      <h3>Glycine</h3>
                      <small>Gly, G</small>
                  </div>
                  <div class="col-lg-2 col-md-6 col-sm-6 text-center img-hover img-box">
                      <a href="amino-view/H">
                      <img class="img-circle img-responsive img-center img-center-2" width="150" height="150" src="public/assets/images/amino acids/9.PNG" alt="">
                      </a>
                      <h3>Histidine</h3>
                      <small>His, H</small>
                  </div>
                  <div class="col-lg-2 col-md-6 col-sm-6 text-center img-hover img-box">
                      <a href="amino-view/I">
                      <img class="img-circle img-responsive img-center img-center-2" width="150" height="150" src="public/assets/images/amino acids/10.PNG" alt="">
                      </a>
                      <h3>Isoleucine</h3>
                      <small>IIe, I</small>
                  </div>
              </div>

              <br><br>

              <div class="row">
                  <div class="col-lg-2 col-sm-6 text-center col-lg-offset-1 img-hover img-box">
                      <a href="amino-view/L">
                      <img class="img-circle img-responsive img-center img-center-2" width="150" height="150" src="public/assets/images/amino acids/11.PNG" alt="">
                      </a>
                      <h3>Leucine</h3>
                      <small>Leu, L</small>
                  </div>
                  <div class="col-lg-2 col-md-6 col-sm-6 text-center img-hover img-box">
                      <a href="amino-view/K">
                      <img class="img-circle img-responsive img-center img-center-2" width="150" height="150" src="public/assets/images/amino acids/12.PNG" alt="">
                      </a>
                      <h3>Lysine</h3>
                      <small>Lys, K</small>
                  </div>
                  <div class="col-lg-2 col-md-6 col-sm-6 text-center img-hover img-box">
                      <a href="amino-view/M">
                      <img class="img-circle img-responsive img-center img-center-2" width="150" height="150" src="public/assets/images/amino acids/13.PNG" alt="">
                      </a>
                      <h3>Methionine</h3>
                      <small>Met, M</small>
                  </div>
                  <div class="col-lg-2 col-md-6 col-sm-6 text-center img-hover img-box">
                      <a href="amino-view/F">
                      <img class="img-circle img-responsive img-center img-center-2" width="150" height="150" src="public/assets/images/amino acids/14.PNG" alt="">
                      </a>
                      <h3>Phenylalanine</h3>
                      <small>Phe, F</small>
                  </div>
                  <div class="col-lg-2 col-md-6 col-sm-6 text-center img-hover img-box">
                      <a href="amino-view/P">
                      <img class="img-circle img-responsive img-center img-center-2" width="150" height="150" src="public/assets/images/amino acids/15.PNG" alt="">
                      </a>
                      <h3>Proline</h3>
                      <small>Pro, P</small>
                  </div>
              </div>

              <br><br>

              <div class="row">
                  <div class="col-lg-2 col-md-6 col-sm-6 text-center col-lg-offset-1 img-hover img-box">
                      <a href="amino-view/S">
                      <img class="img-circle img-responsive img-center img-center-2" width="150" height="150" src="public/assets/images/amino acids/16.PNG" alt="">
                      </a>
                      <h3>Serine</h3>
                      <small>Ser, S</small>
                  </div>
                  <div class="col-lg-2 col-md-6 col-sm-6 text-center img-hover img-box">
                      <a href="amino-view/T">
                      <img class="img-circle img-responsive img-center img-center-2" width="150" height="150" src="public/assets/images/amino acids/17.PNG" alt="">
                      </a>
                      <h3>Threonine</h3>
                      <small>Thr, T</small>
                  </div>
                  <div class="col-lg-2 col-md-6 col-sm-6 text-center img-hover img-box">
                      <a href="amino-view/W">
                      <img class="img-circle img-responsive img-center img-center-2" width="150" height="150" src="public/assets/images/amino acids/18.PNG" alt="">
                      </a>
                      <h3>Tryptophan</h3>
                      <small>Trp, W</small>
                  </div>
                  <div class="col-lg-2 col-md-6 col-sm-6 text-center img-hover img-box">
                      <a href="amino-view/Y">
                      <img class="img-circle img-responsive img-center img-center-2" width="150" height="150" src="public/assets/images/amino acids/19.PNG" alt="">
                      </a>
                      <h3>Tyrosine</h3>
                      <small>Tyr, Y</small>
                  </div>
                  <div class="col-lg-2 col-md-6 col-sm-6 text-center img-hover img-box">
                      <a href="amino-view/V">
                      <img class="img-circle img-responsive img-center img-center-2" width="150" height="150" src="public/assets/images/amino acids/20.PNG" alt="">
                      </a>
                      <h3>Valine</h3>
                      <small>Val, V</small>
                  </div>
              </div>
                
              
            <!-- </div> close size-->
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- End error page -->

@endsection