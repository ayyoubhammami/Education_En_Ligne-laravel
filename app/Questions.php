<?php

namespace App;
use APP\Examen;
use APP\reponce;
use APP\Choix;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
	protected $fillable = ['annonce','choix1','choix2','choix3','choixVrais'];
         
     public function examen(){
     	return $this->belongsTo(Examen::class);
     }

     public function reponce(){
     	return $this->hasMany(reponce::class);
     }

 }
