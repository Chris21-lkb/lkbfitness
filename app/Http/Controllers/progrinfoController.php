<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Progrinfo;

class progrinfoController extends Controller
{
    public function adddata(Request $request){
        $request->validate([
            'pagetitle' => 'required',
            'introduction' => 'required'
        ]);
        $pagetitle = $request ->get('pagetitle');
        $introduction = $request ->get('introduction');

        $progrinfo= new Progrinfo();

        $progrinfo -> pagetitle = $pagetitle;
        $progrinfo -> introduction = $introduction;

        $progrinfo->save();

        return redirect()->back();
    }
}
