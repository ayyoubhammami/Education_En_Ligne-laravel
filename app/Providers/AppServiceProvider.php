<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\User;
use Illuminate\Support\Facades\Validator;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         Schema::defaultStringLength(191);
         Blade::if('canDo', function ($permission) {
         return auth()->user()->canDo($permission);
         });
         //delete Formateurs
        foreach (User::whereHas('role',function($q) 
        {$q->where('id',"3");})->get() as $user) {
        if($user->payed=='0' && $user->created_at<=\Carbon\Carbon::now(new \DateTimeZone('Europe/Paris'))->subDay(1)){
          User::find($user->id)->delete();
          }
      }

        //Add this custom validation rule.
    Validator::extend('alpha_spaces', function ($attribute, $value) {

        // This will only accept alpha and spaces. 
        // If you want to accept hyphens use: /^[\pL\s-]+$/u.
        return preg_match('/^[\pL\s]+$/u', $value); 

    });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
    /**
 * Bootstrap any application services.
 *
 * @return void
 */

}
