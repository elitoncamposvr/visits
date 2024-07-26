<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);

        return view('users.users_index', [
            'users' => $users,
        ]);
    }

    public function create()
    {
        return view('users.users_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'user_level' => 'required|integer',
        ]);
//
        $users = User::query()->create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
            'user_level' => $request->get('user_level'),
        ]);

        event(new Registered($users));

        return redirect(route('users.index', absolute: false));

//        dump($request->all());
    }

    public function show(User $user)
    {
        //
    }

    public function edit($id)
    {

        $user = User::query()->find($id);
        return view('users.users_edit', [
            'user' => $user,
        ]);
    }

    public function update(Request $request, User $user)
    {
        //
    }

    public function destroy(User $user)
    {
        //
    }
}
