<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function redirect(){
        $usertype = Auth::user()->usertype;
        if ($usertype == 1){
            return view('admin.home');
        }else{
            $data = Slide::all();
            return view('user.home',compact('data'));
        }
    }

    public function index(){
        if (Auth::id()){
            return redirect('redirect');
        }else{
            $data = Slide::all();
            return view('user.home',compact('data'));
        }
    }
}
