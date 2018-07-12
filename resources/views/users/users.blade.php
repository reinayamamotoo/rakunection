@if (count($users) > 0)
<ul class="media-list">
@foreach ($users as $user)
    @if (Auth::user()->id != $user->id)
    <li class="media">
        <div class="media-left">
            <img class="media-object img-rounded" src="{{ Gravatar::src($user->name, 50) }}" alt="">
        </div>
        <div class="media-body">
            <div>
               {!! link_to_route('users.show', $user->register_name, ['id' => $user->id]) !!}
            </div>
            
            <?php $careers = \App\UserCareer::where(['user_id' => $user->id])->orderBy('created_at', 'desc')->paginate(10); ?>

            <div class="col-ms-6 col-md-6 col-xs-6 col-lg-6">
            @include('search.career_list', ['careers' => $careers])
            </div>
            
            <div class="col-ms-2 col-md-2 col-xs-2 col-lg-2">
            @include('user_favorite.favorite_button', ['user' => $user])
            </div>
        </div>
    </li>
    @endif
@endforeach
</ul>
{!! $users->render() !!}
@endif