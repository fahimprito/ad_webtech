@extends('main')
@section('content')


<div class="contrainer py-2">
    <div class="row ">
        <div class="col-2">
        </div>
        <div class="col-8 text-center">
            <h3>student list </h3>
        </div>
    </div>



    <div class="row py-5">
        <div class="col-2">
            <nav class="nav flex-column">
                <a class="nav-link" href="{{route('addstudent')}}">Add Student</a>
            </nav>

        </div>
        <div class="col-8 text-center">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#ID</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                
                @foreach($data as $datas)
                    <tr>
                        <td>{{$datas->id}}</td>
                        <td>{{$datas->name}}</td>
                        <td>{{$datas->email}}</td>
                        <td>
                            <a href="{{route('studentedit' , ['id'=>$datas->id] )}}">
                            <button type="button" class="btn btn-outline-primary btn-sm" >Edit</button>
                            </a>

                            <a href="{{route('studentdelete' , ['id'=>$datas->id] )}}">
                            <button type="button" class="btn btn-outline-danger btn-sm" >Delete</button>
                            </a>
                            
                            
                        </td>

                    </tr>
                    
                @endforeach

                
            </table>
            <nav aria-label="Page navigation example">
                {{$data->links('pagination::bootstrap-5')}}
            </nav>
            
            
            
        </div>
        <div class="col-2">
            
        </div>
    </div>
    
    
</div>
@endsection


