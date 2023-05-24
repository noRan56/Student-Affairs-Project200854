@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Teacher') }}</div>

                <div class="card-body">
                                        <h1>edit Teacher</h1>
                            {!! Form::open(['url' =>'url' => ['teacher', {{$teacher->id}},'edit'],'method'=>'POST']) !!}
                            @csrf
                                <div class="form-group">
                                    {{Form::label('name','Name',['class'=>'fs-3 form-label'])}}
                                    <input class="form-control" type="text" name="name" value="{{$teacher->name}}">
                                </div>
                                <div class="form-group">
                                    {{Form::label('code','Code',['class'=>'fs-3 form-label'])}}
                                    <input class="form-control"type="text" name="code" value="{{$teacher->code}}">
                                </div>
                                <div class="form-group">
                                    {{Form::label('password','password',['class'=>'fs-3 form-label'])}}
                                    <input class="form-control" type="text" name="password" value="{{$teacher->password}}">
                                    
                                <div class="form-group">
                                    {{Form::label('email','Email',['class'=>'fs-3 form-label'])}}
                                    <input   class="form-control" type="email" name="email" value="{{$teacher->email}}">
                                </div>
                                <div class="form-group">
                                    {{Form::label('course_id','course_id',['class'=>'fs-3 form-label'])}}
                                    <input class="form-control" type="text" name="course_id" value="{{$teacher->course_id}}">
                            </div>

                                <div class="form-group">
                                    
                                    {{Form::submit('edit',['class' =>'btn btn-primary m-3 float-end'])}}
                                    
                                </div>
                            {!! Form::close() !!}


                </div>
            </div>
        </div>
    </div>
</div>

@endsection