<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Key;
use Illuminate\Http\Request;

class aboutpagecontroller extends Controller
{
    public function aboutpage(){
        return View('pages.about')
        ->with('dataa', Key::all())
        ->with('data', About::all());
    }
}
