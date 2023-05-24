@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __(' Registration ') }}</div>

                <div class="card-body">
                                      {!! Form::open(['url' => ['generate', $regist->id],'method'=>'post','class'=>'d-inline']) !!}
                        
                        <table class="table table-hover table-dark">
                            <thead>
                              <tr>
                                
                                <th scope="col">ID</th>
                                <th scope="col">NAME</th>
                                <th scope="col">course</th>
                              </tr>
                            </thead>
                            <tbody>
                                @if ($regist->course_name == $regist->id)
                                <tr>
                                <td>{{$regist->code}}</td>
                                <td>{{$regist->name}}</td>
                                <td>{{$regist->course_name}}</td>
                            </tr>
                                @endif
                              
                                
                                
                            
                            </tbody>
                          </table>


                </div>
            </div>
        </div>
    </div>
</div>


     
@endsection