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
        <div class="container">
            <form action="/DataTrainingCenter/Article" method="POST">
                {{ csrf_field() }}
                <input type="text" placeholder="Title" name="title"><br>
                <textarea placeholder="Description" name="description" rows="20" cols="100"></textarea><br>
                <button type="submit">送出</button>
            </form>
        </div>
    </body>
</html>