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
<nav class="navbar" role="navigation" aria-label="main navigation">
    <a class="navbar-item">
       
    </a>
</nav>
<div class="columns">
    <div class="column"></div>
    <div class="column">
        <form action="/comment" method="post">
            <input type="text" name="comment" class="input" required>
            <input type="submit" class="button" value="送信">
            @csrf
        </form>
        <table class="table is-fullwidth ">
        <tr><td>id</td><td>comment</td></tr>
        @foreach ($comments as $comment)
        <tr>
            <td>           
                {{$comment->id}}        
            </td>
            <td>           
                {{$comment->comment}}        
            </td>
        </tr>
        @endforeach
        </table>
    </div>
    <div class="column"></div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>