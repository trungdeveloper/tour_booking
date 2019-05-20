<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
     // PROJECT LARAVEL 

    public function getindex(){
        return view('layout.index');
    }
    public function gettop(){
        return view('layout.page.top');
    }
    public function getfooter(){
        return view('layout.page.footer');
    }
    public function getmainpage(){
        return view('layout.page.mainPage');
    }
}
