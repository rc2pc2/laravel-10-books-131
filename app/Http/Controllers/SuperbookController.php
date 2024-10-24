<?php

namespace App\Http\Controllers;

use App\Models\Superbook;
use Illuminate\Http\Request;

class SuperbookController extends Controller
{
    public function index(){
        $superbooks = Superbook::all(); // popolare i superbooks
        // dd($superbooks);
        return view("superbooks.index", compact("superbooks"));
    }
}
