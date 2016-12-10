@extends('layouts.master')

@section('content')

  <!-- Start error page -->
  <section id="error-page">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="error-page-area">
            <div class="error-no-area">
              <div class="error-no">
                <h2 style="letter-spacing: -3px; line-height: 100%;">Gene Comparison</h2>

                <br><br><br>
                <br>
                <form role="form" action="{{url('gene-result')}}" target="_blank" method="post">
                    {{csrf_field()}}
                        <div class="row">
                          <div class="col-lg-10 col-lg-offset-1">
                              <!-- <h1 class="page-header">GENE COMPARISON</h1> -->
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">
                            <div class="form-group">
                                <label>GENE 1</label>
                                <textarea class="form-control" name="gene1" size="20" rows="3" placeholder="AGAAGGTACCGGGAAAAAATAATCCTGGCCGTC"></textarea>
                                <span>Enter the first gene to be compared</span>
                            </div>
                        </div>
                        <div class="col-lg-10 col-lg-offset-1">
                            <p class="#"></p>
                        </div>
                      </div>
                      <br><br>
                      <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">
                            <div class="form-group">
                              <label>GENE 2</label>
                              <textarea class="form-control" name="gene2" size="20" rows="3" placeholder="ATTGGTACCGGGATCGTAATAATCCTGGGGACT"></textarea>
                              <span>Enter the second gene to be compared</span>
                          </div>
                        </div>
                      </div> 
                      <div class="row">
                        <div class="col-lg-10 col-lg-offset-1" style="float:center">
                          <!-- <button type="reset" class="btn btn-danger btn-lg" style="margin: 10px; float:center;">Reset</button>      -->
                          <button type="submit" class="btn btn-success btn-lg" style="margin: 10px; float:center;">Submit</button></a>
                        </div>
                      </div>      
                    </form>

                <!-- <p>Sorry</p> -->
              </div>
            </div>
          </div>
          <!-- <div class="error-message">
            <h4>Woops! Something gone wrong</h4>
            <p>Sorry, the page you have requested has either been moved,or does not exist, Return to our <a href="index.html">homepage</a>.</p>
          </div> -->

        </div>
      </div>
    </div>
  </section>
  <!-- End error page -->

@endsection