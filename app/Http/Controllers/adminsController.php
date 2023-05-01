<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class adminsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function add()
    {
        return view('createUser');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        //dd($req);
        $formFields['name'] = $req->name;
        $formFields['email'] = $req->email;
        $formFields['password'] = Hash::make($req->password);
        User::create($formFields);
        return redirect()->route('g.login')->with('success','Usuario registrado correctamente');

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('login');
    }

    public function login(Request $req){
        $credentials = ['email' => $req->email , 'password' => $req->password];

        //dd($credentials,Auth::attempt($credentials));

        if(Auth::attempt($credentials)){
            $req->session()->regenerate();
            return view('home')->with('sucess', 'Inicio de sesión correcto');
        }else {
            return back()->withErrors(['email' => 'Email o contraseña incorrectos'])->onlyInput('email');
        }
    }
    public function logout()
    {
        Auth::logout();
        
        return redirect('/login');
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
