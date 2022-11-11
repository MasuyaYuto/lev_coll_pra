<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>ブログ投稿</title>
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <h1>ブログ投稿</h1>
    
    <div class='posts'>
        @foreach ($posts as $post)
            <div class='post'>
                <h2 class='title'>{{ $post->title}}</h2>
                <p class='body'>{{$post->body}}</p>
            </div>
        @endforeach
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </div>
    
</body>
</html>