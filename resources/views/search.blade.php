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
    <a href="/" class="navbar-item"><i class="fas fa-home"></i></a>
   
</nav>
<div class="columns">
    <div class="column"></div>
    <div class="column">
        <form action="/search" method="get">
            <input type="text" name="comment" class="input" required>
            <input type="submit" class="button" value="コメントを検索">
            
        </form>
        <table class="table is-fullwidth ">
        <tr><td>id</td><td>comment</td><td></td><td></td></tr>
        @foreach ($comment as $value)
        <tr>
            <td>           
                {{$value['id']}}        
            </td>
            <td>           
                {{$value['comment']}}        
            </td>
            <td>
                <a href="/comment/update/{{$value['id']}}" class="button is-info">編集</a>
            </td>
            <td>
                <form action="/comment/delete" method="post">
                @csrf
                    <input type="hidden" name="id" value="{{$value['id']}}">
                    <input class="button is-danger" type="submit" value="消去">
                    
                    <input type="hidden" name="comment_old" value="{{$value->comment}}">
                </form>
            </td>
        </tr>
        @endforeach
        </table>
    </div>
    <div class="column"></div>
</div>
<link rel="stylesheet" href="{{asset('/css/main.css')}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>