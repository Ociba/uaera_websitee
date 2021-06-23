<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Models\News;

class NewsController extends Controller
{
    /**
     * This function shows news page for admin to add news
     */
    protected function index(){
        return view('admin.news');
    }
}
