<!DOCTYPE html>
<html　lang="{{str_replace('_','-',app()->getLocale())}}">
    <head>
         <meta charset="utf-8">
         
        <meta name="viewport" content="width=device-width, initial-scale=1">
<title>ブログ投稿作成画面</title>
    </head>
    <body>
         <form method="POST" action="/posts">
        @csrf
        <h1>ブログ投稿作成画面</h1>
            <h1>タイトル</h1>
            <input type="text" name="post[title]" placeholder="タイトル">
            <h1>本文</h1>
            <textarea name="post[body]" placeholder="本文を入力"></textarea>
            <br>
            <button type="submit"  value="store">保存</button>
        </form>
         <div class='link'>
         <a href="{{route('post.index') }}">一覧に戻る</a>   
        </div>
    </body>
</html>