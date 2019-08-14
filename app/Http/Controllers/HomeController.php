<?php

namespace App\Http\Controllers;
use App\Cour;
use Illuminate\Http\Request;
use App\Theme;   
use App\Categorie;
use App\Examen;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {

        return view('home');
    }
     public function acceuil()
    {
        return view('acceuil');
    }
     public function read($id)
    {
        $message=\App\Message::find($id);
        return view('read',compact('message'));
    }
    public function EnvoyeMessage($id)
    {
        $message=\App\Message::find($id);
        return view('EnvoyeMesage',compact('message'));
    }
     public function inbox()
    {
        return view('inbox');
    }
         public function Envoye()
    {
        return view('Envoye');
    }
    public function compose()
    {
        return view('compose');
    }
    public function paymentf()
    {
        return view('paymentf');
    }

    public function page6 ()
     {
            return view('page6',compact('contact'));
    }



    
     public function developpement ($id)
     {      $theme=Theme::find($id);
            return view('developpement',compact('theme')); 
      }
    
     public function communityManager ()
     {
            return view('communityManager');
    }
    public function SocialMedia ()
     {
            return view('SocialMedia');
    }
    public function CloudComputing ()
     {
            return view('CloudComputing');
    }
     public function Coaching ()
     {
            return view('Coaching');
    }
    
     public function paymentA ($id)
     {
           $cour=Cour::find($id);
            return view('paymentA',compact('cour'));
    }
    
     public function viewCours ($id) 
     { 
         $categorie=Categorie::find($id);
          return view('/developpement/php',compact('categorie'));
      }
     public function video ($id)
     {      $cour=Cour::find($id);
            return view('/developpement/video',compact('cour'));
    }
    
     
      public function attest($id)
     {
        $examen=Examen::find($id);
            return view('Examens.attest',compact('examenn'));
    }
    
    public function payementExamen($id)
     {
         $examen=Examen::find($id);
            return view('Examens/payementExamen',compact('examen'));
    }
   


}
