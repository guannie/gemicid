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
                <h2>{{ strtoupper($amino->name) }}</h2>
                    <br><br><img src="{{ url('/public/upload/amino/'.$amino->picture) }} ">

                  <div style="text-align:left">
                    <br>
                    <h4>
                      <strong>Polarity&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp; :</strong> {{strtoupper ($amino->polarity) }}<br><br>
                      <strong>Acidity&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;:</strong> {{strtoupper ($amino->acidity) }}<br><br>
                      <strong>Codon&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;:</strong> {{strtoupper ($amino->codon) }}<br><br>
                      <strong>Essential&emsp;&emsp;&emsp;&emsp;&nbsp;:</strong> {{strtoupper ($amino->esential) }}<br><br>
                      <strong>Isoelectric Point&emsp;:</strong> {{strtoupper ($amino->isoelectric) }}<br><br>
                      <strong>Formula&emsp;&emsp;&emsp;&emsp;&ensp;:</strong> {{strtoupper ($amino->formula) }}<br><br>
                      <strong>IUPAC Name&emsp;&emsp;&nbsp;:</strong> {{strtoupper ($amino->iupac) }}<br><br>
                      <strong>Molar Mass&emsp;&emsp;&emsp;:</strong> {{strtoupper ($amino->molar) }}<br><br>
                      <strong>Hydropathy&emsp;&emsp;&ensp;&nbsp; :</strong> {{strtoupper ($amino->hydropathy) }}<br><br>
                      <strong>Melting Point&emsp;&emsp;&nbsp;:</strong> {{strtoupper ($amino->melting) }}<br><br>
                      <strong>Boiling Point&emsp;&emsp;&ensp;:</strong> {{strtoupper ($amino->boiling) }}<br><br>
                      <strong>Density&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;:</strong> {{strtoupper ($amino->density)}}<br><br>
                      <strong>Water Solubility&emsp;:</strong> {{strtoupper ($amino->water) }}<br>
                    </h4>
                  </div>

                  <div>
                    <a class="btn btn-small btn-warning" href="{{url('amino-acid')}}">BACK</a> 
                  </div>

                <!-- <p>Sorry</p> -->
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- End error page -->

  @endsection