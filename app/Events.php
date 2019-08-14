<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Categorie;
class Events extends Model
{
        public $fillable = ['titre','description','date','file','user_id','Type','temps','lien','image'];

       public function users()
       {
     	 return $this->hasmany(User::class);
   		}
   		 public function categorie(){
     	return $this->belongsTo(Categorie::class);
     }
}
