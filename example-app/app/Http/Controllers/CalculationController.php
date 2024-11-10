<?php

namespace App\Http\Controllers;

use App\Models\CalculationResult;
use Illuminate\Http\Request;

class CalculationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'result' => 'required|numeric',
        ]);

        CalculationResult::create([
            'result' => $request->input('result'),
        ]);

        return response()->json(['status' => 'success']);
    }
}
