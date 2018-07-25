@extends('layouts.app')

@section('content')

    <h1>キャリア編集ページ</h1>

    {!! Form::open(['route' => ['user_career.update', $career->id], 'method' => 'put']) !!}

        <div class="form-group">
                from
                {!! Form::selectRange('start', date('Y')-21, date('Y')+0, $career->start, ['class' => 'form-control', 'placeholder'=>'年']) !!}
                to
                {!! Form::selectRange('end', date('Y')-21, date('Y')+0, $career->end, ['class' => 'form-control', 'placeholder'=>'年']) !!}
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
                       ], $career->career, ['class' => 'form-control']) !!}
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
                        'コーポレート' => 'コーポレート',
                        'その他' => 'その他'
                       ], $career->service, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('position', '役職') !!}
                    {!! Form::text('position', $career->position, ['class' => 'form-control']) !!}
                </div>

    
                <div class="form-group">
                    {!! Form::label('project_detail', '仕事詳細') !!}
                    {!! Form::text('project_detail', $career->project_detail,['class' => 'form-control']) !!}
                </div>
    {!! Form::submit('編集', ['class' => 'btn btn-primary btn-block']) !!}
    {!! Form::close() !!}
 

@endsection