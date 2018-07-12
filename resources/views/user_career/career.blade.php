<ul class="media-list">
@foreach ($careers as $career)
    <?php $user = $career->user; ?>
    <li class="media">
        <div class="media-left">
            <span class="glyphicon glyphicon-user" aria-hidden="true" style="font-size:50px;"></span> 
            <i class="fas fa-diagnoses"></i>
        </div>
        <div class="media-body">    
            【在籍期間】
            {{$career->start}}
            ～
            {{$career->end}}
            <br>
            【職種】
            {{$career->career}}
            <br>
            【役職】
            {{$career->position}}
            <br>
            【詳細】
            {{$career->project_detail}}
            
        </div>
        <label class="button-inline">
            @if (Auth::user()->id == $career->user_id)
                {!! Form::open(['route' => ['user_career.edit', $career->id], 'method' => 'get']) !!}
                {!! Form::submit('Edit', ['class' => 'btn btn-info btn-xs']) !!}
                {!! Form::close() !!}
        </label>
        <label class="button-inline">        
                {!! Form::open(['route' => ['user_career.destroy', $career->id], 'method' => 'delete']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                {!! Form::close() !!}
            @endif
        </label>
    </li>
@endforeach
</ul>
{!! $careers->render() !!}