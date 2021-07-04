<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeCOntroller extends Controller
{
    protected function getDashboard(){
            if(auth()->user()->type == 'admin'){ 
                return view('dashboard'); 
            }else{ return redirect('/'); }
        }
}

