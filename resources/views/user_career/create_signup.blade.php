<link rel="stylesheet" href="/css/create.css">

@extends('layouts.app')

@section('content')
    
<div class="create_signup">
    <div class="text-center">
        <h1>新規プロフィール登録</h1>
        <p>現在のキャリアを登録してください！</p>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            {!! Form::open(['route' => 'user_career.store']) !!}
                
                <div class="form-group">
                from（現在の仕事を始めた年を選択してください）
                {!! Form::selectRange('start', date('Y')-21, date('Y')+0, null, ['class' => 'form-control', 'placeholder'=>' ']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('career', '職種') !!}
                    {!! Form::select('career', [
                       ' ' => ' ',
                       'マーケティング' => 'マーケティング',
                       '営業・コンサルタント' => '営業・コンサルタント',
                       '戦略・経営企画' => '戦略・経営企画',
                       '物流・SCM' => '物流・SCM',
                       'アプリケーションエンジニア' => 'アプリケーションエンジニア',
                       'データサイエンティスト・リサーチャー' => 'データサイエンティスト・リサーチャー',
                       'その他' => 'その他'
                       ], old('career'), ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('service', 'サービス') !!}
                    {!! Form::select('service', [
                       ' ' => ' ',
                        'EC' => 'EC',
                        'トラベル' => 'トラベル',
                        'FinTech' => 'FinTech',
                        '新サービス' => '新サービス',
                        'RIT' => 'RIT',
                        'コーポレート' => 'コーポレート'
                       ], old('service') , ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('position', '役職') !!}
                    {!! Form::text('position', old('position'), ['class' => 'form-control', 'placeholder'=>'マネージャー・リーダーetc.']) !!}
                </div>

    
                <div class="form-group">
                    {!! Form::label('project_detail', '仕事詳細') !!}
                    {!! Form::text('project_detail', old('project_detail'),['class' => 'form-control', 'placeholder'=>'ファッション部門の店舗のコンサルタント業務を行った']) !!}
                </div>

                {!! Form::submit('登録', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
            
            
        </div>
    </div>
</div>
@endsection