<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
    @extends('layouts.app')
    @section('content')
    <h2>Contact US</h2>

    <form action="{{route('contact')}}" class="form-group" method="post">
    {{csrf_field()}}

    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <div class="col-md-4 form-group">
            <span>Name</span>
            <input type="text" name="name" value="{{old('name')}}" class="form-control">
            @error('name')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-md-4 form-group">
            <span>Email</span>
            <input type="text" name="email" value="{{old('email')}}" class="form-control">
            @error('email')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-md-4 form-group">
            <span>Subject</span>
            <input type="text" name="subject" value="{{old('subject')}}" class="form-control">
            @error('subject')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-md-4 form-group">
            <span>Message</span>
            <textarea class="form-control" rows="3" name="message" value="{{old('message')}}" placeholder="Type your thoughts..."></textarea>
            @error('message')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <br>
        <input type="submit" name="submit" value="Submit" class="btn btn-success">
    </form> 

    @endsection   
</body>
</html>

