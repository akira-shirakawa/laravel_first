
  @extends('layouts.app')
  @section('navbar')
    <a href="/" class="navbar-item"><i class="fas fa-home"></i></a>
  @endsection
  
@section('content')
     
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
 @endsection 