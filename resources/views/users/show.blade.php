<link rel="stylesheet" href="/css/mypage.css">

@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
            <div class="photo col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <div>
                    <div>
                        <img src="/panda-picture/{{ $user->user_picture['user_picture'] }}.png" height="60%" alt="" class="">
                        <br>
                        @if (Auth::user()->id == $user->id)
                            <p class="profile-button">
                            {!! Form::open(['route' => ['picture.edit', 'id' => Auth::user()->id], 'method' => 'get']) !!}
                            {{ Form::button('画像を変更 <i class="glyphicon glyphicon-camera" title="画像を変更"></i>', ['type' => 'submit', 'class' => 'btn btn-default profile-button'] )  }}
                            {!! Form::close() !!}
                            </p>
                        @endif 
                    </div>   
                    @if(Auth::user()->id == $user->id)
                    <div class="profilezone">
                    <p class="edit-button">
                            {!! Form::open(['route' => ['profile.edit', 'id' => Auth::user()->id], 'method' => 'get']) !!}
                            {{ Form::button('プロフィールを編集 <i class="glyphicon glyphicon-pencil" title="プロフィールを編集"></i>', ['type' => 'submit', 'class' => 'btn btn-default profile-button'] )  }}
                            {!! Form::close() !!}
                    </p>
                    </div>
                    @endif
                </div>
            </div>
                <div class="user-info">
                    <div class='name'>
                        <class="panel-title" style="font-size:200%;">{{ $user->register_name }}<div style="display: inline"> (@</div>{{ $user->name }})
                    </div> 
                    <div class='comment'>
                        <class="user-comment" style="font-size:150%;">”{{ $user->comment }}”
                    </div>
                </div>    
        <div class="details">
            <br>
            <link rel="stylesheet" href='{{ url("/css/hover.css")}}'>
            <ul>
                 <li class="type1">
                    <img src='/css/images/building.png' height="100%" width="70%">
                    <dl>
                    <dd>{!! $user -> tyuuto !!}</dd>
                    <dd></dd>
                    
                    </dl>
                </li>
                <li class="type1">
                    <img src='/css/images/sports.png' height="100%" width="70%">
                    <dl>
                        <dt>同好会</dt>
                        <dd>{!! $user -> club !!}</dd>
                        <dd></dd>
                    
                    </dl>
                </li>
            
                <li class="type1">
                    <img src='{{url("/css/images/world.png")}}' height="100%" width="70%">
                    <dl>
                    <dt>出身</dt>
                    <dd>{!! $user -> homecountry !!}</dd>
                    </dl>
                </li>
            
                <li class="type1">
                    <img src='/css/images/school.png' height="100%" width="70%">
                    <dl>
                            <dd>{{ $user->educations['university'] }} {{ $user->educations['major'] }}</dd>
                    </dl>
                    
                </li>
                <li class="type1">
                    <img src='/css/images/mail.png' height="100%" width="70%">
                    <dl>
                    <dd><a href="mailto:{!! $user -> email !!} ?subject=【Rakunection】{!! Auth::user()->register_name!!}さんからのメッセージ&amp;body=">コンタクトはこちら</a></dd>
                    </dl>
                </li>
            </ul>
        </div>
            <div class="tablezone">
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
</div>    
@endsection

