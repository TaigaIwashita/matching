<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ゲームデータベース作成</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>ゲームを追加</h1>
        <form action="/games" method="POST">
            @csrf
            <div class="title">
                <h2>ゲーム名</h2>
                <input type="text" name="game[game_title]" placeholder="ゲーム名"/>
            </div>
            <div class="body">
                <h2>カテゴリー</h2>
                <input type="text" name="game[game_category]" placeholder="カテゴリー名"/>
                <h2>プラットフォーム</h2>
                <input type="text" name="game[game_platform]" placeholder="プラットフォーム"/>
                <h2>URL</h2>
                <input type="text" name="game[game_url]" placeholder="URL"/>
            </div>
            <input type="submit" value="投稿する"/>
        </form>
    </body>
</html>