@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Upload Photo</div>

                    <div class="card-body">
                        {!! Form::open(['method'=>'PUT', 'action'=>'UserController@uploadTasveer', 'files'=>true]) !!}
                            <input type="hidden" name="user_id" value="{{$user->id}}">
                        <div class="row">
                            <div class="sm-8">
                                {!! Form::file('path', ['class'=>'form-control']) !!}
                            </div>
                            <div class="sm-4 pl-3">
                                {!! Form::submit('Save', ['class'=>'btn btn-primary']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
