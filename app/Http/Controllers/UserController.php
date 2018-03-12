<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index ()
    {
        return $users = User::all();
    }

    public function show (User $user)
    {
        return $user;
    }

    public function store (Request $request)
    {
        $this->validate(
            $request,
            [
                'name' => 'required',
//                'email' => 'required|email',
                'password' => 'required',
            ]
        );

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'access_level' => $request->access_level,
        ]);

    }

    public function update (Request $request, User $user)
    {
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->access_level = $request->access_level;

        $user->save();
    }

    public function destroy (User $user)
    {
        User::destroy($user->id);
    }
}
