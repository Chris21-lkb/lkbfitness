<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Learnmore;

class learnmoreController extends Controller
{
    //
    public function addData(Request $request){
        $request->validate([
            'title' => 'required',
            'file_path' => 'required',
            'content'=>'required'
        ]);

        $file_path = $request ->file('file_path')->getClientOriginalName();
        
        $title = $request ->get('title');
        $content = $request ->get('content');
        $request -> file('file_path') -> storeAs('public/learnmoreimages/', $file_path );
        
        $photo = new Learnmore();
       
        $photo->file_path = $file_path;
        $photo->title = $title;
        $photo->content = $content;

        $photo->save();

        return redirect()->back();

    }
}
