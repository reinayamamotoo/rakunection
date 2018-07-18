@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <?php $user = Auth::user(); ?>
    <div class="row">
            <aside class="col-md-4">
            </aside>
            <div class="col-xs-8">
                    @include('search.search')
            </div>
        </div>
    @else
        <div class="center">
        <link rel="stylesheet" href="/css/welcome.css">
            <div class="text-center">
                <h1>Rakunection</h1>
                {!! link_to_route('signup.get', 'Sign up', null, ['class' => 'btn']) !!}
                {!! link_to_route('login', 'Log in', null, ['class' => 'btn']) !!}
            </div>
        </div>
    @endif
@endsection