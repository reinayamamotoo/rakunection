@extends('layouts.app')

@section('content')
  <link rel="stylesheet" href="/css/panda.css">
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
        <div class="panda-list col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h3>Available Panda:</h3>
            <div class="details">
            <link rel="stylesheet" href="/css/panda.css">
                <div class="panda-list">
                <ul>
                    <li class="type1">
                        {!! Form::open(['route' => ['update.pictures', $id]]) !!}
                           {!! Form::hidden('user_picture', 'panda1') !!}
                        <label>
                        <img src="/panda-picture/panda1.png" width="10%" height="10%" alt="" class="panda-detail">
                        <dl><dt>{!! Form::submit('Panda', ['class' => 'panda-button']) !!}</dt>
                        <dt>Hero</dt>
                        </dl></label>
                        {!! Form::close() !!}
                    </li>
                </ul></div>
                
                <div class="panda-list">
                <ul>
                    <li class="type1">
                        {!! Form::open(['route' => ['update.pictures', $id]]) !!}
                           {!! Form::hidden('user_picture', 'panda2') !!}
                         <label>
                        <img src="/panda-picture/panda2.png" width="10%" height="10%" alt="" class="panda-detail">
                        <dl><dt>{!! Form::submit('Panda', ['class' => 'panda-button']) !!}</dt>
                        <dt>Thumbs up</dt>
                        </dl></label>  
                        {!! Form::close() !!}
                    </li>
                </ul></div>
                
                <div class="panda-list">
                <ul>
                    <li class="type1">
                        {!! Form::open(['route' => ['update.pictures', $id]]) !!}
                           {!! Form::hidden('user_picture', 'panda3') !!}
                          <label> 
                        <img src="/panda-picture/panda3.png" width="10%" height="10%" alt="" class="panda-detail">
                        <dl><dt>{!! Form::submit('Panda', ['class' => 'panda-button']) !!}</dt>
                        <dt>Ski</dt></dl></label>
                        {!! Form::close() !!}
                    </li>
                </ul></div>
                
                <div class="panda-list">
                <ul>
                    <li class="type1">
                        {!! Form::open(['route' => ['update.pictures', $id]]) !!}
                           {!! Form::hidden('user_picture', 'panda4') !!}
                           <label>
                        <img src="/panda-picture/panda4.png" width="10%" height="10%" alt="" class="panda-detail">
                        <dl><dt>{!! Form::submit('Golf', ['class' => 'panda-button']) !!}</dt><dd></dd></dl></label>
                        {!! Form::close() !!}
                    </li>
                </ul></div>
                
                <div class="panda-list">
                <ul>
                    <li class="type1">
                        {!! Form::open(['route' => ['update.pictures', $id]]) !!}
                           {!! Form::hidden('user_picture', 'panda5') !!}<label>
                        <img src="/panda-picture/panda5.png" width="10%" height="10%" alt="" class="panda-detail">
                        <dl><dt>{!! Form::submit('Donut', ['class' => 'panda-button']) !!}</dt><dd></dd></dl></label>
                        {!! Form::close() !!}
                    </li>
                </ul></div>
                
                <div class="panda-list">
                <ul>
                    <li class="type1">
                        {!! Form::open(['route' => ['update.pictures', $id]]) !!}
                           {!! Form::hidden('user_picture', 'panda6') !!}<label>
                        <img src="/panda-picture/panda6.png" width="10%" height="10%" alt="" class="panda-detail">
                        <dl><dt>{!! Form::submit('Card-man', ['class' => 'panda-button']) !!}</dt><dd></dd></dl></label>
                        {!! Form::close() !!}
                    </li>
                </ul></div>
                
                <div class="panda-list">
                <ul>
                    <li class="type1">
                        {!! Form::open(['route' => ['update.pictures', $id]]) !!}
                           {!! Form::hidden('user_picture', 'panda7') !!}<label>
                        <img src="/panda-picture/panda7.png" width="10%" height="10%" alt="" class="panda-detail">
                        <dl><dt>{!! Form::submit('Shopping', ['class' => 'panda-button']) !!}</dt><dd></dd></dl></label>
                        {!! Form::close() !!}
                    </li>
                </ul></div>
                
                <div class="panda-list">
                <ul>
                    <li class="type1">
                        {!! Form::open(['route' => ['update.pictures', $id]]) !!}
                           {!! Form::hidden('user_picture', 'panda8') !!}<label>
                        <img src="/panda-picture/panda8.png" width="10%" height="10%" alt="" class="panda-detail">
                        <dl><dt>{!! Form::submit('Singing', ['class' => 'panda-button']) !!}</dt><dd></dd></dl></label>
                        {!! Form::close() !!}
                    </li>
                </ul></div>
                
                <div class="panda-list">
                <ul>
                    <li class="type1">
                        {!! Form::open(['route' => ['update.pictures', $id]]) !!}
                           {!! Form::hidden('user_picture', 'panda9') !!}<label>
                        <img src="/panda-picture/panda9.png" width="10%" height="10%" alt="" class="panda-detail">
                        <dl><dt>{!! Form::submit('Rainy', ['class' => 'panda-button']) !!}</dt><dd></dd></dl></label>
                        {!! Form::close() !!}
                    </li>
                </ul></div>
            </div>    
        </div> 
    </div>
@endsection