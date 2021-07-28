<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\OrganisationWorker;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class AuthenticationController extends Controller
{
  
    /**
     * this function logs out the user
     */
    protected function logoutUser(){
        Auth::logout();
        return redirect('/');
    }
}
