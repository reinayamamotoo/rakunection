@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="/css/register.css">
<div class = "register">
    <div class = "register-in">
        <div class="text-center">
            <h1>Log in</h1>
        </div>
    
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
    
                {!! Form::open(['route' => 'login.post']) !!}
                    <div class="form-group">
                        {!! Form::label('name', 'User ID') !!}
                        {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                    </div>
    
                    <div class="form-group">
                        {!! Form::label('password', 'Password') !!}
                        {!! Form::password('password', ['class' => 'form-control']) !!}
                    </div>
    
                    {!! Form::submit('Log in', ['class' => 'btn btn-primary btn-block']) !!}
                {!! Form::close() !!}
    
                <p>New user? {!! link_to_route('signup.get', 'Sign up now!') !!}</p>
            </div>
        </div>
    </div>
</div>
@endsection