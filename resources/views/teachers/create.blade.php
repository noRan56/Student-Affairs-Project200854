@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Teacher') }}</div>

                <div class="card-body">
                                        <h1>Add Teacher</h1>
                            {!! Form::open(['url' =>'teacher','method'=>'POST']) !!}
                            @csrf
                                <div class="form-group">
                                    {{Form::label('name','Name',['class'=>'fs-3 form-label'])}}
                                    {{Form::text('name','',['class'=>'form-control'])}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('code','Code',['class'=>'fs-3 form-label'])}}
                                    {{Form::text('code','',['class'=>'form-control'])}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('password','password',['class'=>'fs-3 form-label'])}}
                                    {{Form::text('password','',['class'=>'form-control'])}}
                                    
                                <div class="form-group">
                                    {{Form::label('email','Email',['class'=>'fs-3 form-label'])}}
                                    {{Form::text('email','',['class'=>'form-control'])}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('course_id','course_id',['class'=>'fs-3 form-label'])}}
                                    {{Form::text('course_id','',['class'=>'form-control'])}}
                            </div>
                                <div class="form-group">
                                    {{Form::submit('add',['class' =>'btn btn-primary m-3 float-end'])}}
                                </div>
                            {!! Form::close() !!}


                </div>
            </div>
        </div>
    </div>
</div>





@endsection