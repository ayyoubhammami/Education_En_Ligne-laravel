<?php

namespace App\Http\Controllers;

use App\Events;
use Illuminate\Http\Request;
use Auth;
use App\Http\Controllers\Controller;
use App\Categorie;
class EventsController extends Controller
{
 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $events = Events::orderBy('id','DESC')->paginate(5);
        return view('Event.index',compact('events'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        return view('Event.create');
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
            'titre' => 'required',
            'description' => 'required',
            'Type' => 'required',
            
        ]);
        $event=new Events();
        
        $event->titre=$request->titre;
        $event->date=$request->date;
        $event->Type=$request->Type;
        $event->temps=$request->temps;
        $event->lien=$request->lien;
        $event->description=$request->description;
        $user=Auth::user();
        //dd($event);

        if($request->hasFile('file')){
        $file=$request->file('file');
        $filename= time(). '.' . $file->getClientOriginalExtension();
        move_uploaded_file($file,public_path('/uploads/events/'.$filename));
        $event->file=$filename;
        $event->save();}
        //image
        if($request->hasFile('image')){
        $image=$request->file('image'); 
        $filename= time(). '.' . $image->getClientOriginalExtension();
        move_uploaded_file($image,public_path('/uploads/events/'.$filename));
        $event->image=$filename;
        $event->save();}

         if($request->categ){
        $categorie=Categorie::find($request->categ); 
        $categorie->events()->save($event); 
        }
        $user->event()->save($event);        
        $event->save();

        return redirect()->route('Event.index')
                        ->with('success','events créer avec succès');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Events::find($id);
        return view('Event.show',compact('event'));
    }

    public function read($id)
    {
         $event = Events::find($id);
        return view('Event.evennement',compact('event'));
    }
    
        public function allevent(Request $request)
    {
        $events = Events::orderBy('id','DESC')->paginate(5);
        return view('Event.evennements',compact('events'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Events::find($id);
        return view('Event.edit',compact('event'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'titre' => 'required',
            'description' => 'required',
        ]);


         $event=Events::find($id);

          //update Image
        if($request->hasFile('image')){
        $image=$request->file('image');
        $filename= time(). '.' . $image->getClientOriginalExtension();
        move_uploaded_file($image,public_path('/uploads/events/'.$filename));
        $event->image=$filename;
        $event->save();
        }
        $event->titre=$request->titre;
        $event->temps=$request->temps;
        $event->description=$request->description;
        $event->date=$request->date;
        $event->categorie_id=$request->categorie;
        $event->save();
       
        
        return redirect()->route('Event.index')
                        ->with('success','event met à jour avec succès');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Events::find($id)->delete();
        return redirect()->route('Event.index')
                        ->with('success','events deleted successfully');
    }
}