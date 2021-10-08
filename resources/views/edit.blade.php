<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://use.fontawesome.com/releases/v5.3.1/js/all.js" defer ></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css" />
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head> 
<body>
<nav class="navbar is-primary" role="navigation" aria-label="main navigation">
    <a class="navbar-item" href="/">
       一覧に戻る
    </a>
   
</nav>
<div class="columns">
    <div class="column"></div>
    <div class="column">
        <form action="/comment/update" method="post">
            
            <input type="text" name="comment" class="input" value="{{$comment->comment}}" required>
            <input type="hidden" value="{{$comment->id}}" name="id">
            <input type="submit" class="button" value="更新">
            @csrf
        </form>
      
    </div>
    <div class="column"></div>
</div>
<style>
    .column{
        margin-top:30px;
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>