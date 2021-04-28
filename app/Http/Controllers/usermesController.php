<?php

namespace App\Http\Controllers;

use App\Models\Userme;
use Illuminate\Http\Request;

class usermesController extends Controller
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
            'firstname' => 'required',
            'lastname' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);

        $firstname = $request ->get('firstname');
        $lastname = $request ->get('lastname');
        $telephone = $request ->get('telephone');
        $email = $request ->get('email');
        $message = $request ->get('message');



        $usermessage= new Userme();

        $usermessage -> firstname = $firstname;
        $usermessage -> lastname = $lastname;
        $usermessage -> telephone = $telephone;
        $usermessage -> email = $email;
        $usermessage -> message = $message;

        $usermessage->save();

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
