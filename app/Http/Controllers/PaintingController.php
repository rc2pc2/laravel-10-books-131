<?php

namespace App\Http\Controllers;

use App\Models\Painting;
use Illuminate\Http\Request;

class PaintingController extends Controller
{
    public function index(){

        // < sto utilizzando il model per recuperare dal db tutti i record presenti in paintings
        // % SELECT * FROM `paintings`
        $paintings = Painting::all();
        return view("paintings.index", compact("paintings"));
    }
}
