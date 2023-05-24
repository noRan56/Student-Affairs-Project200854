@extends('layouts.app')

@section('content')
<h1>Depatments</h1>
@if(count($departments)>0)
    @foreach ($departments as $department)
        <div class="card">
            <div class="card-body ">
                <div class="card-title ">
                    <h5>Name :<a href="/departments/{{$department->id}}">{{$department->name}}</a></h5>
                    <h5>Code :{{$department->code}}</h5>
                    <h5>ID :{{$department->id}}</h5 >
                </div>
            </div>
        </div>
    @endforeach
    
@else
    <p>No Department Avaliable</p>    
@endif
@auth
<a href="/departments/create" class="btn btn-primary m-2 float-end" >Add Department</a>
@endauth
@endsection