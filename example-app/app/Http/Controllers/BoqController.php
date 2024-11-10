<?php

namespace App\Http\Controllers;

use App\Models\BoqItem;
use Illuminate\Http\Request;

class BoqController extends Controller
{
    public function index(){
        return view('boq.view_boq');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'items.*.itemNo' => 'required|string',
            'items.*.description' => 'required|string',
            'items.*.qty' => 'required|numeric',     
            'items.*.rate' => 'required|numeric',   
            'items.*.amount' => 'required|numeric',
        ]);

        foreach ($data['items'] as $item) {
            BoqItem::create([
                'item_no' => $item['itemNo'],
                'description' => $item['description'],
                'qty' => $item['qty'],
                'rate' => $item['rate'],
                'amount' => $item['amount'],
            ]);
        }

        return response()->json(['status' => 'success']);
    }
}
