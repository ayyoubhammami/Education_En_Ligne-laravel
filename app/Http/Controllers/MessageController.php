<?php

namespace App\Http\Controllers;
use App\Message;
use Auth;
use Illuminate\Http\Request;

class MessageController extends Controller
{  
	public function send(Request $request){
	    //dd($request->all());
      $message=new Message(); 
      $message=$request->all();
      $m=Message::create($message); 
      if($request->hasFile('image')){
      $image=$request->file('image');
      $filename= time(). '.' . $image->getClientOriginalExtension();
      move_uploaded_file($image,public_path('/uploads/files/'.$filename));
      $m->file=$filename;
      $m->save();
    }
    return redirect()->back()
                      ->with('success','message envoyé avec succées');  
	}
  public function delete(Request $request,$id){
    Message::destroy($id);
    return redirect()->back()
                      ->with('success','message supprimé avec succées');
  }
  public function Remouve(Request $request,$id)
    {
       
       $message= Message::find($id);
       $message->Remouve=0;
       $message->save();
        return redirect()->back()
                        ->with('success','message supprimé avec succsés');
    }
    
      public function voir(Request $request,$id)
    {
       
       $message= Message::find($id);
       $message->Remouve=1;
       $message->save();
        return redirect()->back()
                        ->with('success','message afiché avec succsés ');
    }
}
