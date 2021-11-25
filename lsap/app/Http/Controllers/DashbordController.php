<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashbordController extends Controller
{
    //
    public function index(){
        // dd(auth()->user());
        // dd(auth()->user()->posts);
        return view('dashbord');
    }
    public function __construct(){
$this->middleware(['auth']);
    }
    
}
