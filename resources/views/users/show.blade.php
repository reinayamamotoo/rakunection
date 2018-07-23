<link rel="stylesheet" href="/css/mypage.css">

@extends('layouts.app')

@section('content')
        
    <div class="row">
        <div class="background">
        
            <div class="photo col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <div>
                    <div>
                        <img src="/panda-picture/{{ $user->user_picture['user_picture'] }}.png" height="60%" alt="" class="">
                        <br><br>
                        @if (Auth::user()->id == $user->id)
                            <p class="profile-button">
                            {!! Form::open(['route' => ['picture.edit', 'id' => Auth::user()->id], 'method' => 'get']) !!}
                            {{ Form::button('<i class="glyphicon glyphicon-camera" title="画像を変更"></i>', ['type' => 'submit', 'class' => 'btn btn-default'] )  }}
                            {!! Form::close() !!}
                            </p>
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
            @if(Auth::user()->id == $user->id)
            <div class="profilezone">
                    <p class="edit-button">
                    {!! link_to_route('profile.edit', 'プロフィールを編集', ['id' => Auth::user()->id], ['class' => 'btn btn-default']) !!}
                    </p>
            </div>
            @endif
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
                        {{ Form::button('<i class="glyphicon glyphicon-plus-sign" title="キャリアを追加"></i>', ['type' => 'submit', 'class' => 'btn btn-default'] )  }}
                        {!! Form::close() !!}
                    @endif
                </div>
            </div>
    </div>
    
    
   

<div class="details">
    <br>
<link rel="stylesheet" href='{{ url("/css/hover.css")}}'>
    <ul>
        <li class="type1">
            <img src='/css/images/sports.png' height="90%" width="50%">
            <dl>
            <dt>クラブ</dt>
            <dd>{!! $user -> club !!}</dd>
            <dd></dd>
            
            </dl>
        </li>
    
        <li class="type1">
            <img src='{{url("/css/images/world.png")}}' height="90%" width="50%">
            <dl>
            <dt>出身</dt>
            <dd>{!! $user -> homecountry !!}</dd>
            </dl>
        </li>
    
        <li class="type1">
            <img src='/css/images/school.png' height="90%" width="50%">
            <dl>
            <dt>学歴</dt>
                    <dd>{{ $user->educations['university'] }} {{ $user->educations['major'] }}</dd>
            </dl>
            
        </li>
        <li class="type1">
            <img src='/css/images/mail.png' height="90%" width="50%">
            <dl>
            <dt>コンタクト</dt>
            <dd><a href="mailto:{!! $user -> email !!}">{!! $user -> email !!}</a></dd>
            </dl>
        </li>
    </ul>

</div>
<br>

@endsection

