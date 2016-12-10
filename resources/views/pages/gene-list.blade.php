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
                <h2 style="letter-spacing: -3px; line-height: 100%;">Search Genes</h2>

                <div class="portlet-body form">
                  <form action="" class="form-horizontal" method="get" id="user_index">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

                    <br><br>
                    <!-- <label style="text-transform: uppercase;">Search Gene</label> -->
                        <a data-toggle="tooltip" data-placement="right" title="e.g U49845" style="float:right;">
                        <span class="glyphicon glyphicon-question-sign"></span></a>
                          <div class="input-group col-md-12">
                            <input id="search" name="search" style="text-transform: uppercase;" type="text" class="form-control typeahead" placeholder="Accession Number" data-provide="typeahead" autocomplete="off" >                            
                              
                            <span class="input-group-btn">
                              <input type="submit" value="SEARCH" id="btnSearch" class="btn btn-info">
                            </span>
                          </div>
                  </form>
                  <br><br>

                  <!-- will be used to show any messages -->
                  @if (Session::has('message'))
                  <div class="alert alert-info">{{ Session::get('message') }}</div>
                  @endif
                  <table class="table table-striped table-bordered">
                    <thead style="background-color:lavender">
                      <tr>
                        <td style="text-transform: uppercase;">No</td>
                        <td style="text-transform: uppercase;">Accession Number</td>
                        <td style="text-transform: uppercase;">Organism</td>
                        <td style="text-transform: uppercase;">FASTA Sequence</td>
                        <td style="text-transform: uppercase;">Action</td>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no=1; ?>
                      @foreach($gene as $value)
                      <tr> 
                        <td width="5%" ><?php echo $no ?></td>
                        <td width="5%" style="text-transform: uppercase;">{{ $value->serial }}</td>
                        <td width="15%" style="text-transform: uppercase;">{{ $value->name }}</td>
                        <td width="25%" style="text-transform: uppercase;">{{ $value->fastaseq }}</td>
                        <td width="10%">
                          <a class="btn btn-default btn-sm" style="text-transform: uppercase;" href="{{URL::route('user_geneshow', array($value->id))}}">View Details</a>
                        </td>
                      </tr>
                      <?php $no++; ?>
                      @endforeach
                    </tbody>
                  </table>

                </div>

                <br>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- End error page -->

@endsection

