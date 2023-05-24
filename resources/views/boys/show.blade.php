@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Students') }}</div>

                <div class="card-body">
                                <h1>{{$boy->name}}</h1>
                    {!! Form::open(['url' => ['student', $boy->id],'method'=>'post','class'=>'d-inline']) !!}
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