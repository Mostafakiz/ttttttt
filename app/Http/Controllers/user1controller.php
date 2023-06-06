<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User1;

class user1controller extends Controller
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
        return view('users.addUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        //
        $error=0;
        $validator=$request->validate([
            'email'=>'required|regex:/^[a-zA-Z0-9@.]+$/',
            'passwored'=>'required|regex:/^[a-zA-Z0-9@._#]+$/'
        ]);
        $users=User1::all();
        return view('families.index',compact('users'));

        // if (User1::where('email', $request->email->exists())) {
           
        // }
        // else{
        //     //$error="email is not found";
        //     //return redirect()->back();//Errors(['email' =>'هذا البريد الإلكتروني ليس موجود']);
        // }
    }
    public function store(Request $request){
        $validator=$request->validate([
            'userName'=>'required|regex:/^[a-zA-Z0-9]+$/',
            'userPhone'=>'required|regex:/^[0-9]+$/',
            'email'=>'required|regex:/^[a-zA-Z0-9@.]+$/',
            'password'=>'required|regex:/^[a-zA-Z0-9@._#]+$/'
        ]);
        $std= User1::create($request->all());
        $users=User1::all();
        return view('families.index',compact('users'));
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
