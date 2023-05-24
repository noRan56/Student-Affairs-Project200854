@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Course Details') }}</div>

                <div class="card-body">
                                    <h1>{{$course->name}}</h1>
                        {!! Form::open(['url' => ['courses', $course->id],'method'=>'post','class'=>'d-inline']) !!}
                        @auth
                        <a href="/generate/{{$course->id}}" class="btn btn-primary m-2 float-end" >generate</a>
                        @endauth
                                    {{Form::hidden('_method','DELETE')}}
                                    <div class="form-group">
                                        @auth
                                         {{Form::submit('Delete',['class' =>'btn btn-danger float-end'])}}
                                         @endauth
                                    </div>
                                {!! Form::close() !!}


                </div>
            </div>
        </div>
    </div>
</div>









@endsection

