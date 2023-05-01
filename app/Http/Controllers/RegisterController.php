<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
    public function register(){
       return view('register.index');
    }

    public function store(Request $request){

        $request-> validate([
            'name' => 'required|min:3|max:255',
            'username' => 'required|min:3|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:3'
        ]);

        $user = new User;
        $user-> name = request('name');
        $user-> username = request('username');
        $user-> email = request('email');
        $user-> password = bcrypt(request('password'));
        $user->save();

        // dd('Berhasil Register');
        return redirect('/login')->with('success','Regsitrasi Successfully!');

        
    }
}
