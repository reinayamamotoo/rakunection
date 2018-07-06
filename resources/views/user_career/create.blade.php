@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>プロフィール登録</h1>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            {!! Form::open(['route' => 'user_career.store']) !!}
                <div class="form-group">
                    {!! Form::label('career', '職種') !!}
                    {!! Form::text('career', old('career'), ['class' => 'form-control']) !!}
                </div>
                
                 <div class="form-group">
                    {!! Form::label('position', '役職') !!}
                    {!! Form::text('position', old('position'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('start', '期間') !!}
                    {!! Form::text('start', old('start'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('end', '期間') !!}
                    {!! Form::text('end', old('end'), ['class' => 'form-control']) !!}
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