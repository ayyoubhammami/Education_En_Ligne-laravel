<?php

namespace App;
use App\Role;
use App\Payement;
use App\Comment;
use App\Cour;
use App\Theme;
use App\Examen;
use App\Events;
Use App\reponse;
Use App\paymentA;
use App\PermissionRole;
use App\Payement_Examen;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','show_password','password_confirmation','tel','cin','sexe','niveau','avatar','specialite','date','role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    public function examen()
     {
        return $this->hasMany(Examen::class);
    }

        public function reponse()
     {
        return $this->hasMany(reponse::class);
    }
        public function Payement_Examen()
     {
        return $this->hasMany(Payement_Examen::class);
    }






    public function role()
    {
        return $this->BelongsTo(Role::class);
    }
    public function event()
    {
        return $this->hasMany(Events::class);
    }
     public function cours()
     {
        return $this->hasMany(Cour::class);
    }
         public function theme()
     {
        return $this->hasOne(Theme::class);
    }
    public function payement()
    {
        return $this->hasOne(Payement::class);   
     }
         public function paymentA()
    {
        return $this->hasMany(paymentA::class);   
     }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
   
    public function canDo($permission){  
        $role = $this->role()->first();
        $permissions=$role->permissions()->get();
        foreach($permissions as $perm){
            if($permission == $perm->name){
                return true;
            }
        }
        return false;
    }
      public function per(){ 
        $role = $this->role()->first();
        $perRol = $role->permissions()->get();
        $retour = [];
        foreach ($perRol as $PR) {
            if($PR->roles->id==$role){
                array_push($retour, $PR);
            }            
        }
        return $retour;
      }


    public function sugg(){
        $cours = Cour::orderBy('created_at', 'desc')->get();

        $retour = [];
        $i = 0;
        foreach ($cours as $c) {
            if ($c->categorie->theme->id == $this->specialite && $i<3) {
                array_push($retour, $c);
                $i++;
            }
        }

        return $retour;
    }
    public function eventt(){
        $event = Events::orderBy('created_at', 'desc')->get();

        $retour = [];
        $i = 0;
        foreach ($event as $e) {
            if ($e->categorie->theme->id == $this->specialite && $i<3) {
                array_push($retour, $e);
                $i++;
            }
        }

        return $retour;
    }
}
