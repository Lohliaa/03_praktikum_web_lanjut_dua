<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\about;

class aboutController extends Controller
{
    public function about(){
        $about = about::all();
        return view('about')
        ->with('title', 'About Us')
        ->with('about', $about);
    }
}
