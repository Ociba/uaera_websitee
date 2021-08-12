<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected function getDashboard(){
            // if(auth()->user()->type == 'admin'){ 
            //     return view('dashboard'); 
            // }else{ return redirect('/'); }
            return view('admin.dashboard');
        }
}

