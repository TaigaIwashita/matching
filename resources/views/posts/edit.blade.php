<!DOCTYPE html>
@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>募集要項編集</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
   <body>
        <h1 class="title">編集画面</h1>
        <div class="content">
            <form action="/posts/{{ $post->id }}" method="POST">
                 @csrf
                 @method('PUT')
                <div class="title">
                    <h2>タイトル</h2>
                    <input type="text" name="post[post_title]" value="{{$post->post_title}}"/>
                </div>
                <div class="body">
                    <h2>概要</h2>
                    <textarea name="post[post_body]">{{$post->post_body}}</textarea>
                    <div class="game">
                    <h2>ゲーム</h2>
                        <select name="post[game_id]">
                            @foreach($games as $game)
                                <option value="{{ $game->id }}">{{ $game->game_title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <h2>ルームコード</h2>
                    <input type="text" name="post[room_code]" value="{{$post->room_code}}"/>
                    <h2>開始時間</h2>
                    <input type="datetime-local" name="post[start_time]" value="{{str_replace(" ", "T", $post->start_time)}}">
                    <h2>終了時間</h2>
                    <input type="datetime-local" name="post[finish_time]" value="{{str_replace(" ", "T", $post->finish_time)}}">
                    <h2>掲載期間</h2>
                    <input type="datetime-local" name="post[limit_time]" value="{{str_replace(" ", "T", $post->limit_time)}}">
                    <h2>募集人数</h2>
                    <input type="number" name="post[player_sum]" placeholder="人数" min="0" value="{{$post->player_sum}}"/>
                    <h2>他のユーザーの承認方法</h2>
                    <select name="post[user_permission]" value="{{$post->user_permission}}">
                        <option value="0">全て許可する</option>
                        <option value="1">確認する</option>
                    </select>
                    <h2>投稿の公開方法</h2>
                     <select name="post[release_format]" value="{{$post->release_format}}">
                        <option value="0">公開</option>
                        <option value="1">非公開</option>
                    </select>
                </div>
                <input type="submit" value="保存する"/>
            </form>
        </div>
    </body>
</html>
@endsection