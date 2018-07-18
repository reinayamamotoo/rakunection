@extends('layouts.app')

@section('content')
  
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
            <h2>Select Your Profile Picutre</h2>
            <br>
            <div class="panda-list col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
            <img src="/panda-picture/panda1.png" width="10%" height="10%" alt="">
            <img src="/panda-picture/panda2.png" width="10%" height="10%" alt="">
            <img src="/panda-picture/panda3.png" width="10%" height="10%" alt="">
            <img src="/panda-picture/panda4.png" width="10%" height="10%" alt="">
            <img src="/panda-picture/panda5.png" width="10%" height="10%" alt="">
            <img src="/panda-picture/panda6.png" width="10%" height="10%" alt="">
            <img src="/panda-picture/panda7.png" width="10%" height="10%" alt="">
            <img src="/panda-picture/panda8.png" width="10%" height="10%" alt="">
            <img src="/panda-picture/panda9.png" width="10%" height="10%" alt="">
        </div> 
            <br>
            {!! Form::open(['route' => ['users.pictures', $id]]) !!}
                <div class="form-group">
                    {!! Form::label('user_picture', 'panda:') !!}
                    {{Form::select('user_picture', [
                        ' ' => ' ',
                        'panda1' => 'panda hero',
                        'panda2' => 'panda thumbs-up',
                        'panda3' => 'panda ski',
                        'panda4' => 'panda golf',
                        'panda5' => 'panda donut',
                        'panda6' => 'panda card-man',
                        'panda7' => 'panda shopping',
                        'panda8' => 'panda singing',
                        'panda9' => 'panda rainy'
                        ]
                        ,null, ['class'=>'form-control']) }}
                    {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection