<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Auth;
use App\Cour;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request )
    {
       //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, [
            'body' => 'required',
            
        ]);
         //dd($request->all());
        $comment=new Comment();
        $comment->body=$request->body;
        $user=Auth::user();
        $cour=Cour::find($request->cour);
        $user->comments()->save($comment);
        $cour->comments()->save($comment);
        return redirect()->back()
                        ->with('success','comment created successfully');
    
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
    public function edit(Comment $comment,Request $id)
    {
           $this->validate($request, [
            'body' => 'required',         
        ]);
        Comment::find($id)->update($request->all());
        return redirect()->back()
                        ->with('success','comment updated successfully');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $this->validate($request, [
            'body' => 'required',         
        ]);
        $comment=Comment::find($id);
        $comment->body=$request->body;
        $comment->save();
        return redirect()->back()
                        ->with('success','comment updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
      
    Comment::find($id)->delete();
    return redirect()->back()
                      ->with('success','Comment deleted successfully');
  
    }
}
