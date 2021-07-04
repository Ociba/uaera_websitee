<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class FrontController extends Controller
{
    //
    protected function getFrontPage(){
        $get_news_for_front =News::latest()->limit('4')->get();
        return view('themes.theme1', compact('get_news_for_front'));
    }
}
