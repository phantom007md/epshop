<?php

namespace App\Http\Controllers;

use App\User;
use function compact;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index ()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create ()
    {
        return view('users.create');
    }

    public function store (Request $request)
    {
        $this->validate(
            $request,
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|confirmed',
            ]
        );

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('users.index');

    }

    public function destroy (User $user)
    {
        User::destroy($user->id);
        return redirect()->route('users.index');
    }
}
