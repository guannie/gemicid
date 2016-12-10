<!DOCTYPE html>
<html>
<head>
    <title>Look! I'm CRUDding</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('student_index') }}">View All Students</a></li>
        <li><a href="{{URL::route('student_create')}}">Create a Student</a>
    </ul>
</nav>

<h1>Showing {{ $user->name }}</h1>
	
	<div class="jumbotron text-center">
		<h2>{{ $user->name }}</h2>
		<p>
			<strong>Email:</strong> {{ $user->email }}<br>
		</p>
	</div> 
</div>
</body>
</html>