<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;
use App\Cour;
class paymentA extends Model
{
    protected $fillable = [
        'num_card','date_exp','code_cv','code_coupon'
    ];

     public function user(){
    	return $this->BelongsTo(User::class);
    }
 	 public function cour(){
     	return $this->belongsTo(Cour::class);
     }
     
}
