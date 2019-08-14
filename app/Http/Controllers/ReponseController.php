<?php

namespace App\Http\Controllers;
use App\Questions;
use App\reponse;
use Illuminate\Http\Request;
use Auth;
class ReponseController extends Controller
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
    public function create()
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
         //echo($request->questions[0]);
    

    
       $reponce=new reponse(); 
       $reponce->reponse=$request->questions;
       //$question=Questions::find($request->question);
       $reponce->question_id=$request->questions;
       $reponce->user_id=$request->user_id;
       $reponce->save();
     
   return  view('Examens/attest');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\reponse  $reponse
     * @return \Illuminate\Http\Response
     */
    public function show(reponse $reponse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\reponse  $reponse
     * @return \Illuminate\Http\Response
     */
    public function edit(reponse $reponse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\reponse  $reponse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, reponse $reponse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\reponse  $reponse
     * @return \Illuminate\Http\Response
     */
    public function destroy(reponse $reponse)
    {
        //
    }
}
