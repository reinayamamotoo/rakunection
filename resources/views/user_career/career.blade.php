<ul class="media-list">
@foreach ($careers as $career)
    <?php $user = $career->user; ?>
    <li class="media">
        <div class="media-left">
            <img class="media-object img-rounded" src="{{ Gravatar::src($user->email, 50) }}" alt="">
        </div>
        <div class="media-body">
            <div>
                {!! link_to_route('users.show', $user->name, ['id' => $user->id]) !!} <span class="text-muted">posted at {{ $career->created_at }}</span>
            </div>
            <div class ="wordstyle">
                <p>{!! nl2br(e($career->content)) !!}</p>
            </div>
        </div>
    </li>
@endforeach
</ul>
{!! $careers->render() !!}