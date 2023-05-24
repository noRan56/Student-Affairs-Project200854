@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Department') }}</div>
                
                            <h1>Add Department</h1>
                            {!! Form::open(['url' => 'departments','method'=>'POST']) !!}
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
                                    {{Form::submit('submit',['class' =>'btn btn-primary m-3 float-end'])}}
                                </div>
                            {!! Form::close() !!}


                <div class="card-body">


                </div>
            </div>
        </div>
    </div>
</div>



@endsection

