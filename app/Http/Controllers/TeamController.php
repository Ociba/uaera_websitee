<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use Auth;

class TeamController extends Controller
{
    /**
     * This function gets story page in admin
     */
    protected function getTeam(){
        $get_members = Team::get();
        return view('admin.team', compact('get_members'));
    }
    protected function createPotifolio(){
        $team =new Team;
        $team ->title =request()->title;
        $team ->name =request()->name;
        $team ->image =$this->getImage();
        $team ->contact =request()->contact;
        $team ->email =request()->email;
        $team ->description =request()->description;
        $team ->created_by =Auth::user()->id;
        $team ->save();
        return redirect()->back()->with('msg','Team Info created Successfully');

    }

    private function getImage(){
        $image = request()->image;
        $file_path = $image->getClientOriginalName();
        $image->move('members/images/',$file_path);
        return $file_path;
    }
    protected function editTeam($id){
        $get_team_edit =Team::where('id',$id)->get();
        return view('admin.edit-team',compact('get_team_edit'));
    }
    protected function updateTeam($id){
        Team::where('id',$id)->update(array(
            'title' =>request()->title,
            'name'  =>request()->name,
            'email'  =>request()->email,
            'contact'  =>request()->contact,
            'description'  =>request()->description,
        ));
        return redirect()->back()->with('msg','You have Updated  Info Successfully');
    }
    protected function deleteTeam($id){
        Team::where('id',$id)->delete();
        return redirect()->back()->with('msg','You have Deleted Team Member Successfully');
    }
}
