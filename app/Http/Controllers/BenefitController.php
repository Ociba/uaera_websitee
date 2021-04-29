<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Models\Benefit;

class BenefitController extends Controller
{
    /**
     * The function gets benefits from dashboard
     */
    protected function getBenefit(){
        return view('admin.benefit');
    }
}
