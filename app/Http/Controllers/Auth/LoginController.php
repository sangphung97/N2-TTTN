<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    function login()
    {

            return view('layout.login');
    }
    public function redirectToProvider($providers)
    {
        return Socialite::driver($providers)->redirect();
    }
    public function handleProviderCallback($providers)
    {
        try{
            $socialUser = Socialite::driver($providers)->user();
        }
        catch(\Exception $e)
        {
            return redirect()->route('trangchu')->with(['flash_level'=>'danger','flash_message'=>"Đăng nhập không thành công"]);
        }
        $socialProvider = SocialProvider::where('provider_id',$socialUser->getId())->first();
        if(!$socialProvider)
        {
            $user = User::where('email',$socialUser->getEmail())->first();
            if($user)
            {
                return redirect()->route('trangchu')->with(['flash_level'=>'danger','flash_message'=>"Email đã có người sử dụng"]);
            }
            else{
                $user = new User();
                $user->email=$socialUser->getEmail();
                $user->fullname=$socialUser->getName();
                $image = explode('?',$socialUser->getAvatar());
                $user->avatar = $image[0];
                $user->save();
            }
            $provider= new SocialProvider();
            $provider->provider_id=$socialUser->getId();
            $provider->provider=$providers;
            $provider->email=$socialUser->getEmail();
            $provider->save();
        }
        else
        {
            $user = User::where('email',$socialUser->getEmail())->first();
        }
        Auth()->login($user);
        return redirect()->route('trangchu')->with(['flash_level'=>'success','flash_message'=>"Đăng nhập thành công"]);
    }
}
