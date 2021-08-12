<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Media;
use Auth;

class MediaController extends Controller
{
    protected function getMedia(){
    $get_media_publications =Media::latest()->get();
    return view('themes.media', compact('get_media_publications'));
}
protected function getAdminMedia(){
    $get_media_publications =Media::join('users','media.created_by','users.id')
    ->select('media.*','users.name')
    ->OrderBy('media.created_by')->get();
    return view('admin.media', compact('get_media_publications'));
}
/**
 * This function creates media publication
 */
protected function createMediaPublication(){
    $create_publication =new Media;
    $create_publication->title =request()->title;
    $create_publication->link  =request()->link;
    $create_publication->created_by =Auth::user()->id;
    $create_publication->save();
    return redirect()->back()->with('msg','You have successfully created Media Publication');
}
/**
 * This function validates create media publication
 */
protected function validateCreateMediaPublication(){
    if(empty(request()->title)){
        return redirect()->back()->withErrors('Title is needed to continue');
    }elseif(empty(request()->link)){
        return redirect()->back()->withErrors('Link is needed to continue');
    }else{
        return $this->createMediaPublication();
    }
}
/**
 * This function edits media publication
 */
protected function editMediaPublication($id){
    $get_media_publication =Media::where('id',$id)->get();
    return view('admin.edit-media', compact('get_media_publication'));
}
/**
 * This function updates media publication details
 */
protected function updateMediaPublication($id){
    Media::where('id', $id)->update(array(
        'title' =>request()->title,
        'link'  =>request()->link,
    ));
    return redirect()->back()->with('msg', 'You have updated Media Publication successfully');
}
/**
 * This function deletes the media publication permanently
 */
protected function deleteMediaPublication($id){
    Media::where('id', $id)->delete();
    return redirect()->back()->with('msg', 'You have deleted Media Publication successfully');
}
}
