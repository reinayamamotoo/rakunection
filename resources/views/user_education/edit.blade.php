@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
            <h2>Edit Your Education</h2>
            <br>
            {!! Form::open(['route' => ['user_education.update', $user->id], 'method' => 'PUT']) !!}
                  <div class="form-group">
                      {!! Form::label('university', '大学') !!}
                      {!! Form::textarea('university', $education->university, ['class' => 'form-control', 'rows'=>'1', 'placeholder'=>'大学名']) !!}
                      {!! Form::label('major', '専攻') !!}
                      {!! Form::textarea('major', $education->major, ['class' => 'form-control', 'rows'=>'1', 'placeholder'=>'専攻名']) !!}
                      {!! Form::submit('Put', ['class' => 'btn btn-primary btn-block']) !!}
                  </div>
                      
            {!! Form::close() !!}
        </div>
    </div>
@endsection