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

}
