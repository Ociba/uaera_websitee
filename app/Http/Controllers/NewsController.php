<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Auth;

class NewsController extends Controller
{
    /**
     * This function shows news page for admin to add news
     */
    protected function index(){
        $get_news_for_admin =News::join('users','news.created_by','users.id')
        ->select('news.*')->where('news.status','ongoing')->get();
        return view('admin.news', compact('get_news_for_admin'));
    }
    /** 
     * This function creates news
    */
    protected function createNews(){
        $create_news =new News;
        $create_news ->news =request()->news;
        $create_news ->created_by=Auth::user()->id;
        $create_news ->save();
        return redirect()->back()->with('msg','News has been Created successful');
    }
    /** 
     * This function shows the news in th e front pages
    */
    protected function getnews(){
        $get_news_for_front =News::join('users','news.created_by','users.id')
        ->select('news.news')->where('news.status','ongoing')->latest()->limit('4')->get();
        return view('themes.theme1',compact('get_news_for_front'));
    }
    /** 
     * This function edits news
    */
    protected function editNews($id){
        $edit_news =News::where('id',$id)->get();
        return view('admin.edit_news',compact('edit_news'));
    }
    /** 
     * This function updates news
    */
    protected function updateNews($news_id){
        News::where('id', $news_id)->update(array(
            'news' =>request()->news
        ));
        return redirect()->back()->with('msg','News has been updated successful');
    }
    /** 
     * This function deletes new softly
    */
    protected function deleteNews($id){
        News::where('id', $id)->delete();
        return redirect()->back()->with('msg','News has been deleted successful');
    }
}
