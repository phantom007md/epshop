<?php

namespace App\Http\Controllers;

use App\Guaranty;
use Illuminate\Http\Request;

class GuarantyController extends Controller
{

    public function index()
    {
        $guaranties = Guaranty::all();
        return view('guaranties.index',  compact('guaranties'));
    }

    public function create()
    {
        return view('guaranties.create');
    }


    public function store(Request $request)
    {
        Guaranty::create([
            'company' => $request->company,
            'exp_time' => $request->exp_time
        ]);

        return redirect()->route('guaranties.index');
    }

    public function destroy(Guaranty $guaranty)
    {
        Guaranty::destroy($guaranty);
        return redirect()->route('guaranties.index');
    }
}
