<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Achievement;
use App\Models\Team;
use App\Models\Portifolio;

class FrontController extends Controller
{
    //
    protected function getFrontPage(){
        $get_members = Team::get();
        $get_achievements = Achievement::get();
        $get_news_for_front =News::latest()->limit('4')->get();
        return view('themes.theme1', compact('get_news_for_front','get_achievements','get_members'));
    }

    /** 
     * This function retrieves images for portifolio section
    */
    public function getPortifolioImages(){
        $get_portifolio =Portifolio::latest()->get();
        return view('themes.portfolio', compact('get_portifolio'));
    }
}
