<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portifolio;
use Auth;

class PortifolioController extends Controller
{
    //
    /**
     * This function gets articles from the databse
     */
    protected function getPortifolio(){
        $get_portifolio =Portifolio::get();
        return view('admin.portifolio', compact('get_portifolio'));
    }
    protected function createPotifolio(){
        $portifolio =new Portifolio;
        $portifolio ->title =request()->title;
        $portifolio ->image =$this->getImage();
        $portifolio ->created_by =Auth::user()->id;
        $portifolio ->save();
        return redirect()->back()->with('msg','Portifolio Info created Successfully');

    }

    private function getImage(){
        $image = request()->image;
        $file_path = $image->getClientOriginalName();
        $image->move('forlio/images/',$file_path);
        return $file_path;
    }
    protected function editPortifolio($id){
        $get_portifolio_edit =Portifolio::where('id',$id)->get();
        return view('admin.edit-portifolio',compact('get_portifolio_edit'));
    }
    protected function updatePotifolio($id){
        Portifolio::where('id',$id)->update(array(
            'title' =>request()->title
        ));
        return redirect()->back()->with('msg','You have Updated  Info Successfully');
    }
    protected function deletePotifolio($id){
        Portifolio::where('id',$id)->delete();
        return redirect()->back()->with('msg','You have Deleted Porifolio Info Successfully');
    }
}
