<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Models\Company;

class CompanyController extends Controller
{
    //
    protected function getCompany(){
        return view('admin.company');
    }
}
