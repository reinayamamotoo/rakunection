<link rel="stylesheet" href="/css/mypage.css">

@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="background">
        
            <div class="photo col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <div>
                    <div>
                        @if ($user->user_picture == null)
                            <span class="glyphicon glyphicon-user" aria-hidden="true" style="font-size:1000%;"></span>
                            @if (Auth::user()->id == $user->id)
                        　　{!! link_to_route('picture.create', 'Select', ['id' => Auth::user()->id], ['class' => 'btn btn-xs btn-default']) !!}
                            </p> 
                            @endif
                        @else
                            <img src="/panda-picture/{{ $user->user_picture['user_picture'] }}.png" height="60%" alt="" class="">
                            <br><br>
                            @if (Auth::user()->id == $user->id)
                            <p class="profile-button">
                            {!! Form::open(['route' => ['picture.edit', 'id' => Auth::user()->id], 'method' => 'get']) !!}
                            {{ Form::button('<i class="glyphicon glyphicon-camera" title="画像を変更"></i>', ['type' => 'submit', 'class' => 'btn btn-default'] )  }}
                            {!! Form::close() !!}
                            </p>
                            @endif
                        @endif 
                    </div>
                    <div>
                        <h2 class="panel-title" style="font-size:130%;">{{ $user->register_name }} <a>(@</a>{{ $user->name }})</h2>
                    </div>
                </div>
            </div>
            <div class='user-tyuuto'>
                {{ $user->tyuuto }}
            </div>
            <div class='fukidashi1'>
                <h3 class="user-comment" style="font-size:150%;">{{ $user->comment }} </h3>
            </div>
          
        </div>
        
        <div class="tablezone">
            <div class="col-xs-10 col-xs-offset-1">
                <ul class="nav nav-tabs nav-justified">
                    <li role="presentation" class="{{ Request::is('users/' . $user->id) ? 'active' : '' }}">
                            <a href="{{ route('users.show', ['id' => $user->id]) }}">Careers<span class="badge"></span></a></li>
                    <li role="presentation" class="{{ Request::is('users/*/favorite') ? 'active' : '' }}">
                            <a href="{{ route('users.favorite', ['id' => $user->id]) }}">Favorites<span class="badge"></span></a></li>
                </ul>
                <br>
                @include('users.favousers', ['users' => $favorites])
            </div>
        </div>
        <br>
    </div>
@endsection