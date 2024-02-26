<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function redirect(){
        if (Auth::id()) {

            // vérification du type de l'utilisateur, admin ou user simple

            //user simple
            if (Auth::user()->usertype=='0') {
                return view('dashboard');
            }else {
                //admin
                return view('admin.home');
            }

        }else{
            return redirect()->back();
        }
    }
}
