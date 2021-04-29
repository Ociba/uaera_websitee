<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Models\Story;

class StoryController extends Controller
{
    /**
     * This function gets story page in admin
     */
    protected function stories(){
        return view('admin.story');
    }
}
