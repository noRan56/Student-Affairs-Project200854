@extends('layouts.app')

@section('content')
<h1> HELLO IN Registration</h1>
@auth
<a href="/registration/create" class="btn btn-primary m-2 float-end" >Registration</a>
@endauth
@endsection