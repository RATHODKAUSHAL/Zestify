<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    //this method will show the login page for customer
    public function index(){
        return view('front.login');
    }

    //this method will authenticate the user
    public function authenticate(Request $request){

        $validator = validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required'
        ]);
    }
}
