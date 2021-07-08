<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Providers\RouteServiceProvider;
use Faker\Provider\Uuid;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest:api');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make($data,
            [
                'name' => ['required', 'string', 'min:3','max:50'],
                'phone' => ['required', 'string', 'min:8','max:20', 'unique:students'],
                'email' => 'required|email|unique:students',
                'password' => ['required', 'string', 'min:6','regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9#?!@$%^&*-]).{6,}$/','confirmed'],
            ],
            [
                'password.regex'=>'Your password must be more than 6 characters long, should contain at-least 1 Uppercase, 1 Lowercase, 1 Numeric and 1 special character.'
            ]
        );
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\Student
     */
    protected function create(array $data)
    {
        return Student::create([
            'code'=>Uuid::uuid(),
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'organization' => $data['organization'],
            'position' => $data['position'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function register(Request $request): \Illuminate\Http\JsonResponse
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => $request->password,
            'password_confirmation' => $request->password_confirmation,
            'organization' => $request->organization,
            'position' => $request->position,
            '_token' => $request->_token
        ];
        //Validation request
        $validation = $this->validator($data);
        if($validation->fails()){
            return response()->json(['status'=>false,'errors'=>$validation->messages(),404]);
        }
        event(new Registered($user = $this->create($data)));

        $accessToken = $user->createToken($request->name)->accessToken;
//        $this->guard()->login($user,true);
        $user->api_token = $accessToken;
        $user->save();

        $query = http_build_query([
            'code' => $user->code,
            'redirect_uri' => $request->current_url,
            'response_type' => 'code',
            'scope' => 'name',
            'name' => $user->name,
            'token' => encrypt($accessToken)
        ]);

        return response()->json(['status'=>true,'callback'=>$this->redirectTo().'?'.$query],200);
    }

    protected function guard()
    {
        return Auth::guard('api');
    }

    //This method used to redirect into previous url,
    protected function redirectTo(): string
    {
        return $this->redirectTo=route('web.register-callback');
    }
}
