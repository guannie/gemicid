@extends('layouts.admin')

@section('content')

<div id="page-wrapper">

    <div class="pull-right">
        <a class="btn btn-small btn-success" href="{{URL::route('gene_create')}}">ADD</a> &nbsp;
        <a class="btn btn-small btn-default" onclick="myFunction()">PRINT</a> &nbsp;
        <a class="btn btn-small btn-warning" href="{{URL::route('gene_index')}}">BACK</a>
    </div>

<?php $num=1 ?>
@foreach($gene as $value)
<h1><font color="black"><?php echo $num ?></font></h1>
<p align="middle"><img src="{{ url('/public/upload/gene/'.$value->picture) }}"></p>  <!--nak paparkan picture-->

<div class="jumbotron text-left" style="background-color:#E6E6FA">
    <h2 class="jumbotron text-center">{{strtoupper ($value->name) }}</h2>
    <p>
        <strong>Serial (Accession Number):</strong> {{strtoupper ($value->serial) }}<br>
        <strong>Locus:</strong> {{strtoupper ($value->locus) }}<br>
        <strong>Reference:</strong> {{strtoupper ($value->reference) }}<br>
        <strong>Fasta Sequence:</strong> {{strtoupper ($value->fastaseq) }}<br>
        <strong>Extra Remarks (Link/Comment):</strong> {{strtoupper ($value->comment) }}<br>
    </p>
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