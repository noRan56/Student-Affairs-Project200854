@extends('layouts.app')

@section('content')
<h1>teachers</h1>
@if(count($teachers)>0)
    @foreach ($teachers as $teacher)
        <div class="card">
            <div class="card-body ">
                <div class="card-title ">
                    <h5>Name :<a href="/teacher/{{$teacher->id}}">{{$teacher->name}}</a></h5>
                    <h5>Code :{{$teacher->code}}</h5>
                    <h5>ID :{{$teacher->id}}</h5 >
                </div>
            </div>
        </div>
    @endforeach
    
@else
    <p>No teachers  Avaliable</p>    
@endif
@auth
<a href="/teacher/create" class="btn btn-primary m-2 float-end" >Add teachers</a>
@endauth

@endsection