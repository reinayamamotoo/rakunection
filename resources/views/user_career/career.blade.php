<link rel="stylesheet" href="/css/mypage.css">

<ul class="media-list">
@foreach ($careers as $career)
    <?php $user = $career->user; ?>
    <li class="media">
        <div class="media-body">    
            【在籍期間】
            {{$career->start}}
            ～
            {{$career->end}}
            【職種】
            {{$career->career}}
            【役職】
            {{$career->position}}
            【サービス】
            {{$career->service}}
            <br><br>
            【詳細】
            {{$career->project_detail}}
            
        </div>
        <label class="button-inline">
            @if (Auth::user()->id == $career->user_id)
                {!! Form::open(['route' => ['user_career.edit', $career->id], 'method' => 'get']) !!}
                {{ Form::button('<i class="glyphicon glyphicon-pencil" title="キャリアを編集"></i>', ['type' => 'submit', 'class' => 'btn btn-default'] )  }}
                {!! Form::close() !!}
        </label>
        <label class="button-inline">        
                {!! Form::open(['route' => ['user_career.destroy', $career->id], 'method' => 'delete']) !!}
                {{ Form::button('<i class="glyphicon glyphicon-trash" title="削除"></i>', ['type' => 'submit', 'class' => 'btn btn-default'] )  }}
                {!! Form::close() !!}
            @endif
        </label>
    </li>
@endforeach
</ul>
{!! $careers->render() !!}

<!--<button type="button" class="btn btn-default"><i class="glyphicon glyphicon-plus-sign"></i></button>-->

<!--<span class="glyphicon glyphicon-music" aria-hidden="true"></span>-->