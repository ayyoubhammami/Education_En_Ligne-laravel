<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Formateur;
use Mail;
use App\Payement;
class UserController extends Controller
{
    public function inscription ()
     {
            return view('users.inscription',compact('inscription'));
    }
  public function attendreponse ()
     {
            return view('users.attendreponse',compact('attendreponse'));
    }
   public function enAttend(){
     
    return view('users.enAttend',compact('enAttend'));
    }

    public function registerF(){
     
    return view('users.registerF',compact('registerF'));
    }

    
    public function apprenants(){
     $users=User::whereHas('role',function($q)
      {$q->where('name',"apprenant");})->get();
    return view('users.list',compact('users'));
    }

    public function formateurs(){
     $users=User::whereHas('role',function($q)
      {$q->where('id',"3");})->get();
    return view('users.formateurs',compact('users'));
    }
     public function edit($id)    
    {
        $users = User::find($id);
        return view('users.edit',compact('users'));
    }

     public function update(Request $request, $id)  
    {
        $this->validate($request, [
            'name' => 'required',
        ]);
        $user=User::find($id);
        $user->name=$request->name;
        $user->password=bcrypt($request->show_password);
        $user->show_password=$request->show_password;
        $user->tel=$request->tel;
        $user->cin=$request->cin;
        $user->niveau=$request->niveau;
        $user->save();
        return redirect()->route('home')
                        ->with('success','user updated successfully');
    }
    public function updateImage(Request $request){
      if($request->hasFile('image')){
      $image=$request->file('image');
      $filename= time(). '.' . $image->getClientOriginalExtension();
      move_uploaded_file($image,public_path('/avatar/'.$filename));
      $user=Auth::user();
      $user->avatar=$filename;
      $user->save();
    }
    return redirect()->back();
  }

 public function destroy($id)
    {
      $A=User::find($id);
       $B=$A->role_id;
       if ($B==2) {
             User::find($id)->delete();
        return redirect()->route('apprenants')
                        ->with('success','apprentan deleted successfully');
       }
       else{
         User::find($id)->delete();
        return redirect()->route('formateurs')
                        ->with('success','formateur deleted successfully');
       }
    
    }

    public function createFormateur(Request $request){
              $this->validate($request, [
            'name' => 'required|alpha_spaces',
            'email' => 'required|email|max:255|unique:users|unique:formateurs',
            'sexe' => 'required',
            'password_confirmation' => 'required',
            'password' => 'required|between:6,15|confirmed',
            'date' => 'required|Date',
            'cv' => 'required|File',
            'niveau' => 'required',
            'specialite' => 'required',
            'tel' => 'required|min:8|Numeric',
            'cin' => 'required|min:8|Numeric',
        ]);
              $rules = [
    
    'specialite' => 'required',
    'niveau' => 'required',
    
];

      //dd($request()->all());
      $formateur=new Formateur();
      $f=$formateur->create(request()->all());
      if($request->hasFile('cv')){
      $cv=$request->file('cv');
      $filename= time(). '.' . $cv->getClientOriginalExtension();
      move_uploaded_file($cv,public_path('/uploads/cv/'.$filename));
      $f->cv=$filename;
      $f->save(); 
    }

    return redirect()->route('attendreponse')
                     ->with('success','Votre demande a été bien enregistré');
    }

     public function destroyformateur($id)
    {
         Formateur::find($id)->delete();
        return redirect()->back()
                        ->with('success','formateur deleted successfully');
       
    
    }
    public function addUser(Request $request){ 
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->role_id=$request->role_id;
        $user->sexe=$request->sexe;
        $user->date=$request->date;
        $user->specialite=$request->specialite;
        $user->password_confirmation=$request->password_confirmation;
        $user->password=bcrypt($request->password);
        $user->show_password=$request->password;
        $user->tel=$request->tel;
        $user->cin=$request->cin;
        $user->niveau=$request->niveau;
        $user->save();
        
        $formateur=Formateur::find($request->formateur); 
        Mail::to($formateur->email)->send(new \App\Mail\sentMail($user));
        $formateur->delete();
       return redirect()->back()
                     ->with('success','Formateur bien accepter');
    } 
}

