<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {    

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);

        return redirect()->action([UsersController::class, 'index']);
    }

    public function edit($id)
    {

        $user = User::find($id);
        return view('seu-template')->with('user', $user);
    }

     public function update(Request $request, User $user)
     {
         $user->saldo = $request->input('saldo');
         $user->save();

         return redirect()->action([UsersController::class, 'index']);
     }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->action([UsersController::class, 'index']);
    }
}