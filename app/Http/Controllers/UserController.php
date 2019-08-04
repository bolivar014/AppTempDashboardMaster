<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    // Vista index
    public function index()
    {
        $users = User::Paginate(10);

        return view('users.index')->with(compact('users'));
    }


    // Vista Show
    public function show($id)
    {
        $user = User::find($id);

        return view('/users/show')->with(compact('user'));
    }

    // Metodo para actualizar registros Existentes  
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->email = $request->input('txtEmail');
        $user->first_name = $request->input('txtFirstName');
        $user->last_name = $request->input('txtLastName');
        $user->address = $request->input('txtAddress');
        $user->city = $request->input('txtCity');
        $user->country = $request->input('txtCountry');
        $user->code_country = $request->input('txtZipCode');
        $user->about_me = $request->input('txtAboutMe');
        $user->update();
        // dd($user);
        

        $users = User::Paginate(10);

        return view('users.index')->with(compact('users'));
       
        //return view('/users');
    }
}
