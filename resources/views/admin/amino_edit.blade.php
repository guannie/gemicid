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

<!-- <div class="form"> -->
<div class="row">
    <h2 class="jumbotron text-center" style="background-color:#E6E6FA">
        <b>EDIT AMINO ACID INFO</b> <!--icon user-->
    </h2>

    <div class="row-sm-6 ">
        <div class="col-sm-8 col-sm-offset-2">

            <!-- FORM STARTS HERE -->
            <form method="POST" action="{{URL::route('amino_edit_process')}}" enctype="multipart/form-data" novalidate>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="id" value="{{ $amino->id }}">
                <input type="hidden" name="isNewPic" id="isNewPic" value="0">

                <div class="form-group @if($errors->has('name')) has-error @endif">
                    <label for="name">Name</label>
                    <input type="text" id="name" class="form-control" name="name" placeholder="Amino Acid Name" value="{{$amino->name}}">
                    @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
                </div>

                <div class="form-group @if($errors->has('picture')) has-error @endif">
                    <label for="name">Picture</label>
                    <input type="file" id="picture" name="picture" onchange="readURL(this);">
                    <br><img id="ulala" src="{{ url('/public/upload/amino/'.$amino->picture) }}"></br>
                    @if($errors->has('picture')) <p class="help-block">{{ $errors->first('picture') }}</p> @endif
                </div>  <!--xde dlm table, so nak kne buat or mcm mne? sbb niyh nak upload pic-->

                <div class="">  <!-- dlm details ad lgi info, klau dlm db nak tgok mcm mne?-->
                    <br><br><h2 for="name"><u>Details Information</u></h2>
                    <div class="form-group"><br>
                                
                        <div class="form-group @if($errors->has('symbol')) has-error @endif"> <!--ibarat bukak tutup php-->
                            <label for="name">Symbol</label>
                            <input type="text" id="symbol" class="form-control" name="symbol" value="{{$amino->symbol}}">
                            @if($errors->has('symbol')) <p class="help-block">{{ $errors->first('symbol') }}</p> @endif
                        </div>
                            <div class="form-group @if($errors->has('polarity')) has-error @endif"> <!--ibarat bukak tutup php-->
                                <label for="name">Polarity</label>
                                <input type="hidden" id="polarity" name="polarity" value="{{$amino->polarity}}">
                                <select class="form-control" id="polarity" name="polarity" style="margin-right:100%">
                                   <option value="Polar">Polar</option>
                                   <option value="Non-Polar">Non-Polar</option>
                                </select>
                                @if($errors->has('polarity')) <p class="help-block">{{ $errors->first('polarity') }}</p> @endif
                            </div>
                            <div class="form-group @if($errors->has('acidity')) has-error @endif">
                                <label for="name">Acidity</label>
                                <input type="hidden" id="acidity" name="acidity" value="{{$amino->acidity}}">
                                <select class="form-control" id="acidity" name="acidity" style="margin-right:100%">
                                    <option value="Acidic">Acidic</option>
                                    <option value="Neutral">Neutral</option>
                                    <option value="Basic">Basic</option>
                                </select>
                                @if($errors->has('acidity')) <p class="help-block">{{ $errors->first('acidity') }}</p> @endif
                            </div>
                            <div class="form-group @if($errors->has('codon')) has-error @endif">
                                <label for="name">Codon</label>
                                <input type="text" id="codon" class="form-control" name="codon" value="{{$amino->codon}}">
                                @if($errors->has('codon')) <p class="help-block">{{ $errors->first('codon') }}</p> @endif
                            </div>
                            <div class="form-group @if($errors->has('esential')) has-error @endif">
                                <label for="name">Essential</label>
                                <input type="hidden" id="esential" name="esential" value="{{$amino->esential}}">
                                <select class="form-control" id="esential" name="esential" style="margin-right:100%">
                                    <option value="Essential">Essential</option>
                                    <option value="Non-Essential">Non-Essential</option>
                                </select>
                                @if($errors->has('esential')) <p class="help-block">{{ $errors->first('esential') }}</p> @endif
                            </div>
                            <div class="form-group @if($errors->has('isoelectric')) has-error @endif">
                                <label for="name">Isoelectric Point</label>
                                <input type="text" id="isoelectric" class="form-control" name="isoelectric" value="{{$amino->isoelectric}}">
                                @if($errors->has('isoelectric')) <p class="help-block">{{ $errors->first('isoelectric') }}</p> @endif
                            </div>
                            <div class="form-group @if($errors->has('formula')) has-error @endif">
                                <label for="name">Formula</label>
                                <input type="text" id="formula" class="form-control" name="formula" value="{{$amino->formula}}">
                                @if($errors->has('formula')) <p class="help-block">{{ $errors->first('formula') }}</p> @endif
                            </div>
                            <div class="form-group @if($errors->has('iupac')) has-error @endif">
                                <label for="name">IUPAC Name</label>
                                <input type="text" id="iupac" class="form-control" name="iupac" value="{{$amino->iupac}}">
                                @if($errors->has('iupac')) <p class="help-block">{{ $errors->first('iupac') }}</p> @endif
                            </div>
                            <div class="form-group @if($errors->has('molar')) has-error @endif">
                                <label for="name">Molar Mass</label>
                                <input type="text" id="molar" class="form-control" name="molar" value="{{$amino->molar}}">
                                @if($errors->has('molar')) <p class="help-block">{{ $errors->first('molar') }}</p> @endif
                            </div>
                            <div class="form-group @if($errors->has('hydropathy')) has-error @endif">
                                <label for="name">Hydropathy</label>
                                <input type="text" id="hydropathy" class="form-control" name="hydropathy" value="{{$amino->hydropathy}}">
                                @if($errors->has('hydropathy')) <p class="help-block">{{ $errors->first('hydropathy') }}</p> @endif
                            </div>
                            <div class="form-group @if($errors->has('melting')) has-error @endif">
                                <label for="name">Melting Point</label>
                                <input type="text" id="melting" class="form-control" name="melting" value="{{$amino->melting}}">                            @if($errors->has('melting')) <p class="help-block">{{ $errors->first('melting') }}</p> @endif
                            </div>
                            <div class="form-group @if($errors->has('boiling')) has-error @endif">
                                <label for="name">Boiling Point</label>
                                <input type="text" id="boiling" class="form-control" name="boiling" value="{{$amino->boiling}}">
                                @if($errors->has('boiling')) <p class="help-block">{{ $errors->first('boiling') }}</p> @endif
                            </div>
                            <div class="form-group @if($errors->has('density')) has-error @endif">
                                <label for="name">Density</label>
                                <input type="text" id="density" class="form-control" name="density" value="{{$amino->density}}">
                                @if($errors->has('density')) <p class="help-block">{{ $errors->first('density') }}</p> @endif
                            </div>
                            <div class="form-group @if($errors->has('water')) has-error @endif">
                                <label for="name">Water Solubility</label>
                                <input type="text" id="water" class="form-control" name="water" value="{{$amino->water}}">
                                @if($errors->has('water')) <p class="help-block">{{ $errors->first('water') }}</p> @endif
                            </div>
                        
                    </div>
                </div>

                <br>
                <button type="submit" class="btn btn-success">UPDATE</button> &nbsp;
                <a class="btn btn-danger" href="{{URL::route('amino_index')}}">CANCEL</a>
                <br><br><br>
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