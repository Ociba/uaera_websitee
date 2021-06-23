<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Models\Advert;

class AdvertsController extends Controller
{
    //
    /**
     * This fuction returns adverts view
     */
    
    protected function viewAdverts(){
        return view('admin.adverts');
    }
}
