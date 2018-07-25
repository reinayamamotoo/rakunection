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
                <h3 style="color:red; display:inline">Rakutenian</h3><h3 style="display:inline">が、すぐに見つかる。</h3>
                <h1 class="page-tytle">Rakunection</h1>
                <br><br>
                {!! link_to_route('signup.get', 'Sign up', null, ['class' => 'btn']) !!}
                {!! link_to_route('login', 'Log in', null, ['class' => 'btn']) !!}
            </div>
        </div>
    @endif
@endsection