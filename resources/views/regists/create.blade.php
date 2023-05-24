@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __(' Registration ') }}</div>

                <div class="card-body">
                                        <h1>Registration</h1>
                            {!! Form::open(['url' => 'registration','method'=>'Post']) !!}
                                <div class="form-group">
                                    {{Form::label('name','Student Name',['class'=>'fs-3 form-label'])}}
                                    {{Form::text('name','',['class'=>'form-control'])}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('code','academic number',['class'=>'fs-3 form-label'])}}
                                    {{Form::text('code','',['class'=>'form-control'])}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('department_name','Department Name',['class'=>'fs-3 form-label'])}}
                                    {{Form::text('department_name','',['class'=>'form-control'])}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('course_name','course ',['class'=>'fs-3 form-label'])}}
                                    {{Form::text('course_name','',['class'=>'form-control'])}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('need_degree','need Course_degree',['class'=>'fs-3 form-label'])}}
                                    {{Form::text('need_degree','',['class'=>'form-control'])}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('teacher_name','teacher_name',['class'=>'fs-3 form-label'])}}
                                    {{Form::text('teacher_name','',['class'=>'form-control'])}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('need_id','need ID',['class'=>'fs-3 form-label'])}}
                                    {{Form::text('need_id','',['class'=>'form-control'])}}
                                </div>
                                <div class="form-group">
                                    {{Form::submit('submit',['class' =>'btn btn-primary m-3 float-end'])}}
                                </div>
                            {!! Form::close() !!}


                </div>
            </div>
        </div>
    </div>
</div>

@endsection

