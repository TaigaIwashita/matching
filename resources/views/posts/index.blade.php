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
        <p class='mypage'>[<a href='/user'>{{Auth::user()->name}}さんのマイページ</a>]</p>
        <div class='search'>
            <h1>絞り込み</h1>
            <h2>ゲームで絞り込む</h2>
            <select name="post[game_id]" onChange="location.href=value;">
                    <option value="/">---ゲームを選択してください---</option>
                @foreach($games as $game)
                    <option value="/games/{{ $game->id }}">{{ $game->game_title }}</option>
                @endforeach
            </select>
        </div>
        <h1>投稿一覧</h1>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'>
                        <a href="/posts/{{ $post->id }}">{{ $post->post_title }}</a>
                    </h2>
                    <small>投稿者 : {{ $post->user->name }}</small>
                    <h2>ゲーム名</h2>
                    <p>{{ $post->game->game_title }}</p>
                    <h3>募集人数</h3>
                    <p class='body'>{{ $post->player_sum }}人</p>
                    <h3>時間</h3>
                    <p class='body'>{{ $post->start_time }} ~ {{ $post->finish_time }}</p>
                    <h3>掲載期間</h3>
                    <p class='body'>{{ $post->limit_time }} </p>
                </div>
            @endforeach
        </div>
        <p class='create'>[<a href='/posts/create'>新しく募集する</a>]</p>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        <p id="txt"></p>
    </body>
</html>
@endsection