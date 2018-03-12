<?php

namespace App\Http\Controllers;

use App\Guaranty;
use Illuminate\Http\Request;

class GuarantyController extends Controller
{

    public function index()
    {
        return $guaranties = Guaranty::all();
    }


    public function store(Request $request)
    {
        Guaranty::create([
            'company' => $request->company,
            'exp_time' => $request->exp_time,
        ]);
    }

    public function show (Guaranty $guaranty)
    {
        return $guaranty;
    }

    public function update (Request $request, Guaranty $guaranty)
    {
        $guaranty->company = $request->company;
        $guaranty->exp_time = $request->exp_time;

        $guaranty->save();
    }

    public function destroy(Guaranty $guaranty)
    {
        Guaranty::destroy($guaranty->id);
    }
}
