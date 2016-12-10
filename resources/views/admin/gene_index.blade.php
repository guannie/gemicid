<?php
use JasperPHP\JasperPHP;
?>

@extends('layouts.admin')

@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><b>GENES BANK<b></h1>
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->

  <div class="row">
  <div class="pull-left">
    <form action="" method="GET" id="filterForm">
      <input type="hidden" name="filter" id="filter">
      <h4>SORTING:</h4>
      <select class="form-control" id="fp" name="category" onchange="result()" style="margin-right:50%">
        <option value="0">ID</option>
        <option value="1">Name</option>
      </select>
    </form><br><br>
  </div><br><br>

<!--added for jreport!-->
<form role="form" action="cetak_surat_genes" method="get" target="_blank">
    <div class="col-md-6 col-sm-12 nopadding" style="display: inline-block; vertical-align:middle">
        <label class="col-md-1 col-sm-2 nopadding"></label>
        <div class="col-md-8 col-sm-8 nopadding pull-right btn-toolbar">
            <input type="submit" name="btnpdf" value="PRINT PDF" class="btn btn-sm purple-seance pull-right text-right btn-info tooltips">
            <input type="submit" name="btnxls" value="PRINT XLS" class="btn btn-sm purple-seance pull-right text-right btn-info tooltips">
        </div>
    </div>
</form> 

  <div class="pull-right">
    <a class="btn btn-success" href="{{URL::route('gene_create')}}">ADD</a> &nbsp;
    <a class="btn btn-warning" href="{{URL::route('gene_showAll')}}">SHOW ALL</a>
    <br><br>
  </div>
</div>
<hr>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<div>
<table id="gene" class="table table-striped table-bordered dataTable" style="background-color:#E6E6FA">
    <thead>
        <tr>
            <td>NO</td>
            <td>Name</td>
            <td>Details Information</td>
            <td>Actions</td>
        </tr>
    </thead>
</tbody>

<?php $num=1 ?>
@foreach($gene as $value)
<tr>
    <td align="center"><?php echo $num ?></td> <!--value bley letak name ap2-->
    <td>
      <a class="btn btn-link" href="{{URL::route('gene_show', array($value->id))}}">{{strtoupper($value->name)}}</a>
    </td>
    <td>
        <a class="btn btn-default btn-sm" href="{{URL::route('gene_show', array($value->id))}}" data-toggle="modal" data-target="#">Show Details</a>
        <!--mcm niyh ke? tpi how nak link kan modal? href n data target xsama ke?-->
    </td>
    <td>
        <!--<a class="btn btn-small btn-success" href="{{URL::route('amino_show', array($value->id))}}">Show</a>-->
        <a class="btn btn-small btn-info" href="{{URL::route('gene_edit', array($value->id))}}">Edit</a> &nbsp;
        <a class="btn btn-small btn-danger" onclick="deleteGene({{$value->id}})">Delete</a>
        <!--<form class="delete" action="{{ route('amino_delete', $value->id) }}" method="POST">--> 
    </td>
</tr>
<?php $num++?>
@endforeach <!--function loop-->


</tbody>
</table>
</div>   

<!-- <div class="">
    <a href="#{{URL::to('cetak_surat')}}" class="btn btn-sm btn-info tooltips" data-original-title="CETAK"  target="_blank">PDF REPORT</a>
</div> -->

<br><br>

</div>
</div><!--end of page-wrapper"-->
 
    </div><!-- /#page-wrapper -->
</div><!-- /#wrapper -->

<br><br>

@endsection

@section('extraScript')
<script type="text/javascript">

$('#gene').dataTable();

function result()
{
  document.getElementById('filter').value = document.getElementById('fp').value;
  document.getElementById('filterForm').submit();
}

function deleteGene(id)
{
  swal({
    title: "Are you sure?",
    text: "You want to delete the selected data?",
    type: "warning",
    showCancelButton: true,
    confirmButtonClass: 'btn-danger',
    confirmButtonText: 'Yes',
    cancelButtonText: "No",
    closeOnConfirm: false,
    closeOnCancel: false
  }, function(isConfirm) { 
    if(isConfirm) {
      // $.blockUI({ message: '<h1><img src="busy.gif" /> Just a moment...</h1>' });
      $.ajax(
      {
        type: "get",
        url:  "{{URL::to('gene_delete')}}"+"/"+id,
        success: function(data){
        }
      })
      .done(function(data) {
        swal("Deleted!", "Successfully DELETED!", "success");
        location.reload();
        
      });
    }else {
    swal("Cancelled", "Deletion Canceled!", "error");
    }
  });
}

</script>
@endsection

<!-- @section('extraScript')
<script type="text/javascript">
    
    @foreach($gene as $value)
    document.querySelector('#{{$value->name}}').onclick = function(){
        swal({
          title: "Are you sure?",
          text: "You will not be able to recover this Gene details!",
          type: "warning",
          showCancelButton: true,
          confirmButtonClass: 'btn-danger',
          confirmButtonText: 'Yes, delete it!',
          cancelButtonText: "No, cancel plx!",
          closeOnConfirm: false,
          closeOnCancel: false
        },
        function(isConfirm){
          if (isConfirm){
            swal("Deleted!", "Your Gene details has been deleted!", "success");
            document.ready(window.setTimeout(location.href = " {{URL::route('gene_delete', array($value->id))}}",5000));

            $(window).load(function() {
               window.setTimeout(window.location.href = " {{URL::route('gene_delete', array($value->id))}}",5000);
            });


           ;
          } else {
            swal("Cancelled", "Your Gene details is safe :)", "error");
          }
        });
      };
      @endforeach

</script>
@endsection -->