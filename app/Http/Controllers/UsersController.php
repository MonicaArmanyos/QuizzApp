<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UsersController extends Controller
{
    public function create()
    {
        return view('users.create');
    }
    public function store(Request $request)
    {
       
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password'=> ''
        ]);
        
        
       //return redirect(route('users.index')); 
    }
}
