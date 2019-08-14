<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categorie;
use App\Theme;

class categoriesController extends Controller 
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories = Categorie::orderBy('id','ASC')->paginate(100);
        return view('categories.index',compact('categories'))
            ;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        return view('categories.create');
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
            'nom' => 'required',
            'theme'=>'required',
            'image'=>'required',
            
        ]);
        $categorie=new Categorie();
        $categorie=$request->all();
        $c=Categorie::create($categorie); 
        $theme=Theme::find($request->theme);
        $theme->categories()->save($c);
       if($request->hasFile('image')){
       $image=$request->file('image');
       $filename= time(). '.' . $image->getClientOriginalExtension();
       move_uploaded_file($image,public_path('/uploads/images/'.$filename));
       $c->image=$filename;
       $c->save();
    }

        return redirect()->route('categories.index')
                        ->with('success','Categorie created successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categorie = Categorie::find($id);
        return view('categories.show',compact('categorie'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorie = Categorie::find($id);
        return view('categories.edit',compact('categorie'));
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
    //dd($request->all());
        $this->validate($request, [
            'nom' => 'required',
            'theme'=>'required',
            //'image'=>'required',
        ]);
     $categorie=Categorie::find($id);
     $categorie->nom=$request->nom;
     $categorie->theme_id=$request->theme;
     $categorie->save();
        //update Image
     if($request->hasFile('image')){
      $image=$request->file('image');
      $filename= time(). '.' . $image->getClientOriginalExtension();
      move_uploaded_file($image,public_path('/uploads/images/'.$filename));
      $categorie->image=$filename;
      $categorie->save();
    }
        return redirect()->route('categories.index')
                        ->with('success','categorie updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Categorie::find($id)->delete();
        return redirect()->route('categories.index')
                        ->with('success','categorie deleted successfully');
    }
}