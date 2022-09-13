<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//use App\Models\Library;

class Library extends Controller
{
    //
    public function index(/*Library $library*/){

        $library = DB::table('library')->get();

        return view('index');
    }
}
