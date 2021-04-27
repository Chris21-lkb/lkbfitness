<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class aboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titlepage' => 'required',
            'introductionpage' => 'required',
            'file_path' => 'required',
            'name' => 'required',
            'content'=>'required'
        ]);

        $file_path = $request ->file('file_path')->getClientOriginalName();
        
        $tiltlepage = $request ->get('titlepage');
        $introductionpage = $request ->get('introductionpage');
        $name = $request ->get('name');
        $content = $request ->get('content');
        $request -> file('file_path') -> storeAs('public/aboutfile/', $file_path );
        
        $about = new About();
       
        $about->pagetitle = $tiltlepage;
        $about->introductionpage = $introductionpage;
        $about->file_path = $file_path;
        $about->name = $name;
        $about->content = $content;

        $about->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
