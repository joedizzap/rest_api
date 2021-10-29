<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class PatientBladeController extends Controller
{
    public function redirect(){

       if(Auth::id())
       {
            if(Auth::user()->usertype == "1")
            {
                return view('home');
            }
       }
       else
       {
           return redirect()->back();
       }
    }

    public function login(){

        if(Auth::id())
        {
            return redirect()->back();
        }
        else
        {
            return view('auth\login');
        }
    }

    /* public function index(){
        return view('home');
    } */
    
    public function showpatient(){

        if(Auth::id())
        {
                if(Auth::user()->usertype == "1")
                {
                    return view('patientable');
                }
        }
        else
        {
            return redirect()->back();
        }
    }

    public function addpatient(){

        if(Auth::id())
        {
                if(Auth::user()->usertype == "1")
                {
                    return view('addpatient');
                }
        }
        else
        {
            return redirect()->back();
        }
    }
}
