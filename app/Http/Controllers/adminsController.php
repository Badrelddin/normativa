<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
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

        dd(Auth::attempt(['email' => "badr@badr.com" , 'password' => "1234"]));

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
