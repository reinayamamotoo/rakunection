<link rel="stylesheet" href="/css/mypage.css">

@extends('layouts.app')

@section('content')
        
    <div class="row">
         <div class='fukidashi1'>
            reina
        </div> 
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title" style="font-size:100%;">{{ $user->register_name }} <a>(@</a>{{ $user->name }})</h3>
                </div>
                
                <div class="panel-body">
                    @if ($user->user_picture == null)
                        @if (Auth::user()->id == $user->id)
                        <span class="glyphicon glyphicon-user" aria-hidden="true" style="font-size:1000%;"></span>
                    　　{!! link_to_route('picture.create', 'Select', ['id' => Auth::user()->id], ['class' => 'btn btn-xs btn-default']) !!}
                        </p> 
                        @endif
                    @else
                        <img src="/panda-picture/{{ $user->user_picture['user_picture'] }}.png" height="30%" alt="">
                        <br><br>
                        @if (Auth::user()->id == $user->id)
                        <p class="profile-button">
                        {!! link_to_route('picture.edit', 'Edit', ['id' => Auth::user()->id], ['class' => 'btn btn-xs btn-info']) !!}
                        </p>
                        @endif
                    @endif 
                     
                </div>
                @include('user_favorite.favorite_button', ['user' => $user])
            </div>
        </div>
         <div class='fukidashi2'>
            Hi
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
                @if (count($careers) > 0)
                    @include('user_career.career', ['careers' => $careers])
                @endif
                @if (Auth::user()->id == $user->id)
                    {!! Form::open(['route' => ['user_career.create'], 'method' => 'get']) !!}
                    {!! Form::submit('Create', ['class' => 'btn btn-warning btn-xs']) !!}
                    {!! Form::close() !!}
                @endif
            </div>
        </div>
    </div>
    

<div class="details">
<link rel="stylesheet" href='{{ url("/css/hover.css")}}'>
    <ul>
        <li class="type1">
            <img src='/css/images/panda_1.png'>
            <dl>
            <dt>Placehold.it</dt>
            <dd>この画像は「Placehold.it」で生成されるダミー画像を使用していました。（URLが変わったみたいなので手作りの画像に変えました。）</dd>
            <dd><a href="https://www.yahoo.co.jp/" target="_blank">Placehold.it</a></dd>
            </dl>
        </li>
    
        <li class="type2">
            <img src='{{url("/css/images/panda_2.png")}}'>
            <dl>
            <dt>Placehold.it</dt>
            <dd>今は「https://placeholdit.imgix.net/~text」というURLの後にパラメーターを付ければ、任意のダミー画像を生成してくれるみたい。</dd>
            <dd><a href="//www.placehold.it/" target="_blank">Placehold.it</a></dd>
            </dl>
        </li>
    
        <li class="type3">
            <img src='/css/images/school.png'>
            <dl>
            <dt>学歴</dt>
            <dd>大学：○○○
                専攻：☓☓☓
            </dd>
            </dl>
        </li>
    </ul>
</div>
@endsection

