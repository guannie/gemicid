<!doctype html>
<html>
<head>
    <title>Laravel Form!</title>

    <!-- load bootstrap -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <style>
        body    { padding-bottom:40px; padding-top:40px; }
    </style>
</head>
<body class="container">

<nav class="navbar navbar-inverse">
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::route('student_index') }}">View All Students</a></li>
        <li><a href="{{URL::route('student_create')}}">Create a Student</a>
    </ul>
</nav>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<div class="row">
    <div class="col-sm-8 col-sm-offset-2">
        <div class="page-header">
            <h1><span class="glyphicon glyphicon-user"></span> Student Info</h1>
        </div>

        <!-- FORM STARTS HERE -->
        <form method="POST" action="" novalidate>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group @if($errors->has('name')) has-error @endif">
                <label for="name">Name</label>
                <input type="text" id="name" class="form-control" name="name" placeholder="Your Name" value="{{$student->name}}">
                @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
            </div>

            <button type="submit" class="btn btn-success">Register</button>

        </form>

    </div>
</div>

</body>
</html>