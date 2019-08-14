<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reponse extends Model

{
	protected $fillable = ['reponse'];

    public function question(){
     	return $this->belongsTo(Questions::class);
     }

      public function user(){
     	return $this->belongsTo(User::class);
     }
}
