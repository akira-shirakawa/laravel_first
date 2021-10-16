
@extends('layouts.app')
@section('navbar')
<a class="navbar-item" href="/log">
       コメント履歴
    </a>
    <a class="navbar-item" href="/search">
       コメント検索
    </a>
@endsection
@section('content')
    <div class="modal">
        <div class="modal-background"></div>
        <div class="modal-content">
            <div class="box is-text-centered">
                <span is-3>本当に消去しますか？</span>
                <button class="button is-danger yes" >Yes</button>
                <button class="button no" >No </button>
               
            </div>
        </div>
        <button class="modal-close is-large" aria-label="close"></button>
    </div>
    <div class="upload_form">
       
        <form action="/comment" method="post">
            <input type="text" name="comment" class="input" required>
            <input type="submit" class="button" value="追加">
            @csrf
        </form>
        
    </div>

    <table class="table is-fullwidth ">
        <tr><td>id</td><td>comment</td><td></td><td></td></tr>
        @foreach ($comments as $comment)
        <tr>
            <td>           
                {{$comment->id}}        
            </td>
            <td>           
                {{$comment->comment}}        
            </td>
            <td>
                <a href="/comment/update/{{$comment->id}}" class="button is-info">編集</a>
            </td>
            <td>
                <button  class="button is-danger js-modal-target" id="{{$comment->id}}">消去</button>
                <form action="/comment/delete" method="post"class="is-hidden" id="form{{$comment->id}}">
                    
                    <input type="hidden" name="id" value="{{$comment->id}}">
                    <input type="hidden" name="comment_old" value="{{$comment->comment}}  ">
                    
                    @csrf
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection   