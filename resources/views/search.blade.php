@extends('layouts.app')
@section('navbar')
    <a href="/" class="navbar-item"><i class="fas fa-home"></i></a>
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
        <form action="/search" method="get">
        <p>作成日</p>
            <input type="date" name="created_at_from">~
            <input type="date" name="created_at_to">
            <p>更新日</p>
            <input type="date" name="updated_at_from">~
            <input type="date" name="updated_at_to">
            <p>コメント</p>
            <input type="text" name="comment" class="input" >
            <input type="submit" class="button" value="検索">
         
        </form>
        <table class="table is-fullwidth ">
        <tr><td>id</td><td>comment</td><td>作成日時</td><td>更新日時</td><td></td></tr>
        @foreach ($comment as $value)
        <tr>
            <td>           
                {{$value['id']}}        
            </td>
            <td>           
                {{$value['comment']}}        
            </td>
            <td>
               {{$value['created_at']}}
            </td>
            <td>
                {{$value['updated_at']}}
            </td>
            <td>
            <a href="/comment/update/{{$value['id']}}" class="button is-info">編集</a>
            <button  class="button is-danger js-modal-target" id="{{$value->id}}">消去</button>
                <form action="/comment/delete" method="post"class="is-hidden" id="form{{$value->id}}">
                    
                    <input type="hidden" name="id" value="{{$value->id}}">
                    <input type="hidden" name="comment_old" value="{{$value->comment}}  ">
                    
                    @csrf
                </form>
            </td>
        </tr>
        @endforeach
        </table>
@endsection  