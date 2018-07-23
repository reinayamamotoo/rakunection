@if (count($users) > 0)
<link rel="stylesheet" href="/css/search.css">
<ul class="media-list grid">
@foreach ($users as $user)
    @if (Auth::user()->id != $user->id)
    <li class="media grid-item" style="width:48%;">
        <div class="media-left">
            
            <?php $user_object = \App\UserPicture::find($user->id) ?>

            <img src="/panda-picture/{{ $user_object['user_picture'] }}.png" width="100px" height="100px" alt="">
             <div class="text-center" style="font-size:120%;">
             {!! link_to_route('users.show', $user->register_name, ['id' => $user->id]) !!}
             <br>
             {!! $user->tyuuto !!} 
            
            @include('user_favorite.favorite_button', ['user' => $user])
            </div>
    </div>
        <div class="media-body">
           <?php $careers = \App\UserCareer::where(['user_id' => $user->id])->orderBy('created_at', 'desc')->paginate(10); ?>

            <div class="col-ms-6 col-md-6 col-xs-6 col-lg-6">
            
            </div>
            <table class="table table-striped">
            <thead>
                <tr>
                    <th>在籍期間</th>
                    <th>職種</th>
                    <th>サービス</th>
                    <th>役職</th>
                </tr>
            </thead>
            <tbody>
                @include('search.career_list', ['careers' => $careers])
            </tbody>
        </table>
        
        </div>
    </li>
    @endif
@endforeach
</ul>
{!! $users->render() !!}
@endif