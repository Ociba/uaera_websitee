<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Models\Project;

class ProjectController extends Controller
{
    //This function gets projects from the database
    protected function getProject(){
        return view('admin.project');
    }
}
