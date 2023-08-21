<!DOCTYPE html>
<html　lang="{{str_replace('_','-',app()->getLocale())}}">
    <head>
         <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<title>ブログ投稿一覧</title>
    </head>
    <body>
        <h1>ブログ投稿一覧</h1>
        <p>タイトル</p>
        <p>内容</p>
        <div class='posts'>
            @foreach($posts as $post)
            <div class='post'>
                <h2 class='title'>{{ $post ->title }}</h2>
                <p class='body'>{{ $post ->body}}</p>
        </div>
        @endforeach
        </div>
    </body>
</html>