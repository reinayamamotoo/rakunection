@if (Auth::user()->id != $user->id)
    @if (Auth::user()->is_favoriting($user->id))
        {!! Form::open(['route' => ['user.unfavorite', $user->id], 'method' => 'delete']) !!}
            {!! Form::submit('★', ['class' => "btn btn-xs btn-warning btn-block"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['user.favorite', $user->id]]) !!}
            {!! Form::submit('☆', ['class' => "btn btn-xs btn-default btn-block"]) !!}
        {!! Form::close() !!}
    @endif
@endif