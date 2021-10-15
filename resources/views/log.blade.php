<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://use.fontawesome.com/releases/v5.3.1/js/all.js" defer ></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css" />
    <link rel="stylesheet" href="{{asset('/css/main.css')}}">

    <title>Document</title>
</head> 
<body>
<nav class="navbar is-primary" role="navigation" aria-label="main navigation">
    <a href="/" class="navbar-item"><i class="fas fa-home"></i></a>
   
</nav>
<div class="columns">
    <div class="column"></div>
    <div class="column">
        
        <table class="table is-fullwidth ">
        <tr><td>対象id</td><td>修正前</td><td>修正後</td><td>状態</td></tr>
        @foreach ($log as $value)
        <tr class="{{$value['statue']}}">
            <td>           
                {{$value['comment_id']}}        
            </td>
            <td>           
                {{$value['comment_old']}}        
            </td>
            <td>           
                {{$value['comment']}}        
            </td>
            <td>           
                {{$value['statue']}}        
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