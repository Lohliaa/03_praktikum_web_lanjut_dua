<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\home;

class homeController extends Controller
{
    public function index(){
        $home = home::all();
        return view('index')
        ->with('title', 'Beranda')
        ->with('home', $home);
    }
}
