@extends('layouts.admin')

@section('content')

<div id="page-wrapper">

    <div class="pull-right">
        <a class="btn btn-small btn-success" href="{{URL::route('amino_create')}}">ADD</a> &nbsp;
        <a class="btn btn-small btn-default" onclick="myFunction()">PRINT</a> &nbsp;
        <a class="btn btn-small btn-warning" href="{{URL::route('amino_index')}}">BACK</a>
    </div>


<?php $num=1 ?>
@foreach($amino as $value)
<h1><font color="black"><?php echo $num ?></font></h1>
<p align="middle"><img src="{{ url('/public/upload/amino/'.$value->picture) }}"></p>  <!--nak paparkan picture-->

<div class="jumbotron text-left" style="background-color:#E6E6FA">
    <h2 class="jumbotron text-center">{{strtoupper ($value->name) }}</h2>
    <pre><br>
        <strong>Symbol:</strong> {{strtoupper ($value->symbol) }}<br>
        <strong>Polarity:</strong> {{strtoupper ($value->polarity) }}<br>
        <strong>Acidity:</strong> {{strtoupper ($value->acidity) }}<br>
        <strong>Codon:</strong> {{strtoupper ($value->codon) }}<br>
        <strong>Essential:</strong> {{strtoupper ($value->esential) }}<br>
        <strong>Isoelectric Point:</strong> {{strtoupper ($value->isoelectric) }}<br>
        <strong>Formula:</strong> {{strtoupper ($value->formula) }}<br>
        <strong>IUPAC Name:</strong> {{strtoupper ($value->iupac) }}<br>
        <strong>Molar Mass:</strong> {{strtoupper ($value->molar) }}<br>
        <strong>Hydropathy:</strong> {{strtoupper ($value->hydropathy) }}<br>
        <strong>Melting Point:</strong> {{strtoupper ($value->melting) }}<br>
        <strong>Boiling Point:</strong> {{strtoupper ($value->boiling) }}<br>
        <strong>Density:</strong> {{strtoupper ($value->density) }}<br>
        <strong>Water Solubility:</strong> {{strtoupper ($value->water) }}<br>
    </pre>
</div>
<?php $num++?>
@endforeach

</div><!--end of page-wrapper"-->

@endsection

@section('extraScript')
<script>
function myFunction() {
    window.print();
    }
</script>
@endsection