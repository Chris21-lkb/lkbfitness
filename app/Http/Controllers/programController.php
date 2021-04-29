<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\Progrinfo;

class programController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return View('pages.program')
        ->with('data', Program::all())
        ->with('dataa', Progrinfo::all());
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
            'name' => 'required',
            'price' => 'required',
            'programintro' => 'required',
            'motivation' => 'required',
            'data' => 'required',
            'file_path' => 'required'
        ]);


        $name = $request ->get('name');
        $price = $request ->get('price');
        $programintro = $request ->get('programintro');
        $programmotivation = $request ->get('motivation');
        $programdata = $request ->get('data');

        $programpicture = $request ->file('file_path')->getClientOriginalName();

        $request -> file('file_path') -> storeAs('public/programfile/', $programpicture);


        $program= new Program();

        $program -> name = $name;
        $program -> price = $price;
        $program -> programintro = $programintro;
        $program -> programmotivation = $programmotivation;
        $program -> programdata = $programdata;
        $program -> programpicture = $programpicture;

        $program->save();

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
