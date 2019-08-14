<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Theme;


class themeController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $themes = Theme::orderBy('id','ASC')->paginate(100);
        return view('themes.index',compact('themes'))
            ;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        return view('themes.create');
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
            'color' => 'required',
            'slug' => 'required',
            'image' => 'required',
        ]);
      $theme=new Theme(); 
      $theme=$request->all();
      $t=Theme::create($theme); 
      if($request->hasFile('image')){
      $image=$request->file('image');
      $filename= time(). '.' . $image->getClientOriginalExtension();
      move_uploaded_file($image,public_path('/uploads/themes/'.$filename));
      $t->image_th=$filename;
      $t->save();}
        return redirect()->route('themes.index')
                        ->with('success','Theme created successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $theme = Theme::find($id);
        return view('themes.show',compact('theme'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $theme = Theme::find($id);
        return view('themes.edit',compact('theme'));
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
            'nom' => 'required',
            
        ]);

      $theme=Theme::find($id);

        $theme->nom=$request->nom;
        $theme->slug=$request->slug;
        $theme->parent_id=$request->parent_id;
        $theme->color=$request->color;
        $theme->save();
        //update Image
        if($request->hasFile('image')){
        $image=$request->file('image');
        $filename= time(). '.' . $image->getClientOriginalExtension();
        move_uploaded_file($image,public_path('/uploads/themes/'.$filename));
        $theme->image_th=$filename;
        $theme->save();
        }

        Theme::find($id)->update($request->all());
        return redirect()->route('themes.index')
                        ->with('success','theme updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Theme::find($id)->delete();
        return redirect()->route('themes.index')
                        ->with('success','theme deleted successfully');
    }
}