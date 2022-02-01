<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>投稿一覧</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>投稿一覧</h1>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'>
                        <a href="/posts/{{ $post->id }}">{{ $post->post_title }}</a>
                    </h2>
                    <h3>募集人数</h3>
                    <p class='body'>{{ $post->player_sum }}人</p>
                    <h3>時間</h3>
                    <p class='body'>{{ $post->start_time }} ~ {{ $post->finish_time }}</p>
                    <h3>掲載期間</h3>
                    <p class='body'>{{ $post->limit_time }} </p>
                    <h3>現在の参加人数</h3>
                    <p class='body'>{{ $post->user_permission }}人</p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </body>
</html>