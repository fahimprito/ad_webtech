
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Team</title>
</head>
<body>
    @extends('layouts.app')
    @section('content')

    <h1>Welcome to your profile {{$name}}</h1>
    <p>ID: {{$id}}</p>
    <p>DOB: {{$dob}}</p>

    <h2>Our Team Member</h2>
    @foreach($names as $n)
    <li>{{$n}}</li>
    @endforeach
    
    <br><br><br><br><p>{{$message}}</p>

    @endsection
    
</body>
</html>

