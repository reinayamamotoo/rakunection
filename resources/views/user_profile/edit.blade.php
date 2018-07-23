<link rel="stylesheet" href="/css/profile_edit.css">

@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
            <h2>プロフィールの編集</h2>
            <br>
            {!! Form::open(['route' => ['update.profiles', $user->id]]) !!}
                      <div class="form-group">
                          {!! Form::label('email', 'メールアドレス') !!}
                          {!! Form::textarea('email', $user->email, ['class' => 'form-control', 'rows'=>'1', 'placeholder'=>'×××@mail.com']) !!}
                          {!! Form::label('university', '大学') !!}
                          {!! Form::textarea('university', $user->educations['university'], ['class' => 'form-control', 'rows'=>'1', 'placeholder'=>'大学名']) !!}
                          {!! Form::label('major', '専攻') !!}
                          {!! Form::textarea('major', $user->educations['major'], ['class' => 'form-control', 'rows'=>'1', 'placeholder'=>'専攻名']) !!}
                          {!! Form::label('homecountry', '国籍') !!}
                          {!! Form::textarea('homecountry', $user->homecountry, ['class' => 'form-control', 'rows'=>'1', 'placeholder'=>'日本']) !!}
                          {!! Form::label('club', '同好会') !!}
                          {!! Form::textarea('club', $user->club, ['class' => 'form-control', 'rows'=>'1', 'placeholder'=>'野球']) !!}
                          {!! Form::label('comment', 'コメント') !!}
                          {!! Form::textarea('comment', $user->comment, ['class' => 'form-control', 'rows'=>'2', 'placeholder'=>'フリースペース']) !!}
                          {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
                      </div>

            {!! Form::close() !!}
        </div>
    </div>
@endsection