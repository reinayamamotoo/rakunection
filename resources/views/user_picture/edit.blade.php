@extends('layouts.app')

@section('content')
  <!--<link rel="stylesheet" href="/css/panda.css">-->
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
            <h2>Edit Your Profile Picutre</h2>
            <br>
            <div class="panda-picture">
                <h3>Now:</h3>
                <img src="/panda-picture/{{ $user->user_picture['user_picture'] }}.png" width="50%" height="50%" alt="">
            </div>
            <br>
        </div>  
        <div class="panda-list col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
            <h3>Available Panda:</h3>
            <div class="details">
            <link rel="stylesheet" href="/css/panda.css">
                <ul>
                    <li class="type1">
                        <img src="/panda-picture/panda1.png" height="100%">
                        <dl><dt>Panda Hero</dt><dd></dd></dl>
                    </li>
                </ul>
                <ul>
                    <li class="type1">
                        <img src="/panda-picture/panda2.png" height="100%">
                        <dl><dt>Panda Thumbs-up</dt><dd></dd></dl>
                    </li>
                </ul>
                <ul>
                    <li class="type1">
                        <img src="/panda-picture/panda3.png" height="100%">
                        <dl><dt>Panda ski</dt><dd></dd></dl>
                    </li>
                </ul>
                <ul>
                    <li class="type1">
                        <img src="/panda-picture/panda4.png" height="100%">
                        <dl><dt>Panda Golf</dt><dd></dd></dl>
                    </li>
                </ul>
                <ul>
                    <li class="type1">
                        <img src="/panda-picture/panda5.png" height="100%">
                        <dl><dt>Panda Donut</dt><dd></dd></dl>
                    </li>
                </ul>
                <ul>
                    <li class="type1">
                        <img src="/panda-picture/panda6.png" height="100%">
                        <dl><dt>Panda Card-man</dt><dd></dd></dl>
                    </li>
                </ul>
                <ul>
                    <li class="type1">
                        <img src="/panda-picture/panda7.png" height="100%">
                        <dl><dt>Panda Shopping</dt><dd></dd></dl>
                    </li>
                </ul>
                <ul>
                    <li class="type1">
                        <img src="/panda-picture/panda8.png" height="100%">
                        <dl><dt>Panda Singing</dt><dd></dd></dl>
                    </li>
                </ul>
                <ul>
                    <li class="type1">
                        <img src="/panda-picture/panda9.png" height="100%">
                        <dl><dt>Panda Rainy</dt><dd></dd></dl>
                    </li>
                </ul>
            </div>    
        </div> 
        <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
            {!! Form::open(['route' => ['update.pictures', $id]]) !!}
                <div class="form-group">
                    {!! Form::label('user_picture', 'panda:') !!}
                    {{Form::select('user_picture', [
                        ' ' => ' ',
                        'panda1' => 'Panda Hero',
                        'panda2' => 'Panda Thumbs-up',
                        'panda3' => 'Panda Ski',
                        'panda4' => 'Panda Golf',
                        'panda5' => 'Panda Donut',
                        'panda6' => 'Panda Card-man',
                        'panda7' => 'Panda Shopping',
                        'panda8' => 'Panda Singing',
                        'panda9' => 'Panda Rainy'
                        ]
                        ,null, ['class'=>'form-control']) }}
                    {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection