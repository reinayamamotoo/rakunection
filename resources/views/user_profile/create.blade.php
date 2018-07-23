@extends('layouts.app')

@section('content')
  
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
            <h2>Create Your Profile</h2>
            <br>
            {!! Form::open(['route' => ['users.profiles', $id]]) !!}
                      <div class="form-group">
                          {!! Form::textarea('comment', old('comment'), ['class' => 'form-control', 'rows' => '2', 'placeholder'=>'Comment']) !!}
                          {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
                      </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection