@extends('layouts.master')

@section('preheader')
  <!--need to convert to css file later-->
    <style>
        .highlightA { background-color:#FFFF00; }
        .highlightT { background-color:#FF00FF; }
        .highlightG { background-color:#00FFFF; }
        .highlightC { background-color:#F56F0F; }
    </style>
@endsection

@section('content')

<div class="pull-right">
    <a class="btn btn-small btn-warning" href="{{url('gene-comparison')}}">BACK</a> 
</div>

<section id="error-page">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="error-page-area">
            <div class="error-no-area">
              <div class="error-no">
                <h2 style="letter-spacing: -3px; line-height: 100%;">Gene Comparison Result</h2>

                	<div class="row">

                	</div>
	       

  <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Summary
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">                              
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-fw"></i> <strong>Query length: </strong>
                                    <span class="pull-right text-muted small"><em>{{strlen($gene1)}}</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-fw"></i> <strong>Subject length: </strong>
                                    <span class="pull-right text-muted small"><em>{{strlen($gene2)}}</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-fw"></i> <strong>Matched Codon(s) </strong>
                                    <span class="pull-right text-muted small"><em>{{$match}}</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-fw"></i> <strong> Percentage of Matched Codon(s): </strong> 
                                    <span class="pull-right text-muted small"><em>{{$matchPercent.'%'}}</em>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div> 
            </div> <!-- class row -->

          </div>
            </div>  
                      <!-- /.panel-heading -->
          <div class="error-message">
            <div>
              <h4>Alignment</h4> 
              <table class="form-group" align="center"> 
                      <thead class="panel-heading"> 
                      <tr>
                        @for ($i = 1; $i <= ((strlen($gene1)>strlen($gene2))?(strlen($gene1)):(strlen($gene2))); $i++)
                            <td class="{{ $code[$i-1] }}">
                              {{ $i }}
                            </td>
                        @endfor
                      </tr>
                      </thead>

                      <tbody class="panel-body">
                      <tr>
                        @for ($i = 0; $i < strlen($gene1); $i++)
                            <td class="{{ $code[$i] }}" id="one{{$i}}" >
                              {{ $gene1[$i] }}
                            </td>
                        @endfor
                      </tr>

                      <tr>
                        @for ($i = 0; $i < strlen($gene2); $i++)
                            <td class="{{ $code[$i] }}" id="two{{$i}}">
                              {{ $gene2[$i] }}
                            </td>
                        @endfor
                      </tr>
                      </tbody>
                    </table>    
                   </div>
              </div>
           </div>
          </div>
        </div>
      </div>
  </section>
  <!-- End error page -->
@endsection


@section('extraScript')

@endsection
