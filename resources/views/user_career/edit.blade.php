@extends('layouts.app')

@section('content')

    <h1>キャリア編集ページ</h1>

    {!! Form::open(['route' => ['user_career.update', $career->id], 'method' => 'put']) !!}

        <div class="form-group">
           {!! Form::label('career', '職種') !!}
           {!! Form::text('career', $career->career, ['class' => 'form-control']) !!}
        </div>
                
        <div class="form-group">
            {!! Form::label('position', '役職') !!}
            {!! Form::text('position', $career->position, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('start', 'いつから') !!}
            {!! Form::text('start', $career->start, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('end', 'いつまで') !!}
            {!! Form::text('end', $career->end, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('project_detail', '仕事詳細') !!}
            {!! Form::text('project_detail', $career->project_detail,['class' => 'form-control']) !!}
        </div>
    {!! Form::submit('編集', ['class' => 'btn btn-primary btn-block']) !!}
    {!! Form::close() !!}

@endsection