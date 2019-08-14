<?php

namespace App;
use App\Categorie;
use App\Questions;
use App\User;
use Illuminate\Database\Eloquent\Model;
use App\Payement_Examen;

class Examen extends Model
{
	 public $fillable = ['titre','note','publier','paye_e'];

     public function user(){
     	return $this->belongsTo(User::class);
     }
      public function categorie(){
     	return $this->belongsTo(Categorie::class);
     }

     public function questions()
     {
        return $this->hasMany(Questions::class);
    }

      public function Payement_Examen(){
          return $this->hasMany(Payement_Examen::class);

     }
}
