<?php
use Illuminate\Support\Facades\Input;
?>
@extends('layouts.admin')

@section('content')


<div id="page-wrapper">


@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message')}}</div>
@endif

<div class="row">
    <h2 class="jumbotron text-center" style="background-color:#E6E6FA">
            <b>New Genes Bank Info</b>  <!--icon user-->
    </h2>

    <div class="col-sm-8 col-sm-offset-2">

        <!-- FORM STARTS HERE -->
        <form method="POST" action="{{URL::route('gene_create_process')}}" enctype="multipart/form-data" novalidate><!--xde validation-->
            <input type="hidden" name="_token" value="{{ csrf_token() }}"><!--token tuh unique code-->

            <div class="form-group @if($errors->has('name')) has-error @endif"> <!--ibarat bukak tutup php-->
                <label for="name">Name</label>
                <input type="text" id="name" class="form-control" name="name" placeholder="Homo Sapiens" value="{{(Input::old('name'))}}">
                @if($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
            </div>  <!--div name, klau pasward, kluar ***.. name=name adalah ic-->

            <div class="form-group @if($errors->has('picture')) has-error @endif">
                <label for="name">Picture</label>
                <input type="file" id="picture" name="picture" value="{{Input::file('picture')}}">
                @if($errors->has('picture')) <p class="help-block">{{ $errors->first('picture') }}</p> @endif
            </div> <!--xde dlm table, so nak kne buat or mcm mne? sbb niyh nak upload pic-->

            <div class=""><br>  <!-- dlm details ad lgi info, klau dlm db nak tgok mcm mne?-->
                <h2 for="name">Details Information</h2>
                <div class="form-group"><br>
                            
                        <div class="form-group @if($errors->has('serial')) has-error @endif"> <!--ibarat bukak tutup php-->
                            <label for="name">Serial (Accession Number)</label>
                            <input type="text" id="serial" class="form-control" name="serial" placeholder="AU12345" value="{{(Input::old('serial'))}}">
                            @if($errors->has('serial')) <p class="help-block">{{ $errors->first('serial') }}</p> @endif
                        </div>
                        
                        <div class="form-group @if($errors->has('locus')) has-error @endif">
                            <label for="name">Locus</label>
                            <input type="text" id="locus" class="form-control" name="locus" placeholder="2.3" value="{{(Input::old('locus'))}}">
                            @if($errors->has('locus')) <p class="help-block">{{ $errors->first('locus') }}</p> @endif
                        </div>
                        <div class="form-group @if($errors->has('reference')) has-error @endif">
                            <label for="name">Reference</label>
                            <input type="hidden" id="reference" class="form-control" name="reference" value="{{(Input::old('reference'))}}">
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
                            <input type="text" id="fastaseq" class="form-control" name="fastaseq" placeholder="AGGGGCTTAAAGTA" value="{{(Input::old('fastaseq'))}}">
                            @if($errors->has('fastaseq')) <p class="help-block">{{ $errors->first('fastaseq') }}</p> @endif
                        </div>
                        <div class="form-group @if($errors->has('comment')) has-error @endif">
                            <label for="name">Extra Remarks (Link/Comment)</label>
                            <input type="text" id="comment" class="form-control" name="comment" placeholder="This is Human Sequence!" value="{{(Input::old('comment'))}}">
                            @if($errors->has('comment')) <p class="help-block">{{ $errors->first('comment') }}</p> @endif
                        </div>
                </div>
            </div>

            <br>
            <br>
            <button type="submit" class="btn btn-success">Create</button>
            <button type="reset" class="btn btn-danger">Clear</button>
            <a class="btn btn-small btn-warning" href="{{URL::route('gene_index')}}">CLOSE</a>
            <br>
            <br>
            <br>
            <br>
            <br>
       

        </form>

    </div>
</div>

</div><!--end of page-wrapper"-->

@endsection