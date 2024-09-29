<?php

namespace App\Http\Controllers\Customer;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{   

    public function index(){
        if(Auth::user()->role == 'company'){
            return redirect()->route('company.dashboard');
        }elseif(Auth::user()->role == 'owner'){
            return redirect()->route('owner.dashboard');
        }

        return view('dashboard');
    }
}
