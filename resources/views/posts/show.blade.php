<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>投稿詳細</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class='title'>{{ $post->post_title }}</h1>
        <div class="content">
            <h2>概要</h2>
            <p>{{ $post->post_body }}</p>
            <h2>ルームコード</h2>
            <p>{{ $post->room_code }}</p>
            <h2>募集人数</h2>
            <p>{{ $post->player_sum }}人</p>
            <h2>時間</h2>
            <p>{{ $post->start_time }} ~ {{ $post->finish_time }}</p>
            <h2>掲載期間</h2>
            <p>{{ $post->limit_time }} </p>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>