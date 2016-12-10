<?php
use JasperPHP\JasperPHP;
?>

@extends('layouts.admin')

@section('content')


<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td>No</td>
			<td>Name</td>
			<td>Username</td>
			<td>Email</td>
			<td>Actions</td>
		</tr>
	</thead>
	<tbody>

	<?php $num=1 ?>
	@foreach($users as $value)
		<tr>
			<td><?php echo $num ?></td>
			<td>{{ $value->name}}</td>
			<td>{{ $value->username }}</td>
			<td>{{ $value->email}}</td>
			<td>
				<a class="btn btn-small btn-info" href="">Edit</a>
				<a class="btn btn-small btn-danger" href="">Delete</a>
			</td>
		</tr>
		<?php $num++ ?>
	@endforeach
	</tbody>
</table>
</div>
</body>
</html>