
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    @extends('layouts.app')
    @section('content')
    <div>
        <h4>Products list and prices:</h4>
        <br>
    </div>

    @foreach($product_name as $x => $y)
    <li>{{$x}}={{$y}}</li> 
    @endforeach
    

    <br><br><br><br><p>{{$message}}</p>
    @endsection
</body>
</html>

