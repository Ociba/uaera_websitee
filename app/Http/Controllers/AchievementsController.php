<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Achievement;
use Auth;

class AchievementsController extends Controller
{
    /**
     * This fuction returns adverts view
     */
    
    protected function getAchievements(){
        $get_achievements = Achievement::get();
        return view('admin.achievements', compact('get_achievements'));
    }
   /** 
    * Create achievement
   */
    protected function createAchievement(){
        $achievemet =new Achievement;
        $achievemet ->achievement =request()->achievement;
        $achievemet ->created_by  =Auth::user()->id;
        $achievemet ->save();
        return redirect()->back()->with('msg','You have created Uaera Achievement Successfully');
    }
    Protected function editAchievement($id){
        $edit =Achievement::where('id',$id)->get();
        return view('admin.edit-achievement',compact('edit'));
    }
    
    protected function updateAchievement($id){
        Achievement::where('id',$id)->update(array(
            'achievement' =>request()->achievement
        ));
        return redirect()->back()-with('msg','You have Updated Achievement Info Successfully');
    }
    protected function deleteAchievement($id){
        Achievement::where('id',$id)->delete();
        return redirect()->back()->with('msg','You have Deleted Achievement Info Successfully');
    }
}
