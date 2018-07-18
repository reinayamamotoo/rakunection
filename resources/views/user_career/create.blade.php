@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>キャリア追加登録</h1>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            {!! Form::open(['route' => 'user_career.store']) !!}
                
                <div class="form-group">
                from
                {!! Form::selectRange('start', date('Y')-21, date('Y')+0, null, ['class' => 'form-control', 'placeholder'=>'年']) !!}
                to
                {!! Form::selectRange('end', date('Y')-21, date('Y')+0, null, ['class' => 'form-control', 'placeholder'=>'年']) !!}
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
                       ], null, ['class' => 'form-control']) !!}
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
                       ], null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('position', '役職') !!}
                    {!! Form::text('position', old('position'), ['class' => 'form-control']) !!}
                </div>

    
                <div class="form-group">
                    {!! Form::label('project_detail', '仕事詳細') !!}
                    {!! Form::text('project_detail', old('project_detail'),['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('登録', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
            
            
        </div>
    </div>
@endsection