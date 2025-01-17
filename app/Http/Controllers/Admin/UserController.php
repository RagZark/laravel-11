<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(20); //Por padrão é 15 mas podemos alterar;   //User::all(); // Podendo ser all ou get para todos e first para o primeiro
        //dd($users);
        return view('admin.users.index', compact('users')); // o compact faz basicamente essa operação: ['user' => $user]
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        //dd($request->all()); // only('') para pegar apenas um e except('') para pegar todos menos um
        // dd(User::create($request->all()));
        User::create($request->all());

        return redirect()->route('users.index');
    }
}
