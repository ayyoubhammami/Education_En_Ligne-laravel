<?php

namespace App;
use App\User;
use App\Categorie;
use App\Comment;
use App\paymentA;
use Illuminate\Database\Eloquent\Model;

class Cour extends Model
{
     public $fillable = ['titre','titreV','description','prix','fichier','image','paye']; 

     public function user(){
     	return $this->belongsTo(User::class);
     }
      public function categorie(){
     	return $this->belongsTo(Categorie::class);
     }
     public function comments(){
     	return $this->hasMany(Comment::class);
     }
      public function paymentA(){
          return $this->hasMany(paymentA::class);

     }

}
