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
            'contentone' => 'required'
        ]);

        $titleone = $request ->get('titleone');
        $contentone = $request ->get('contentone');

        $successkey= new Key();

        $successkey->title = $titleone;
        $successkey->content = $contentone;

        $successkey->save();

        return redirect()->back();
    }
}
