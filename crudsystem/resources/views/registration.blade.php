@extends('main')
@section('content')

<div class="row">
    <div class="col-2">
        <form action="{{route('registration')}}" class="form-group" method="post">
            @if(Session::has('success'))
            <div class="alert alert-success"> {{Session::get('success')}} </div>
            @endif
            @if(Session::has('fail'))
            <div class="alert alert-danger"> {{Session::get('fail')}} </div>
            @endif

            {{csrf_field()}}

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="name" name="name" class="form-control" id="name" >
                @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                @error('email')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                @error('password')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="text-center">
                <p>already have account ? <a href="{{route('login')}}">login</a></p>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>

</div>



@endsection
