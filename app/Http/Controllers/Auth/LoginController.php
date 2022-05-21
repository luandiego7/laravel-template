<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Arr;
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
        //$this->middleware('guest')->except('logout');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = auth()->user();

            if($user->city){
                $user = Arr::add($user, 'state_id', $user->city->state->id);
            }

            return response()->json(['user' => $user ]);
        }

        return response()->json(['error' => 'Usuário e/ou senha inválidos'], 401);
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        request()->session()->inValidate();
        request()->session()->regenerateToken();

        return response()->json(['status' => 'ok']);
    }

    public function loadSession()
    {
        $user = auth()->user();
        if($user){

            if($user->city){
                $user = Arr::add($user, 'state_id', $user->city->state->id);
            }

            return response()->json(['user' => $user]);
        }
        return response([], 401);
    }
}
