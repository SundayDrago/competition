<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Users;



class HomeController extends Controller
{
    public function redirect(){
        if(Auth::id()){
            if(Auth::user()->usertype=='representative'){
                return view('user.home');
            }
            else{
                return view('admin.home');
            }
           }
           return redirect()->back();

    }
    public function index(){
        return view('user.home');
    }
   
}
