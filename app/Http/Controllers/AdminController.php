<?php

namespace App\Http\Controllers;

use App\Admin;
use function bcrypt;
use function compact;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index ()
    {
        return $admins = Admin::all();
//        return view('admins.index', compact('admins'));
    }

    public function create()
    {
        return view('admins.create');
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

        admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'access_level' => $request->access_level,
        ]);

        return redirect()->route('admins.index');
    }

    public function destroy (Admin $admin)
    {
        Admin::destroy($admin->id);
        return redirect()->route('admins.index');
    }

}
