<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>ブログ投稿</title>
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <h1>ブログ投稿</h1>
    
    <a href="/posts/create">create</a>
    
    <hr>
    <div class='posts'>
        @foreach ($posts as $post)
            <div class='post'>
                <a class='title' href="{{route('posts.show',$post->id)}}">{{ $post->title}}</a>
                <p class='body'>{{$post->body}}</p>
                <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deletePost({{ $post->id }})">delete</button>
                </form>
            </div>
        @endforeach
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </div>
    
    <script>
        function deletePost(id) {
            'use strict'
    
            if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                document.getElementById(`form_${id}`).submit();
            }
        }
    </script>
</body>
</html>