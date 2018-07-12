@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-xs-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $user->register_name }} <a>(@</a>{{ $user->name }})</h3>
                </div>
                <div class="panel-body">
                    <img class="media-object img-rounded img-responsive" src="{{ Gravatar::src($user->name, 500) }}" alt="">
                </div>
                @include('user_favorite.favorite_button', ['user' => $user])
            </div>
        </aside>
        <div class="col-xs-8">
            <ul class="nav nav-tabs nav-justified">
                <li role="presentation" class="{{ Request::is('users/' . $user->id) ? 'active' : '' }}">
                        <a href="{{ route('users.show', ['id' => $user->id]) }}">Careers<span class="badge"></span></a></li>
                <li role="presentation" class="{{ Request::is('users/*/favorite') ? 'active' : '' }}">
                        <a href="{{ route('users.favorite', ['id' => $user->id]) }}">Favorites<span class="badge"></span></a></li>
            </ul>
            <br>
            @include('users.users', ['users' => $favorites])
        </div>
    </div>
@endsection