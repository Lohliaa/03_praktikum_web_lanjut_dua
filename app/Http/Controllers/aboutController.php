<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class aboutController extends Controller
{
    public function about(){
        $about = About::all();
        return view('about')
        ->with('title', 'About Us')
        ->with('About', $about);
    }
}
