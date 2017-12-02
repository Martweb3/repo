<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersUpdateController extends Controller
{
    //

    public function edit(Request $request,$id) {
        $name = $request->input('name') ;
        $surname = $request->input('apellidoP');
        $second = $request->input('apellidoM');
        DB::update('update users_v1 set name = ? where id = ?',[$name,$id]);
        DB::update('update users_v1  set surname = ?  where id = ?',[$surname,$id]);
        DB::update('update users_v1  set second_surname = ?  where id = ?',[$second,$id]);
        echo "Actualización Correcta.<br/>";
        echo '<a href = "/users">Click aqui</a> para regresar.';
    }
}
