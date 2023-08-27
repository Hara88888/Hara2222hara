<!DOCTYPE html>
<html　lang="{{str_replace('_','-',app()->getLocale())}}">
    <head>
         <meta charset="utf-8">
         
        <meta name="viewport" content="width=device-width, initial-scale=1">
<title>ブログ投稿編集画面</title>
    </head>
    <body>
         <form action="/posts" method="POST">
        @csrf
        <h1>ブログ投稿編集画面</h1>
            <h1>タイトル</h1>
            <input type="text" name="post[title]" placeholder={{$post->title}}>
            <div class="error1">
               @if($errors->has('post.title'))
　　　　　　　　 <p>{{$errors->first('post.title')}}</p>
　　　　　　　　@endif
            </div>
            <h1>本文</h1>
            <textarea name="post[body]" placeholder={{$post->body}}></textarea>
             <div class="error2">
               @if($errors->has('post.body'))
　　　　　　　　 <p>{{$errors->first('post.body')}}</p>
　　　　　　　　@endif
            </div>
            <br>
            <button type="submit"  value="store">保存</button>
        </form>
         <div class='link'>
         <a href="{{route('post.index') }}">一覧に戻る</a>   
        </div>
    </body>
</html>