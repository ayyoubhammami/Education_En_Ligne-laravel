<?php

namespace App;
use App\User;
use App\Examen;
use Illuminate\Database\Eloquent\Model;

class Payement_Examen extends Model
{
     protected $fillable = [
        'num_card','date_exp','code_cv','code_coupon'
    ];

     public function user(){
    	return $this->BelongsTo(User::class);
    }
 	 public function examen(){
     	return $this->belongsTo(Examen::class);
     }
}
