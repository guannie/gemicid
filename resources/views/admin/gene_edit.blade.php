<?php
use Illuminate\Support\Facades\Input;
?>

@extends('layouts.admin')

@section('content')


<div id="page-wrapper" style="background-color:#FFFFFF">

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<div class="row">
    <h2 class="jumbotron text-center" style="background-color:#E6E6FA">
        <b>Edit Genes Bank Info</b>
        </h2>

    <div class="row-sm-6 ">
        <div class="col-sm-8 col-sm-offset-2">

        <!-- FORM STARTS HERE -->
        <form method="POST" action="{{URL::route('gene_edit_process', array($gene->id))}}" enctype="multipart/form-data" novalidate>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="id" value="{{ $gene->id }}">
            <input type="hidden" name="isNewPic" id="isNewPic" value="0">

            <div class="form-group @if($errors->has('name')) has-error @endif">
                <label for="name">Name</label>
                <input type="text" id="name" class="form-control" name="name" value="{{$gene->name}}">
                @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
            </div>

            <div class="form-group @if($errors->has('picture')) has-error @endif">
                <label for="name">Picture</label>
                <input type="file" id="picture" name="picture" onchange="readURL(this);">
                <br><img id="ulala" src="{{ url('/public/upload/gene/'.$gene->picture) }}"></br>
                <!--<br><img src="../{{ $gene->picture }}"></br>-->
                @if($errors->has('picture')) <p class="help-block">{{ $errors->first('picture') }}</p> @endif
            </div>  <!--xde dlm table, so nak kne buat or mcm mne? sbb niyh nak upload pic-->

            <div class="">  <!-- dlm details ad lgi info, klau dlm db nak tgok mcm mne?-->
                <h2 for="name">Details Information</h2>
                <div class="form-group">
                            
                        <div class="form-group @if($errors->has('serial')) has-error @endif"> <!--ibarat bukak tutup php-->
                            <label for="name">Serial (Accession Number)</label>
                            <input type="text" id="serial" class="form-control" name="serial" value="{{$gene->serial}}">
                            @if($errors->has('serial')) <p class="help-block">{{ $errors->first('serial') }}</p> @endif
                        </div>
                        
                        <div class="form-group @if($errors->has('locus')) has-error @endif">
                            <label for="name">Locus</label>
                            <input type="text" id="locus" class="form-control" name="locus" value="{{$gene->locus}}">
                            @if($errors->has('locus')) <p class="help-block">{{ $errors->first('locus') }}</p> @endif
                        </div>
                        <div class="form-group @if($errors->has('reference')) has-error @endif">
                            <label for="name">Reference</label>
                            <input type="hidden" id="reference" class="form-control" name="reference" value="{{$gene->reference}}">
                            <select class="form-control" id="reference" name="reference" style="margin-right:100%">
                                <option value="Blast">Blast</option>
                                <option value="Fasta">FASTA</option>
                                <option value="PDB">PDB</option>
                                <option value="Uniprot">Uniprot</option>
                                <option value="Others">Others</option>
                            </select>
                            @if($errors->has('reference')) <p class="help-block">{{ $errors->first('reference') }}</p> @endif
                        </div>
                        <div class="form-group @if($errors->has('fastaseq')) has-error @endif">
                            <label for="name">Fasta Sequence</label>
                            <input type="text" id="fastaseq" class="form-control" name="fastaseq" value="{{$gene->fastaseq}}">
                            @if($errors->has('fastaseq')) <p class="help-block">{{ $errors->first('fastaseq') }}</p> @endif
                        </div>
                        <div class="form-group @if($errors->has('comment')) has-error @endif">
                            <label for="name">Extra Remarks (Link/Comment)</label>
                            <input type="text" id="comment" class="form-control" name="comment" value="{{$gene->comment}}">
                            @if($errors->has('comment')) <p class="help-block">{{ $errors->first('comment') }}</p> @endif
                        </div>
                </div>
            </div>

            <button type="submit" class="btn btn-success">UPDATE</button> &nbsp;
            <a class="btn btn-danger" href="{{URL::route('gene_index')}}">CANCEL</a>
            <!--<button type="reset" class="btn btn-danger">Cancel</button>-->

        </form>

    </div>
    </div>
</div> <!-- class container -->

</div>
</div><!--end of page-wrapper"-->
 
    </div><!-- /#page-wrapper -->
</div><!-- /#wrapper -->
  
    </div><!-- /#page-wrapper -->
</div><!-- /#wrapper -->
<br>
@endsection

@section('extraScript')
<script type="text/javascript">

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#ulala')
                    .attr('src', e.target.result)
                    .width(250)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        document.getElementById('isNewPic').value = 1;
        } else {
            document.getElementById('isNewPic').value = 0;
        }
    }
</script>
@endsection