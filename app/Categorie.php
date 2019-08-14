<?php

namespace App;
use App\Cour;
use App\Theme;
use App\Events;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public $fillable = ['nom','image'];




        public function examen()
     {
        return $this->hasMany(Examen::class);
    }

 public function events(){
        return $this->hasMany(Events::class);
    }

    public function cours(){
    	return $this->hasMany(Cour::class);
    }
    public function theme(){ 
    	return $this->belongsTo(Theme::class);
    }
}
