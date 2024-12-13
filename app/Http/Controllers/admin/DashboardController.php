<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
     //   //this method will show the dashboard page for admin
     public function index(){
        $User = User::get();
        return view('admin.dashboard',[
            'User' => $User,
        ]);
    }
}
