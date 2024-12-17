<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return User::find(1);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return [
            'status' => 200,
            'msg' => 'success',
            'data' => [],
        ];
        // $nome = $request->input('nome');
        // $email = $request->input('email');
        // $senha = $request->input('senha');

        // $validatedData = $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|email|unique:users,email',
        // ]);
    
        // // Criar o usuário
        // $user = User::create($validatedData);
    
        // return response()->json(['message' => 'Usuário criado com sucesso!', 'user' => $user], 201);

        // dd(' '.$nome.' '.$email.' '.$senha.' ');

        // return User::query()->create([
        //     'name' => $nome,
        //     'email' => $email,
        //     'password' => $senha,
        // ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
