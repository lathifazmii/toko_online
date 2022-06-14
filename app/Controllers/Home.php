<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // return view('layout');
        // ['data'=>'ini data gue'] mempasing data dari controller ke view 
        return view('hello/world', ['data'=>'ini data gue']);
    }
}
