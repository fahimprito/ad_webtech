@extends('main')
@section('content')

<div class="row ">
    <div class="col-2">
        <a class="nav-link" href="{{route('home')}}"><< Back</a>
    </div>
</div>

<div class="container py-5">
    
    <div class="row justify-content-center">
        <div class="col-md-10">
            
            <div class="card">
                <div class="card-header"><h3>Add New Student</h3></div>

                <div class="card-body">
                    <form action="{{route('addstudent')}}" class="form-group" method="post">
                        @if(Session::has('success'))
                        <div class="alert alert-success"> {{Session::get('success')}} </div>
                        @endif
                        @if(Session::has('fail'))
                        <div class="alert alert-danger"> {{Session::get('fail')}} </div>
                        @endif

                        {{csrf_field()}}
                        
                        <div class="row mb-3">
                            <label for="name" class="col-sm-2 col-form-label">student Name</label>
                            <div class="col-sm-10">
                                <input type="text" id="form3Example1cg" name="name" class="form-control" value="{{old('name')}}"/>
                                @error('name')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="email" class="col-sm-2 col-form-label">Email </label>
                            <div class="col-sm-10">
                                <input type="email" id="form3Example1cg" name="email" class="form-control" value="{{old('email')}}"/>
                                @error('email')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-5">
                            
                            
                            
                            <div class=" d-grid gap-2 col-3 mx-auto">
                                <button type="submit" class="btn btn-primary "> ADD </button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection