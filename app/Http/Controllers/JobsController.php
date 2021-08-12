<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobsController extends Controller
{
    /**
     * This function returns page for Jobs
     */
    protected function getJobs(){
        return view('themes.jobs');
    }
}
