<!DOCTYPE html>
@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>投稿一覧</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
    </head>
    <body>
        {{Auth::user()->name}}
        <h1>投稿一覧</h1>
        <div class='own_posts'>
            @foreach ($own_posts as $post)
                <div class='post'>
                    <h4 class='title'>
                        <a href="/posts/{{ $post->id }}">{{ $post->post_title }}</a>
                    </h4>
                    <small>投稿者 : {{ $post->user->name }}</small>
                    <h5>ゲーム名</h5>
                    <p>{{ $post->game->game_title }}</p>
                    <h5>募集人数</h5>
                    <p class='body'>{{ $post->player_sum }}人</p>
                    <h5>時間</h5>
                    <p class='body'>{{ $post->start_time }} ~ {{ $post->finish_time }}</p>
                    <h5>掲載期間</h5>
                    <p class='body'>{{ $post->limit_time }} </p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $own_posts->links() }}
        </div>
    </body>
</html>
@endsection