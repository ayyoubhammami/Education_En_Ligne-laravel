<?php

namespace App\Http\Controllers;
use App\Payement;
use App\paymentA;
use Illuminate\Http\Request;
use Auth;
use App\Cour;
use App\Payement_Examen;
use App\Examen;
class PayementController extends Controller
{
     public function payement(Request $request){
     //dd($request->all()); 
     	
      $paye=new Payement();
      $paye->user_id=$request->user_id; 
      $paye->num_carte=$request->num_carte;
      $paye->expire_carte=$request->expire_carte;
      $paye->cvc_carte=$request->cvc_carte;
      $paye->couponCode=$request->couponCode;
      $paye->save();
      $user=Auth::user(); 
      $user->payed=$request->payed;     
      $user->save();
      return redirect()->route('home')->with('success','payement valide vous pouvez maintenant profiter des différents offres de notre plateforme ');
    }
     public function payementA(Request $request ,$id){ 
      //dd($request->all());
      $payeA=new paymentA();
      $user=Auth::user();
      $payeA->user_id=$request->user_id; 
      $payeA->cour_id=$request->cour_id;
      $payeA->num_card=$request->num_card;
      $payeA->date_exp=$request->date_exp;
      $payeA->code_cv=$request->code_cv;
      $payeA->code_coupon=$request->code_coupon;
      $payeA->save();
      $cour= Cour::find($id);
      $cour->paye=$request->paye+1;
      $cour->save();
       return redirect()->route('video',$cour->id); 
                        
    }

     public function payementEx(Request $request ,$id){ 
      //dd($request->all());
      $payeA=new Payement_Examen();
      $user=Auth::user();
      $payeA->user_id=$request->user_id; 
      $payeA->examen_id=$request->examen_id;
      $payeA->num_card=$request->num_card;
      $payeA->date_exp=$request->date_exp;
      $payeA->code_cv=$request->code_cv;
      $payeA->code_coupon=$request->code_coupon;
      $payeA->save();
      $examen= Examen::find($id);
      $examen->paye_e=$request->paye+1;
      $examen->save();
       return redirect()->route('passer',$examen->id); 
                        
    }


     
}
