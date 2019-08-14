<?php

namespace App\Http\Controllers;
use App\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class PermissionController extends Controller
{



     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $permissions = Permission::orderBy('id','DESC')->paginate(100);
        return view('permissions.index',compact('permissions'))
            ;
    }


  /*  
    public function index(){
     $permissions=Permission::all(); 
     return view('permissions.list',compact('permissions'));
    }*/
 /* public function insertR(Request $req)
    {
       
    	$nom=$req->input('nom');



    	$data= array('name'=>$nom);
    	DB::table('roles')->insert($data);
    	echo'succses';
    }
    public function insert(){
    	 return view('insert');

    }*/














    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        return view('permissions.create');
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
            
            'name' => 'required',
        ]);
        Permission::create($request->all());
        return redirect()->route('permissions.index')
                        ->with('success','permissions created successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $permission = Permission::find($id);
        return view('permissions.show',compact('permissions'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permission = Permission::find($id);
        return view('permissions.edit',compact('permission'));
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
            
            'name' => 'required',
        ]);


        Permission::find($id)->update($request->all());
        return redirect()->route('permissions.index')
                        ->with('success','permissions updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Permission::find($id)->delete();
        return redirect()->route('permissions.index')
                        ->with('success','permissions deleted successfully');
    }
}
