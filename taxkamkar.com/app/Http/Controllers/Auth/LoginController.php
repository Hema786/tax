<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

/*
 * Code for google login
 */

use Socialite;
use Auth;
use Exception;
use App\User;

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
    protected $redirectTo = 'account';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect()->route('login');
    }
    
    /*
    * Code for google login
    */
    
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();
        $finduser = User::where('google_id', $user->id)->first();
        //var_dump($finduser); die();
        //print_r($user->user['given_name']); die();
        if($finduser){
            Auth::login($finduser);
            return redirect()->route('account');
        }else{
            $newUser = User::create([
                'username' => $user->name,
                'first_name' => $user->user['given_name'],
                'last_name' => $user->user['family_name'],
                'role' => '4',
                'email' => $user->email,
                'password' => $user->token,
                'google_id'=> $user->id
            ]);
            Auth::login($newUser);
            return redirect()->route('account');
        }
    }
}
