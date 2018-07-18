<link rel="stylesheet" href="/css/mypage.css">

@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-xs-2 col-xs-offset-5">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title" style="font-size:100%;">{{ $user->register_name }} <a>(@</a>{{ $user->name }})</h3>
                </div>
                
                <div class="panel-body">
                    <span class="glyphicon glyphicon-user" aria-hidden="true" style="font-size:1000%;"></span> 
                </div>
                @include('user_favorite.favorite_button', ['user' => $user])
            </div>
        </div>
        <div class="table">
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
    </div>
@endsection