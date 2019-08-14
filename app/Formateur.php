<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formateur extends Model
{
    protected $fillable = [
        'name', 'email', 'password','show_password','password_confirmation','tel','cin','sexe','niveau','avatar','specialite','date','role_id','cv'
    ];
}
