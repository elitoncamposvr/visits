<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

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

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$id,
            'user_level' => 'required|integer',
            'status' => 'required|integer',
        ]);

        if ($request->user_level == 0){
            $is_admin = true;
        } else{
            $is_admin = false;
        }

        $user = User::query()->find($id);
        $user->update([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'user_level' => $request->get('user_level'),
            'status' => $request->get('status'),
            'is_admin' => $is_admin,
        ]);

        return redirect(route('users.index', absolute: false));

    }

    public function destroy(Request $request)
    {
        $user = User::query()->find($request->get('id'));
        $user->delete();

        return redirect(route('users.index', absolute: false));
    }
}
