<?php
use Illuminate\Support\Facades\Input;
?>
@extends('layouts.admin')

@section('content')


<div id="page-wrapper">

    <!--<nav class="navbar navbar-inverse">
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('amino_index') }}">View All Amino Acids</a></li>
        <li><a href="{{URL::route('amino_create')}}">Create an Amino Acid</a></li>
    </ul>
    </nav>-->

@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message')}}</div>
@endif

<div class="row">
    <h2 class="jumbotron text-center" style="background-color:#E6E6FA">
        <b> NEW AMINO ACID INFO</b> <!--icon user-->
    </h2>

    <div class="col-sm-8 col-sm-offset-2">

        <!-- FORM STARTS HERE -->
        <form method="POST" action="{{URL::route('amino_create_process')}}" enctype="multipart/form-data" novalidate><!--xde validation-->
            <input type="hidden" name="_token" value="{{ csrf_token() }}"><!--token tuh unique code-->

            <div class="form-group @if($errors->has('name')) has-error @endif"> <!--ibarat bukak tutup php-->
                <label for="name">Name</label>
                <input type="text" id="name" class="form-control" name="name" placeholder="Amino Acid Name" value="{{(Input::old('name'))}}">
                @if($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
            </div>  <!--div name, klau pasward, kluar ***.. name=name adalah ic-->

            <div class="form-group @if($errors->has('picture')) has-error @endif">
                <label for="name">Picture</label>
                <input type="file" id="picture" name="picture" value="{{Input::file('picture')}}">
                @if($errors->has('picture')) <p class="help-block">{{ $errors->first('picture') }}</p> @endif
            </div>  <!--xde dlm table, so nak kne buat or mcm mne? sbb niyh nak upload pic-->

            <div class="">  <!-- dlm details ad lgi info, klau dlm db nak tgok mcm mne?-->
                <br>
                <h2 for="name"><u>Details Information</u></h2>
                <div class="form-group"><br>
                            
                        <div class="form-group @if($errors->has('symbol')) has-error @endif"> <!--ibarat bukak tutup php-->
                            <label for="name">Symbol</label>
                            <input type="text" id="symbol" class="form-control" name="symbol" placeholder="A" value="{{(Input::old('symbol'))}}">
                            @if($errors->has('symbol')) <p class="help-block">{{ $errors->first('symbol') }}</p> @endif
                        </div>
                        <div class="dropdown-toggle @if($errors->has('polarity')) has-error @endif"> <!--ibarat bukak tutup php-->
                            <label for="name">Polarity</label>
                            <input type="hidden" id="polarity" class="" name="polarity" value="{{(Input::old('polarity'))}}">
                            <select class="form-control" id="polarity" name="polarity" style="margin-right:100%">
                                <option value="Polar">Polar</option>
                                <option value="Non-Polar">Non-Polar</option>
                            </select>
                            @if($errors->has('polarity')) <p class="help-block">{{ $errors->first('polarity') }}</p> @endif
                        </div>
                        <div class="form-group @if($errors->has('acidity')) has-error @endif">
                            <label for="name">Acidity</label>
                            <input type="hidden" id="acidity" class="" name="acidity" value="{{(Input::old('acidity'))}}">
                            <select class="form-control" id="acidity" name="acidity" style="margin-right:100%">
                                <option value="Acidic">Acidic</option>
                                <option value="Neutral">Neutral</option>
                                <option value="Basic">Basic</option>
                            </select>
                            @if($errors->has('acidity')) <p class="help-block">{{ $errors->first('acidity') }}</p> @endif
                        </div>
                        <div class="form-group @if($errors->has('codon')) has-error @endif">
                            <label for="name">Codon</label>
                            <input type="text" id="codon" class="form-control" name="codon" placeholder="GTAATCGATGCCATTA" value="{{(Input::old('codon'))}}">
                            @if($errors->has('codon')) <p class="help-block">{{ $errors->first('codon') }}</p> @endif
                        </div>
                        <div class="form-group @if($errors->has('esential')) has-error @endif">
                            <label for="name">Essential</label>
                            <input type="hidden" id="esential" class="form-control" name="esential" value="{{(Input::old('esential'))}}">
                            <select class="form-control" id="esential" name="esential" style="margin-right:100%">
                                <option value="Essential">Essential</option>
                                <option value="Non-Essential">Non-Essential</option>
                            </select>
                            @if($errors->has('esential')) <p class="help-block">{{ $errors->first('esential') }}</p> @endif
                        </div>
                        <div class="form-group @if($errors->has('isoelectric')) has-error @endif">
                            <label for="name">Isoelectric Point</label>
                            <input type="text" id="isoelectric" class="form-control" name="isoelectric" placeholder="4.08" value="{{(Input::old('isoelectric'))}}">
                            @if($errors->has('isoelectric')) <p class="help-block">{{ $errors->first('isoelectric') }}</p> @endif
                        </div>
                        <div class="form-group @if($errors->has('formula')) has-error @endif">
                            <label for="name">Formula</label>
                            <input type="text" id="formula" class="form-control" name="formula" placeholder="C4H9N2O5" value="{{(Input::old('formula'))}}">
                            @if($errors->has('formula')) <p class="help-block">{{ $errors->first('formula') }}</p> @endif
                        </div>
                        <div class="form-group @if($errors->has('iupac')) has-error @endif">
                            <label for="name">IUPAC Name</label>
                            <input type="text" id="iupac" class="form-control" name="iupac" placeholder="(2S)-2-aminopropanoic acid" value="{{(Input::old('iupac'))}}">
                            @if($errors->has('iupac')) <p class="help-block">{{ $errors->first('iupac') }}</p> @endif
                        </div>
                        <div class="form-group @if($errors->has('molar')) has-error @endif">
                            <label for="name">Molar Mass</label>
                            <input type="text" id="molar" class="form-control" name="molar" placeholder="90.32 g/mol" value="{{(Input::old('molar'))}}">
                            @if($errors->has('molar')) <p class="help-block">{{ $errors->first('molar') }}</p> @endif
                        </div>
                        <div class="form-group @if($errors->has('hydropathy')) has-error @endif">
                            <label for="name">Hydropathy</label>
                            <input type="text" id="hydropathy" class="form-control" name="hydropathy" placeholder="2.3" value="{{(Input::old('hydropathy'))}}">
                            @if($errors->has('hydropathy')) <p class="help-block">{{ $errors->first('hydropathy') }}</p> @endif
                        </div>
                        <div class="form-group @if($errors->has('melting')) has-error @endif">
                            <label for="name">Melting Point</label>
                            <input type="text" id="melting" class="form-control" name="melting" placeholder="250 C" value="{{(Input::old('melting'))}}">                            
                            @if($errors->has('melting')) <p class="help-block">{{ $errors->first('melting') }}</p> @endif
                        </div>
                        <div class="form-group @if($errors->has('boiling')) has-error @endif">
                            <label for="name">Boiling Point</label>
                            <input type="text" id="boiling" class="form-control" name="boiling" placeholder="200 C" value="{{(Input::old('boiling'))}}">
                            @if($errors->has('boiling')) <p class="help-block">{{ $errors->first('boiling') }}</p> @endif
                        </div>
                        <div class="form-group @if($errors->has('density')) has-error @endif">
                            <label for="name">Density</label>
                            <input type="text" id="density" class="form-control" name="density" placeholder="2.034 g/cm^3" value="{{(Input::old('density'))}}">
                            @if($errors->has('density')) <p class="help-block">{{ $errors->first('density') }}</p> @endif
                        </div>
                        <div class="form-group @if($errors->has('water')) has-error @endif">
                            <label for="name">Water Solubility</label>
                            <input type="text" id="water" class="form-control" name="water" placeholder="155 g/L" value="{{(Input::old('water'))}}">
                            @if($errors->has('water')) <p class="help-block">{{ $errors->first('water') }}</p> @endif
                        </div>
                
                </div>
            </div>

            <br>
            <br>
            <button type="submit" class="btn btn-success">CREATE</button> &nbsp;
            <button type="reset" class="btn btn-danger">CLEAR</button> &nbsp;
            <a class="btn btn-small btn-warning" href="{{URL::route('amino_index')}}">CLOSE</a>
            <br>
            <br>
            <br>
            <br>
            <br>

        </form>

    </div>
</div>

</div>
</div><!--end of page-wrapper"-->

@endsection