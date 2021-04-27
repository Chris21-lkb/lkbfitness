<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Whatwedo;
use App\Models\Learnmore;
use App\Models\Service;

class HomeController extends Controller
{
    //
    function homepage()
    {
        return View('pages.home')
        ->with('data', Whatwedo::all())
        ->with('data2', Learnmore::all())
        ->with('data3', Service::all()); 
    }
}
