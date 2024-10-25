<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        $title = "Homepage Title";
        return view('pages.home', compact("title"));
    }
}
