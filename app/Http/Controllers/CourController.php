<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use App\Theme;
use App\Cour;
use Auth;
class CourController extends Controller
{
    public function add(){
    	$categories=Categorie::all();
    	$themes=Theme::all();
     return view('cours.ajoutformation',compact('categories','themes')); 
    }
    public function MesCours(Request $request){
        $cours = Cour::orderBy('id','DESC')->paginate(100);
        return view('cours.mesCours',compact('cours'))
            ;
    }
    public function save(Request $request){ 
         $this->validate($request, [
            'titre' => 'required',
            'titreV'=> 'required',
            'description' => 'required',
            'image' => 'required|Image',
            'video'=> 'required|File',
            'prix'=> 'required',

        ]);
          
        $cour=new Cour();
        $cour=$request->all(); 
        
        $c=Cour::create($cour);
        
        if($request->categ){
        $categorie=Categorie::find($request->categ); 
        $categorie->cours()->save($c); 
        }
        
        Auth::user()->cours()->save($c);
        //vedio
        if($request->hasFile('video')){
        $file=$request->file('video');
        $filename= time(). '.' . $file->getClientOriginalExtension();
        move_uploaded_file($file,public_path('/uploads/vedios/'.$filename));
        $c->fichier=$filename;
        $c->save();
        }
    
    //image
    if($request->hasFile('image')){
        $image=$request->file('image'); 
        $filename= time(). '.' . $image->getClientOriginalExtension();
        move_uploaded_file($image,public_path('/uploads/images/'.$filename));
        $c->image=$filename;
        $c->save();
    }
    	return redirect()->back()
    	                 ->with('success','votre cours a été bien ajouté');  
	
    }


  public function apropos ()
     {
            return view('apropos');
    }





    
  public function prodfunct()
     {
        $theme=Theme::all();
            return view('cours.ajoutformation',compact('Theme'));
    }



    public function findProductName(Request $request){


        //if our chosen id and products table prod_cat_id col match the get first 100 data 

        //$request->id here is the id of our chosen option id
        $data=Categorie::select('nom','id')->where('theme_id',$request->id)->take(100)->get();
        return response()->json($data);//then sent this data to ajax success
    }

















    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cours = Cour::orderBy('id','DESC')->paginate(100);
        return view('cours.index',compact('cours'))
            ;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        return view('cours.create');
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
            'titreV'=> 'required',
            'description' => 'required',
            'image' => 'required|Image',
            'file'=> 'required',
            'prix'=> 'required',
        ]);
        Cour::create($request->all());
        return redirect()->route('cours.index')
                        ->with('success','Cour créer avec successé');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cour = Cour::find($id);
        return view('cours.show',compact('cour'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $cour = Cour::find($id);
        return view('cours.edit',compact('cour'));
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
            'titreV' => 'required',
            'description' => 'required',
        ]);

        $cour=Cour::find($id);

        $cour->titre=$request->titre;
        $cour->titreV=$request->titreV;
        $cour->description=$request->description;
        $cour->prix=$request->prix;
        $cour->categorie_id=$request->categorie;
        $cour->save();
        //update Image
        if($request->hasFile('image')){
        $image=$request->file('image');
        $filename= time(). '.' . $image->getClientOriginalExtension();
        move_uploaded_file($image,public_path('/uploads/images/'.$filename));
        $cour->image=$filename;
        $cour->save();
        }
        //update vedio
        if($request->hasFile('vedio')){
        $vedio=$request->file('vedio');
        $filename= time(). '.' . $vedio->getClientOriginalExtension();
        move_uploaded_file($vedio,public_path('/uploads/vedios/'.$filename));
        $cour->fichier=$filename;
        $cour->save();
        }
        if ( Auth::user()->role_id==1) {
             return redirect()->route('cours.index')
                        ->with('success','Cour updated successfully');
        }
         if ( Auth::user()->role_id==3) {
             return redirect()->route('MesCours')
                        ->with('success','Cour updated successfully');
        }
       
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cour::find($id)->delete();
         if ( Auth::user()->role_id==1) {
             return redirect()->route('cours.index')
                         ->with('success','Cour supprimé avec success');
        }
         if ( Auth::user()->role_id==3) {
             return redirect()->route('MesCours')
                         ->with('success','Cour deleted success');
        }
                       
    }






}
