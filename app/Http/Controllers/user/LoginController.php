<?php

namespace App\Http\Controllers\user;
use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class LoginController extends Controller
{
    //this method will show the login page for customer
    public function index(){
        return view('user.login');
    }

    //this method will authenticate the user
    public function authenticate(Request $request){

        $validator = validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if($validator->passes()){

            if(Auth::attempt(['email' => $request->email,'password' => $request->password ])){
                return redirect()->route('user.dashboard');
            }else{
                return redirect()->route('user.login')->with('error','Either email or password is incorrect');
            }

        }else{
            return redirect()->route('user.login')
                 ->withInput()
                 ->withErrors($validator);
        }
    }

     //this method will show the register page for customer
     public function register(){
        return view('user.register');
    }

    public function processregister(Request $request){

        $validator = validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required'
        ]);

        if($validator->passes()){

            $user = New User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->role = 0;
            $user->save();

            return redirect()->route('user.login')->with('success','You have Successfully Registered.');
        }else{
            return redirect()->route('user.register')
                 ->withInput()
                 ->withErrors($validator);
        }
    }

    public function logout(){

        Auth::logout();
        return redirect()->route('user.login');
    }
}
