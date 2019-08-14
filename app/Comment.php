<?php

namespace App;

use App\User;
use App\Cour;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
     protected $fillable = [     
        'body',
    ];
    
     public function user(){
     	return $this->belongsTo(User::class);
     }
     public function cour(){
     	return $this->belongsTo(Cour::class);
     }
}
