<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class aboutpagecontroller extends Controller
{
    public function aboutpage(){
        return View('pages.about')
        ->with('data', About::all());
    }
}
