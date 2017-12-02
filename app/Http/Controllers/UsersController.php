<?php

namespace App\Http\Controllers;

use App\User_v1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = DB::select('select * from users_v1') ;
        return view('users.users_edit',['users'=>$users]) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.users');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $userModel = new User_v1();
        $userModel->name=$request->input('name');
        $userModel->surname=$request->input('apellidoP');
        $userModel->second_surname=$request->input('apellidoM');
        $userModel->save();


        return 'completo';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = DB::select('select * from users_v1 where id = ?',[$id]) ;
        return view('users.users_update',['users'=>$users]) ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
        $name = $request->input('stud_name') ;
        DB::update('update users_v1 set name = ? where id = ?',[$name,$id]) ;
        echo "Record updated successfully.<br/>";
        echo '<a href = "/users">Click Here</a> to go back.';
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
