<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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

    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated(Request $request, $user)
    {
            // Notification view
            notify()->success(__('alerts.welcome', ['name' => $user->email]) , __('alerts.success_title'));

            //logging
            \Log::channel('front')->info(__('messages.userlogged'), ['user_id' => $user->id]);


    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function login(Request $request)
    {

        $this->validateLogin($request);

        // $userLogin=DB::table('users')
        // ->where('email', $request->email)
        // ->where('is_logged', 1)
        // ->first();



        // if (!empty($userLogin->name)) {
        // // notify()->info(__('alerts.alreadylogged', ['name' => $userLogin->name]) , __('alerts.info_title'));
        // return back()->with(['message',__('alerts.alreadylogged', ['name' => $userLogin->name])]);
        // }

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if (method_exists($this, 'hasTooManyLoginAttempts') &&
        $this->hasTooManyLoginAttempts($request)) {

            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        // Traitement du checkbox remember me
        if ($request->has('remember')) {
            if ($request->remember=="on") {
                $remember=1;
            }else{
                $remember=0;
            }
        }else {
            $remember=false;
        }

        if ($this->attemptLogin($request,$remember)) {

            if ($request->hasSession()) {
                $request->session()->put('loggedAt', time());
                $user= \Auth::user();

                \DB::table('users')
                ->where('id', $user->id)
                ->update(['is_logged' => 1]);

            }
            return $this->sendLoginResponse($request);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        // Notification view
        notify()->error(__('alerts.error_login') , __('alerts.error_title'));

        return $this->sendFailedLoginResponse($request);

    }

     /**
     * The user has logged out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    protected function loggedOut(Request $request)
    {
         // Notification view
         notify()->error(__('auth.loggout_success') , __('alerts.success_title'));
    }
}
