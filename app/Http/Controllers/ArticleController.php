<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Models\Article;

class ArticleController extends Controller
{
    /**
     * This function gets articles from the databse
     */
    protected function getArticle(){
        return view('admin.articles');
    }
}
