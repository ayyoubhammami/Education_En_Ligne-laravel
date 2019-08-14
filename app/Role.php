<?php

namespace App;
use App\User;
use App\Permission;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
      protected $fillable = [     
        'name',
    ];

    public function users(){
      return $this->hasmany(User::class);
    }
    public function permissions(){
      return $this->belongsToMany(Permission::class); 
  }
}
