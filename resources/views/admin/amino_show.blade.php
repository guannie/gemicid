@extends('layouts.admin')

@section('content')


<div id="page-wrapper"><br>

    <div id="foo"align="right">
            <a class="btn btn-small btn-success" href="{{URL::route('amino_create')}}">ADD</a>&nbsp;
            <a class="btn btn-small btn-default" onclick="myFunction()">PRINT</a>&nbsp;
            <a class="btn btn-small btn-warning" href="{{URL::route('amino_index')}}">BACK</a>
    </div>

<div>
    <br>
    <h2 class="jumbotron text-center" style="background-color:#E6E6FA"><font color="black">{{strtoupper ($amino->name) }}</font></h2>
 
    <div class="row">
        <div class="col-lg-7">
            <pre><br>
                <strong>Symbol:</strong> {{strtoupper ($amino->symbol) }}<br>
                <strong>Polarity:</strong> {{strtoupper ($amino->polarity) }}<br>
                <strong>Acidity:</strong> {{strtoupper ($amino->acidity) }}<br>
                <strong>Codon:</strong> {{strtoupper ($amino->codon) }}<br>
                <strong>Essential:</strong> {{strtoupper ($amino->esential) }}<br>
                <strong>Isoelectric Point:</strong> {{strtoupper ($amino->isoelectric) }}<br>
                <strong>Formula:</strong> {{strtoupper ($amino->formula) }}<br>
                <strong>IUPAC Name:</strong> {{strtoupper ($amino->iupac) }}<br>
                <strong>Molar Mass:</strong> {{strtoupper ($amino->molar) }}<br>
                <strong>Hydropathy:</strong> {{strtoupper ($amino->hydropathy) }}<br>
                <strong>Melting Point:</strong> {{strtoupper ($amino->melting) }}<br>
                <strong>Boiling Point:</strong> {{strtoupper ($amino->boiling) }}<br>
                <strong>Density:</strong> {{strtoupper ($amino->density) }}<br>
                <strong>Water Solubility:</strong> {{strtoupper ($amino->water) }}<br>
            </pre>
        </div>
        <div class="col-lg-5" align="center">
            <!-- <img src="http://img.ffffound.com/static-data/assets/6/e5da43f6dd347d7996a3e3cc7b2b4fe7e2438df0_m.jpg">-->
            <img src="{{ url('/public/upload/amino/'.$amino->picture) }} "> 
        </div>

        
    </div>
    <!-- <div class="pull-right">
        <a class="btn btn-small btn-warning" href="{{URL::route('amino_index')}}">CLOSE</a>
        <a class="btn btn-small btn-success" href="{{URL::route('amino_create')}}">ADD</a>
        <a class="btn btn-small btn-default" onclick="myFunction()">PRINT</a>
    </div> -->
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