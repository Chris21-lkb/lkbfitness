<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Key;

class successController extends Controller
{
    //
    function storekeys(Request $request){
        $request->validate([
            'titleone' => 'required',
            'contentone' => 'required',
            'titletwo' => 'required',
            'contenttwo' => 'required',
            'titlethree'=>'required',
            'contentthree' => 'required',
            'titlefour'=>'required',
            'contentfour' => 'required'
        ]);

        $titleone = $request ->get('titleone');
        $contentone = $request ->get('contentone');
        $titletwo = $request ->get('titletwo');
        $contenttwo = $request ->get('contenttwo');
        $titlethree = $request ->get('titlethree');
        $contentthree = $request ->get('contentthree');
        $titlefour = $request ->get('titlefour');
        $contentfour = $request ->get('contentfour');

        $successkey= new Key();

        $successkey->tilteOne = $titleone;
        $successkey->contentone = $contentone;
        $successkey->tilteTwo = $titletwo;
        $successkey->contenttwo = $contenttwo;
        $successkey->tilteThree = $titlethree;
        $successkey->contentthree = $contentthree;
        $successkey->tilteFour = $titlefour;
        $successkey->contentfour = $contentfour;

        $successkey->save();

        return redirect()->back();
    }
}
