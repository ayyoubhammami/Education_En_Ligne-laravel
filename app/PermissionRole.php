<?php

namespace App;
use App\Role;
use App\User;
use App\Permission;
use Illuminate\Database\Eloquent\Model;

class PermissionRole extends Model
{
     protected $fillable = [
        'role_id','permission_id',
    ];



    public function users(){
      return $this->hasmany(User::class);
    }
    public function permissions(){
      return $this->belongsToMany(Permission::class); 
  }
  public function roles(){
      return $this->belongsToMany(Role::class);
    }
}
