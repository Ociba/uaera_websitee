<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Models\About;

class AboutController extends Controller
{
    //
    /**
     * This function displays about page in admin
     */
    protected function aboutInformation(){
        return view('admin.about');
    }
}
