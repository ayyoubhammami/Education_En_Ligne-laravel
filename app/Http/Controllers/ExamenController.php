<?php

namespace App\Http\Controllers;

use App\Examen;
use Illuminate\Http\Request;
use Auth;
use App\Categorie;
use App\User;
class ExamenController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         $examens = Examen::orderBy('id','DESC')->paginate(100);
        return view('Examens.index',compact('examens'))
           ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Examens.create');
    }

    public function addExam(Request $request,$id)
    {
       
       $examen= Examen::find($id);
       $examen->publier=1;
       $examen->save();
        return redirect()->route('Examens.index')
                        ->with('success','Examen publier  avec succés');
    }
    public function Remouve(Request $request,$id)
    {
       
       $examen= Examen::find($id);
       $examen->publier=0;
       $examen->save();
        return redirect()->route('Examens.index')
                        ->with('success','Examen caché avec succés');
    }

    public function choisirExam(Request $request)
    {
        $examens = Examen::orderBy('id','DESC')->paginate(5);
        return view('Examens.choisirExam',compact('choisirExam'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

        public function passer($id)
    {
         $examen = Examen::find($id);

        return view('Examens.passer',compact('examen'));
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
        ]);
        
        $examen =new Examen ();
        $examen->titre=$request->titre; 
        $examen->note=$request->note;

        
        if($request->categ){
        $categorie=Categorie::find($request->categ);
        $categorie->examen()->save($examen); 
        }
        
        $user=User::find($request->user_id);
        
        $user->examen()->save($examen);        
        return view('questions.create',compact('examennn'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Examen  $examen
     * @return \Illuminate\Http\Response
     */
    public function show(Examen $examen)
    {
        $examen = Examen::find($id);
        return view('Examens.show',compact('examen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Examen  $examen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $examen = Examen::find($id);
        return view('Examens.edit',compact('examen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Examen  $examen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Examen $examen,$id)
    {
        
        $this->validate($request, [
            'titre' => 'required',
            
        ]);


        Examen::find($id)->update($request->all());
        return redirect()->route('Examens.index')
                        ->with('success','Examen updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Examen  $examen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Examen $examen,$id)
    {
          Examen::find($id)->delete();
        return redirect()->route('Examens.index')
                        ->with('success','Examen deleted successfully');
    }
}
