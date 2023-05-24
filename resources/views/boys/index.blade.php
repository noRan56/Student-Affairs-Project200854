@extends('layouts.app')

@section('content')
<h1>students</h1>
@if(count($boys)>0)
    @foreach ($boys as $boy)
        <div class="card">
            <div class="card-body ">
                <div class="card-title ">
                    <h5>Name :<a href="/student/{{$boy->id}}">{{$boy->name}}</a></h5>
                    <h5>Code :{{$boy->code}}</h5>
                    <h5>ID :{{$boy->id}}</h5 >
                </div>
            </div>
        </div>
    @endforeach
    
@else
    <p>No teachers  Avaliable</p>    
@endif
@auth
<a href="/student/create" class="btn btn-primary m-2 float-end" >Add student</a>
@endauth
@endsection