<?php
use JasperPHP\JasperPHP;
?>

@extends('layouts.admin')

@section('content')

<div id="page-wrapper">

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header"><b>AMINO ACID</b></h1>
		</div><!-- /.col-lg-12 -->
	</div><!-- /.row -->

<div class="row">
	<div class="pull-left">
		<h4>SORTING:</h4>
		<form action="" method="GET" id="filterForm">
			<input type="hidden" name="filter" id="filter">
			<select class="form-control" id="fp" name="category" onchange="result()" style="margin-right:50%">
				<option value="1">ID</option>
				<option value="2">Name</option>
			</select>
		</form><br><br>
	</div><br><br>

<!--added for jreport!-->
<form role="form" action="cetak_surat_amino" method="get" target="_blank">
    <div class="col-md-6 col-sm-12 nopadding" style="display: inline-block; vertical-align:middle">
        <label class="col-md-1 col-sm-2 nopadding"></label>
        <div class="col-md-8 col-sm-8 nopadding pull-right btn-toolbar">
            <input type="submit" name="btnpdf" value="PRINT PDF" class="btn btn-sm purple seance pull-right text-right btn-info tooltips"> 
            <input type="submit" name="btnxls" value="PRINT XLS" class="btn btn-sm purple-seance pull-right text-right btn-info tooltips">
        </div>
    </div>
</form> 

	<div class="pull-right">
	    <a class="btn btn-success" href="{{URL::route('amino_create')}}">ADD</a> &nbsp;
	    <a class="btn btn-warning" href="{{URL::route('showAll')}}">SHOW ALL</a> &nbsp; 
	    <br><br>
    </div>
</div>
<hr>
	<!-- will be used to show any messages -->
	@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
	@endif
<div>
	<table id="amino" class="table table-striped table-bordered dataTable" style="background-color:#E6E6FA">
		<thead align="center">
			<tr>
				<td><b>NO</b></td>
				<td><b>NAME</b></td>
				<td><b>DETAILS INFORMATION</b></td>
				<td><b>ACTIONS</b></td>
			</tr>
		</thead>
	<tbody>

	<?php $num=1 ?>
	@foreach($amino as $value)
	<tr>
		<td align="center"><?php echo $num ?></td> <!--value bley letak name ap2-->
		    <td>
			    <a class="btn btn-link" href="{{URL::route('amino_show', array($value->id))}}">{{strtoupper($value->name)}}</p>
			</td>
			<td align="center">
				<a class="btn btn-sm btn-default" href="{{URL::route('amino_show', array($value->id))}}" data-toggle="modal" data-target="#">SHOW DETAILS</a>
				<!--mcm niyh ke? tpi how nak link kan modal? href n data target xsama ke?-->
			</td>
			<td align="center">
				<!--<a class="btn btn-small btn-success" href="{{URL::route('amino_show', array($value->id))}}">Show</a>-->
				<a class="btn btn-sm btn-info" href="{{URL::route('amino_edit', array($value->id))}}">EDIT</a> &nbsp;
				<button class="btn btn-sm btn-danger" onclick="deleteAmino({{$value->id}})">DELETE</button> &nbsp;
				<a class="btn btn-sm btn-primary" href="{{URL::route('amino_print', array($value->id))}}">PRINT</a>
				<!--<form class="delete" action="{{ route('amino_delete', $value->id) }}" method="POST">--> 
			</td>
		</tr>
		<?php $num++?>
		@endforeach <!--function loop-->


	</tbody>
</table>
</div>    

<br><br>

</div>
</div><!--end of page-wrapper"-->

</div><!-- /#page-wrapper -->
</div><!-- /#wrapper -->

<br><br>

@endsection

@section('extraScript')

    

 <script type="text/javascript">

 $('#amino').dataTable();

function result()
{
	document.getElementById('filter').value = document.getElementById('fp').value;
	document.getElementById('filterForm').submit();
}

// $(document).ready(function() {
//     $('#example').DataTable( {
//         "pagingType": "full_numbers"
//     } );
// } );

function deleteAmino(id)
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
				url:  "{{URL::to('amino_delete')}}"+"/"+id,
				success: function(data){
				}
			})
			.done(function(data) {
				swal("DELETE!", "Successfully DELETED!", "success");
				location.reload();
				
			});
  }
  else {
    swal("CANCEL", "Deletion Canceled!", "error");
	 	}
 	});
}

</script>
@endsection