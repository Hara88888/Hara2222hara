<!DOCTYPE html>
<html　lang="{{str_replace('_','-',app()->getLocale())}}">
    <head>
         <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<title>ブログ投稿作成画面</title>
    </head>
    <body>
        <h1>ブログ投稿作成画面</h1>
            <h1>タイトル</h1>
            <input type="text" name="title">
            <h1>本文</h1>
            <textarea name="text" row="10" cols="40">本文を入力してください
            </textarea>
            <br>
            <button type="submit" name="save" value="save">保存</button>
        </div>
         <div class='link'>
         <a href="{{route('post.index') }}">一覧に戻る</a>   
        </div>
    </body>
</html>