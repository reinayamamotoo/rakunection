<link rel="stylesheet" href="/css/search.css">
@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>検索</h1>
    </div>

    <div class="row">
        <div class="col-ms-8 col-ms-offset-2 col-md-8 col-md-offset-2 col-xs-8 col-xs-offset-2 col-lg-8 col-lg-offset-2">

            {!! Form::open(['route' => 'search.get', 'method' => 'get']) !!}
                <div class="form-group">
                    {!! Form::label('keyword_career', '職種') !!}
                    {!! Form::select('keyword_career', [
                       ' ' => ' ',
                       'マーケティング' => 'マーケティング',
                       '営業・コンサルタント' => '営業・コンサルタント',
                       '戦略・経営企画' => '戦略・経営企画',
                       '物流・SCM' => '物流・SCM',
                       'アプリケーションエンジニア' => 'アプリケーションエンジニア',
                       'データサイエンティスト・リサーチャー' => 'データサイエンティスト・リサーチャー',
                       'その他' => 'その他'
                       ], null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('keyword_service', 'サービス') !!}
                    {!! Form::select('keyword_service', [
                       ' ' => ' ',
                        'EC' => 'EC',
                        'トラベル' => 'トラベル',
                        'FinTech' => 'FinTech',
                        '新サービス' => '新サービス',
                        'RIT' => 'RIT',
                        'コーポレート' => 'コーポレート'
                       ], null, ['class' => 'form-control']) !!}
                </div>
           
                {!! Form::submit('検索', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
            
            
            <br>
        </div>
        <div class="col-ms-12 col-md-12 col-xs-12 col-lg-12">
            <div class="result-list" >
            @include('users.users', ['users'=>$result])
            </div>
        </div>

    </div>
@endsection