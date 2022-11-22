<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>ブログ新規作成</title>
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <h1>ブログ新規作成</h1>
    <form action="/posts" method="POST">
        @csrf
        <div class='title'>
            <h2>Title</h2>
            <input type="text" name="post[title]" placeholder="タイトル" value="{{ old('post.title') }}"/>
            <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>  
        <!-- firstでデータベースにデータがあるかどうか返す．ない場合はnullを返す -->
        </div>
        <div class='body'>
            <h2>Body</h2>
            <textarea name="post[body]" placeholder="今日も1日お疲れ様でした。">{{ old('post.body') }}</textarea>
            <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
        </div>
        <input type="submit" value="store"/>
    </form>
    <div class="footer">
        <a href="/">戻る</a>
    </div>
</body>
</html>