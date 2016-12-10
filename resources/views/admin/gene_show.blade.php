@extends('layouts.admin')

@section('content')

<div id="page-wrapper"><br>

<div id="foo" align="right">
    <a class="btn btn-small btn-success" href="{{URL::route('gene_create')}}">ADD</a>
    <a class="btn btn-small btn-default" onclick="myFunction()">PRINT</a>
    <a class="btn btn-small btn-warning" href="{{URL::route('gene_index')}}">BACK</a>
</div>

<div>
    <br>
    <h2 class="jumbotron text-center" style="background-color:#E6E6FA"><font color="black">{{strtoupper ($gene->name) }}</font></h2>

<!--<h1 align="middle"><img src="../uploads/{{ $gene->picture }} "></h1>  <!--nak paparkan picture-->

<div class="row">
    <div class="col-lg-7">
    <pre><br>
        <strong>Serial (Accession Number):</strong> {{strtoupper ($gene->serial) }}<br>
        <strong>Locus:</strong> {{strtoupper ($gene->locus) }}<br>
        <strong>Reference:</strong> {{strtoupper ($gene->reference) }}<br>
        <strong>Fasta Sequence:</strong> {{strtoupper ($gene->fastaseq) }}<br>
        <strong>Extra Remarks (Link/Comment):</strong> {{strtoupper ($gene->comment) }}<br>
    </pre>
</div>
<div class="col-lg-5" align="center">
    <!--<img src="http://img.ffffound.com/static-data/assets/6/e5da43f6dd347d7996a3e3cc7b2b4fe7e2438df0_m.jpg">-->
    <img src="{{ url('/public/upload/gene/'.$gene->picture) }} "> 
</div>

</div>
 
    <br><br>
</div>

</div><!--end of page-wrapper"-->

    </div><!-- /#page-wrapper -->
</div><!-- /#wrapper -->
<br><br>
@endsection

@section('extraScript')
<script>
function myFunction() {
    window.print();
    }
</script>
@endsection