<!DOCTYPE html>
<html　lang="{{str_replace('_','-',app()->getLocale())}}">
    <head>
         <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<title>ブログ詳細画面</title>
    </head>
    <body>
        <h1>詳細画面</h1>
        <div class='posts'>
            <div class='post'>
                <h1>タイトル</h1>
                <h2 class='title'>{{ $post ->title }}</h2>
                <h2>本文</h2>
                <p class='body'>{{ $post ->body}}</p>
        </div>
        <div class='link'>
         <a href="{{route('post.index') }}">一覧に戻る</a>   
        </div>
        </div>
    </body>
</html>