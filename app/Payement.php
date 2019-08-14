<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Payement extends Model
{
    protected $fillable = [
        'num_carte','expire_carte','cvc_carte','couponCode',
    ];

    public function user(){
    	return $this->BelongsTo(User::class);
    }
}   
