@extends('index')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DataCenter</title>
        <!-- Styles -->
        <style>
            article{
                border-style:solid;
                padding-left: 10px;
            }
        </style>
    </head>
    <body>
        @section('contents')
            <article>
                <h1>Hi there!</h1>
                <p>This is an article</p>
            </article>
            
            @foreach ($posts as $post)
                <article>
                    <a href="/DataTrainingCenter/ArticleEdit/{{$post->id}}">Edit</a>
                    <h1>{{$post->title}}</h1>
                    <p>{{$post->description}}</p>
                </article>
            @endforeach
        @endsection
        <a href="/DataTrainingCenter/Article">Post</a>
    </body>
</html>
