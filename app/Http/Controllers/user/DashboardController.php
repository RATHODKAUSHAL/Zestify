<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //   //this method will show the dashboard page for customer
    public function index(){
        return view('user.dashboard');
    }
}
