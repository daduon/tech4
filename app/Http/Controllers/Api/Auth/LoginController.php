<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $this->middleware('guest:api')->except('logout');
    }
    /**
     * Show the application's login form.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
//        return view('auth.login');
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
        $request['remember']=1;
//        $request['phone']=str_replace(' ','',$request->phone);
        $this->validateLogin($request);
//        dd($request->all());
        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if (method_exists($this, 'hasTooManyLoginAttempts') &&
            $this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {

            $user = auth()->guard('student')->user();
            $token = auth()->guard('student')->user()->createToken($user->name)->accessToken;
            $query = http_build_query([
                'code' => $user->code,
                'redirect_uri' => $request->current_url,
                'response_type' => 'code',
                'scope' => 'name',
                'name' => $user->name,
                'token' => encrypt($token),
                'pw'=>encrypt($request->password)
            ]);

            return response()->json(['status'=>true,'callback'=>$this->redirectTo().'?'.$query], 200);
        }
        else{
            return response()->json(['status'=>false,'error' => 'Unauthorised'], 401);
        }
    }

    //This method used to redirect into previous url,
    protected function redirectTo(): string
    {
        return $this->redirectTo=route('web.login-callback');
    }

    /**
     * Validate the user login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);
    }

    /**
     * Attempt to log the user into the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    protected function attemptLogin(Request $request): bool
    {
//        dd($this->credentials($request));
        return Auth::attempt(
            $this->credentials($request), $request->filled('remember')
        );
    }

    public function username()
    {
        return 'phone';
    }

//    /**
//     * The user has been authenticated.
//     *
//     * @param Request $request
//     * @param mixed $user
//     *
//     * @return mixed
//     */
//    protected function authenticated(Request $request, $user)
//    {
//        return redirect($this->redirectTo);
//    }

    protected function credentials(Request $request)
    {
        return $request->only($this->username(), 'password');
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        if ($response = $this->loggedOut($request)) {
            return $response;
        }

        return $request->wantsJson()
            ? new JsonResponse([], 204)
            : redirect('/');
    }

    /**
     * Get the guard to be used during authentication.
     *
     */
    protected function guard()
    {
        return Auth::guard('api');
    }

}
