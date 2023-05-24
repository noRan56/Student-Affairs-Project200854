@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Course ') }}</div>

                <div class="card-body">
                                    <h1>Add Course</h1>
                        {!! Form::open(['url' => 'courses','method'=>'Post']) !!}
                            <div class="form-group">
                                {{Form::label('name','Name',['class'=>'fs-3 form-label'])}}
                                {{Form::text('name','',['class'=>'form-control'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('code','Code',['class'=>'fs-3 form-label'])}}
                                {{Form::text('code','',['class'=>'form-control'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('department_id','Department ID',['class'=>'fs-3 form-label'])}}
                                {{Form::text('department_id','',['class'=>'form-control'])}}
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

