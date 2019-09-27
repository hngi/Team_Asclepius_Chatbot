<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Http\Controllers\Traits\HasError;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller {

    use RegistersUsers,
        HasError;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('guest');
    }

    public $successStatus = 200;
    public $errorStatus = 401;

    public function register(Request $request) {
        $input = $request->all();
        $rules = ([
            'fullname' => ['required', 'string', 'max:255'],
            'mobileno' => ['required', 'string'],
            'age' => ['required', 'string'],
            'username' => ['required', 'string', 'max:15', 'unique:users', 'regex:/^\S*$/u', 'alpha_dash'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'confirm_password' => 'required|same:password',
        ]);
        $error = static::getErrorMessage($input, $rules);
        if ($error) {
            return $error;
        }
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);
        Auth::login($user);
        return ([
            'status' => $this->successStatus,
            'message' => 'Registration was Successful',
        ]);
    }

    public function login(Request $request) {

        if (Auth::attempt(['username' => request('username'), 'password' => request('password')])) {
            
            $user = Auth::user();
            return ([
                'status' => $this->successStatus,
                'message' => 'Login Successfully',
            ]);
        } else {
            return ([
                'status' => $this->errorStatus,
                'message' => 'Invalid Details'
            ]);
        }
    }

}
