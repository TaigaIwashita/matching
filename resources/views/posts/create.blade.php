<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>募集要項作成</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>新しく募集する</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>タイトル</h2>
                <input type="text" name="post[post_title]" placeholder="タイトル"/>
            </div>
            <div class="body">
                <h2>概要</h2>
                <textarea name="post[post_body]" placeholder="例)みんなで仲良く遊びましょう"></textarea>
                <h2>ルームコード</h2>
                <input type="text" name="post[room_code]" placeholder="ルームコード"/>
                <h2>開始時間</h2>
                <input type="datetime-local" name="post[start_time]">
                <h2>終了時間</h2>
                <input type="datetime-local" name="post[finish_time]">
                <h2>掲載期間</h2>
                <input type="datetime-local" name="post[limit_time]">
                <h2>募集人数</h2>
                <input type="number" name="post[player_sum]" placeholder="人数" min="0"/>
                <h2>承認方法</h2>
                <input type="number" name="post[user_permission]" placeholder="承認方法" min="0" max="1"/>
                <h2>公開方法</h2>
                <input type="number" name="post[release_format]" placeholder="公開方法" min="0" max="1"/>
            </div>
            <input type="submit" value="投稿する"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>