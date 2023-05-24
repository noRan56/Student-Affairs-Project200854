@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Teachers') }}</div>

                <div class="card-body">
                                    <h1>{{$teacher->name}}</h1>
                        {!! Form::open(['url' => ['teacher', $teacher->id],'method'=>'post','class'=>'d-inline']) !!}
                                    {{Form::hidden('_method','DELETE')}}
                                    <div class="form-group">
                                        @auth
                                        {{Form::submit('Delete',['class' =>'btn btn-danger float-end'])}}
                                        @endauth
                                    </div>
                                    <div >
                                        @auth
                                        <a href="/teacher/{{$teacher->id}}/edit" class="btn btn-primary m-2 float-end" >edit</a>
                                        @endauth
                                    </div>
                                {!! Form::close() !!}


                </div>
            </div>
        </div>
    </div>
</div>


@endsection