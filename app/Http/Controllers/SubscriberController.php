<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Models\Subscriber;

class SubscriberController extends Controller
{
    //
    protected function getSubscriber(){
        return view('admin.subscribers');
    }
}
