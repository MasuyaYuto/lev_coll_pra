<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>ブログ投稿(詳細)</title>
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class='post'>
        <h2 class='title'>{{ $post->title}}</h2>
        <p class='body'>{{$post->body}}</p>
    </div>
    <a class='back' href='/'>back</a>
</body>
</html>