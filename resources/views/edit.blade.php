<!DOCTYPE html>
@extends('layouts.app')
@section('navbar')
    <a href="/" class="navbar-item"><i class="fas fa-home"></i></a>
@endsection
@section('content')
        <form action="/comment/update" method="post">
            
            <input type="text" name="comment" class="input" value="{{$comment->comment}}" required>
            <input type="hidden" value="{{$comment->id}}" name="id">
            <input type="hidden" value="{{$comment->comment}}" name="comment_old" required>
            <input type="submit" class="button" value="更新">
            @csrf
        </form>
@endsection


  