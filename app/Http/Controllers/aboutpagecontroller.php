<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Key;
use App\Models\Picture;
use Illuminate\Http\Request;

class aboutpagecontroller extends Controller
{
    public function aboutpage(){
        return View('pages.about')
        ->with('dataa', Key::all())
        ->with('data', About::all())
        ->with('dataaa', Picture::limit(1)->get());
    }
}
