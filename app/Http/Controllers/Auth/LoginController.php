<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
Use Socialite;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */


public function authenticated() { 
    $user = Auth::user();
    $type = $user->role_id;

    if($type==1){
        return redirect()->intended('/home');
    }elseif($type==2){
        return redirect()->intended('/home');
    }else{
        return redirect()->intended('/home');
    }
    /*
    if ($user->role_id==3){  return redirect( 'paymentf'); }
    elseif ($user->role_id==2) {
        # code...
    }*/
    }



    //protected $redirectTo = '/home';

/*public function traitement(Request $req)
    {
       
$user = Auth::user();

            $R=$user()->role_id;
            if ('$R==3'){
           return redirect( '/paymentf');}
            elseif ('$R==2')
                
            {   return redirect('/payment');}
     }*/
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }






    /**
* Redirect the user to the Provider authentication page.
*
* @return \Illuminate\Http\Response
*/
public function redirectToProvider($provider)
{
    return Socialite::driver($provider)->redirect();
}



/**
* Obtain the user information from the Provider.
*
* @return \Illuminate\Http\Response
*/
public function handleProviderCallback(Request $request)
{
  $state = $request->get('state');
  $request->session()->put('state',$state);
  session()->regenerate();
  $user = Socialite::driver('facebook')->user();
  $userInsert = new User();
  $userInsert->name = $user->getName();
  $userInsert->email = $user->getEmail();
  $userInsert->password = bcrypt('password');
  $userInsert->save();
  return redirect()->guest('admin/dashboard');
}

/**
* Create or get a user based on provider id.
*
* @return Object $user
*/
private function createOrGetUser($providerUser, $provider)
{
   $account = SocialAccount::where('provider', $provider)
            ->where('provider_user_id', $providerUser->getId())
            ->first();

   if ($account) {
       //Return account if found
       return $account->user;
   } else {

       //Check if user with same email address exist
       $user = User::where('email', $providerUser->getEmail())->first();

       //Create user if dont'exist
       if (!$user) {
           $user = User::create([
               'email' => $providerUser->getEmail(),
               'name' => $providerUser->getName()
           ]);

       }

       //Create social account
       $user->social_accounts()->create([
               'provider_user_id' => $providerUser->getId(),
               'provider' => $provider
           ]);

       return $user;
   }
}

}
