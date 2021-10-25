<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Log;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::all();
        return view('index',['comments'=>$comments]);
       
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $comment = Comment::find($id);
        return view('edit',['comment'=>$comment]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Comment::create($request->all());
        $comment_id = Comment::latest()->first()->id;
       
        Log::create(['comment'=>$request->comment,'statue'=>'created','comment_id'=>$comment_id]);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {   
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $comments = Comment::find($request->id);
       
        $comments->comment = $request->comment;
        $comments->save();
        Log::create(['comment'=>$request->comment,'comment_old'=>$request->comment_old,'statue'=>'updated','comment_id'=>$request->id]);
        return redirect("/");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param   \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $comments = Comment::find($request->id);
        $comments->delete();
        Log::create(['comment_old'=>$request->comment_old,'statue'=>'deleted','comment_id'=>$request->id]);
        return redirect('/');

    }

    public function search(Request $request)
    {
        $value = $request->input('comment');
        
        
        $comment = Comment::where('comment','like',"%".$value."%")
        ->where('created_at','>',$request->created_at_from ?? '2000-01-01' )
        ->where('created_at','<',$request->created_at_to ?? '2999-12-30')
        ->where('updated_at','>',$request->updated_at_from ?? '2000-01-01')
        ->where('updated_at','<',$request->updated_at_to ?? '2999-12-30')
        ->get();
       \Session::flash('created_at_from',$request->created_at_from);
       \Session::flash('created_at_to',$request->created_at_to);
       \Session::flash('updated_at_from',$request->updated_at_from);
       \Session::flash('updated_at_to',$request->updated_at_to);
       \Session::flash('comment',$request->comment);
        
        return view('search',['comment'=>$comment]);
    }
}
