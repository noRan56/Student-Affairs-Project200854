@extends('layouts.app')

@section('content')
<h1>Courses</h1>
@if(count($courses)>0)
    @foreach ($courses as $course)
        <div class="card">
            <div class="card-body ">
                <div class="card-title ">
                    <h5>ID :{{$course->id}}</h5>
                    <h5>Name :<a href="/courses/{{$course->id}}">{{$course->name}}</a></h5>
                    <h5>Code :{{$course->code}}</h5>
                    <h5>Department ID :{{$course->department_id}}</h5>
                    <h5>Need ID :{{$course->need_id}}</h5>
                </div>
            </div>
        </div>
        
    @endforeach
@else
    <p>No Courses Avaliable</p>    
@endif
@auth
<a href="/courses/create" class="btn btn-primary m-2 float-end" >Add Course</a>
@endauth
@endsection