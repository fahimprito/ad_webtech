@extends('main')
@section('content')

<div class="row">
    <div class="col-2">
        <form action="{{route('login')}}" class="form-group" method="post">

            @if(Session::has('success'))
            <div class="alert alert-success"> {{Session::get('success')}} </div>
            @endif
            @if(Session::has('fail'))
            <div class="alert alert-danger"> {{Session::get('fail')}} </div>
            @endif


            {{csrf_field()}}

            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email" >
                @error('email')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password"  class="form-control" id="password">
                @error('password')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">login</button>
            <div class="text-center">
                <p>creat account <a href="{{route('registration')}}">Register</a></p>
            </div>
            
        </form>
    </div>

</div>



@endsection
