<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('front/home');
    }
    function penilaian(){
        echo "s";
    }
}
