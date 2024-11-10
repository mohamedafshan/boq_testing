<?php

namespace App\Http\Controllers;

use App\Models\BOQ_Summery;
use Illuminate\Http\Request;

class BOQSummeryController extends Controller
{
    public function saveBOQItems(Request $request)
    {
        // Validation (if necessary)
        $request->validate([
            'items.*.item_no' => 'required',
            'items.*.description' => 'required',
            'items.*.amount' => 'numeric|nullable',
        ]);

        // Get the project ID (this can be passed via the request or session)
        // $projectId = $request->input('project_id'); // Example

        // Loop through the items and save each one
        foreach ($request->items as $item) {
            BOQ_Summery::create([
                'project_id'   => 1,
                'parent_item'  => 0, // assuming this is for main items (not sub-items)
                'serial_no'    => $item['item_no'],
                'description'  => $item['description'],
                'unit'         => null, // Add the appropriate unit data
                'qty'          => null, // Add appropriate qty (if available)
                'rate'         => null, // Add appropriate rate (if available)
                'amount'       => $item['amount'] ?? 0,
                'calculated'   => null//$item['amount'], // Store calculated value
            ]);
        }

        return response()->json(['status' => 'success', 'message' => 'BOQ Items saved successfully!']);
    }

    // Method to save the calculation result (subtotal)
    public function saveCalculation(Request $request)
    {
        $request->validate([
            'result' => 'required|numeric',
        ]);

        // Handle the logic for saving subtotal (e.g., update the project or specific BOQ items)
        // For now, just return a success response
        return response()->json(['status' => 'success', 'message' => 'Calculation result saved successfully!']);
    }
}
