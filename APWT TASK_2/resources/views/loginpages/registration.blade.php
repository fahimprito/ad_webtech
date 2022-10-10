<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RegistrationPages</title>
</head>
<body>
    @extends('layouts.app')
    @section('content')

    <h2>Registration</h2>

    <form action="{{route('registration')}}" class="form-group" method="post">

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
            <span>First Name</span>
            <input type="text" name="firstname" value="{{old('firstname')}}" class="form-control">
            @error('firstname')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-md-4 form-group">
            <span>Last Name</span>
            <input type="text" name="lastname" value="{{old('lastname')}}" class="form-control">
            @error('lastname')
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
            <span>Password</span>
            <input type="password" name="password" value="{{old('password')}}" class="form-control">
            @error('password')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        
        <div class="col-md-4 form-group">
            <span>Gender</span>
            <input type="radio" name="gender"value="male">
                <label for="male">Male</label>
            <input type="radio" name="gender"value="female">
                <label for="female">Female</label>
            @error('gender')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-md-4 form-group">
            <span>Date of Birth</span>
            <input type="date" name="dob" value="{{old('dob')}}" class="form-control">
            @error('dob')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        
        <div class="col-md-4 form-group">
            <span>Phone No</span>
            <input type="text" name="phone" value="{{old('phone')}}" class="form-control">
            @error('phone')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>



    <br>
        <input type="submit" name="submit" value="Register" class="btn btn-success">
    </form>    

    @endsection 
    
</body>
</html>