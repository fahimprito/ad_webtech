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
                <div class="card-header"><h3>Edit Student</h3></div>

                <div class="card-body">
                    <form action="{{route('studentedit',$user->id)}}" class="form-group" method="post">
                        {{csrf_field()}}
                        @method('put')
                        
                        <div class="row mb-3">
                            <label for="name" class="col-sm-2 col-form-label">student Name</label>
                            <div class="col-sm-10">
                                <input type="text" id="form3Example1cg" name="name" class="form-control" value="{{$user->name}}"/>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="email" class="col-sm-2 col-form-label">Email </label>
                            <div class="col-sm-10">
                                <input type="email" id="form3Example1cg" name="email" class="form-control" value="{{$user->email}}"/>
                            </div>
                        </div>
                        
                        <div class="row mb-5">
                            <div class=" d-grid gap-2 col-3 mx-auto">
                                <button type="submit" class="btn btn-primary "> Update </button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection