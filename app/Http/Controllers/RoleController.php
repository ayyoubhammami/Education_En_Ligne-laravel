<?php

namespace App\Http\Controllers;
use App\Role;
use App\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class RoleController extends Controller
{
    
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $roles = Role::orderBy('id','DESC')->paginate(5);
        return view('roles.index',compact('roles'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

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
        return view('roles.create');
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
        Role::create($request->all());
        return redirect()->route('roles.index')
                        ->with('success','Role created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = Role::find($id);
        return view('roles.show',compact('roles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response   
     */ 
    public function edit($id)    
    {
        $role = Role::find($id);
        return view('roles.edit',compact('role'));
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
        Role::find($id)->update($request->all());
        return redirect()->route('roles.index')
                        ->with('success','Role updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Role::find($id)->delete();
        return redirect()->route('roles.index')
                        ->with('success','Role deleted successfully');
    }
    public function permissions($id){
        $role=Role::find($id);
        return view('roles.permissions',compact('role'));

    }
    public function attachPermission(Request $request,$id){
     $role=Role::find($id); //hada role eli d5aletou fahemha hadi??ey ey 
     $permissions=$request->permissions; //hadi permiisions eli cochithom 
     $role->permissions()->attach($permissions); //role hadika bach na3tih les permissions eli cocher cv?ey ey tawa cv 3aycheek 
     return redirect()->back(); //w hadi traj3ni lel page eli konet
    }
    public function detachPermission($role_id,$perm_id){ 
     $role=Role::find($role_id);
     $permission=Permission::find($perm_id);
     $role->permissions()->detach($permission->id);
     return redirect()->back();   
    }

}
