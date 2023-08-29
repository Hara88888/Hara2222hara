<!DOCTYPE html>
<html　lang="{{str_replace('_','-',app()->getLocale())}}">
    <head>
         <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<title>ブログ投稿一覧</title>
    </head>
    <body>
        <h1>ブログ投稿一覧</h1>
        <h2 class='create'>
            <a href='/posts/create'>投稿作成</a>
</h2>
        <div class='posts'>
            <h1>投稿一覧</h1>
            @foreach($posts as $post)
            <div class='post'>
                <a href="/posts/{{ $post->id}}">
                <h2 class='title'>{{ $post ->title }}</h2>
                </a>
                <p class='body'>{{ $post ->body}}</p>
                 <a href='/posts/{{$post ->id}}/edit'>編集する</a>
                <form action="/posts/{{$post ->id}}" id="form_{{$post->id }}" method="POST">
                    @method('DELETE')
                    @csrf 
                    <button type="button" onclick="deleteSubmit({{$post->id}})">削除</button>
                </form> 
        </div>
        @endforeach
        </div>
        <div class="paginate">
            {{ $posts->links()}}
        </div>
    </body>
</html>
<script>
    function deleteSubmit(id){
        'use strict'
        var res=confirm("削除しますか？");
    if(res==true){
         document.getElementById(`form_${id}`).submit();
    }else{
        
    }
    }</script>