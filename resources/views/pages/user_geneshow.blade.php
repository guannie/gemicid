@extends('layouts.master')

@section('content')

<section id="error-page">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="error-page-area">
            <div class="error-no-area">
              <div class="error-no">
                <h2>{{strtoupper ($gene->name) }}</h2>
                    <br><br><img src="{{ url('/public/upload/gene/'.$gene->picture) }} ">

                <div style="text-align:left">
                <br>
                <h4>
                    <strong>Serial (Accession Number)&emsp;&emsp;&ensp;&nbsp;:</strong> {{strtoupper ($gene->serial) }}<br><br>
                    <strong>Locus&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp; :</strong> {{strtoupper ($gene->locus) }}<br><br>
                    <strong>Reference&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp; :</strong> {{strtoupper ($gene->reference) }}<br><br>
                    <strong>Fasta Sequence&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp; :</strong> {{strtoupper ($gene->fastaseq) }}<br><br>
                    <strong>Extra Remarks (Link/Comment)&nbsp; :</strong> {{strtoupper ($gene->comment) }}<br><br>
                </h4>

                <div>
                  <a class="btn btn-small btn-warning" href="{{url('gene-list')}}">BACK</a> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
  <!-- End error page -->
@endsection