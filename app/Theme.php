<?php

namespace App;
use App\Categorie;
use Illuminate\Database\Eloquent\Model;
use vendor\devdojo\chatter\src\Models\Models;
use App\User;
class Theme extends Model
{
     public $fillable = ['nom','color','slug','image_th']; 
     protected $table = 'themes';
     public $timestamps = true;
     //public $with = 'parents'; 

     public function categories(){  
     	return $this->hasMany(Categorie::class);
     }

     public function discussions()
    {
        return $this->hasMany(Models::className(Discussion::class),'theme_id');
    }

         public function user(){  
        return $this->hasMany(User::class);
     }
    
}
