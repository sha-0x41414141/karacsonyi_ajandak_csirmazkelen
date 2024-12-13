<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GiftType;

class GiftController extends Controller
{
    public function create()
    {
        $gift_types = GiftType::all();
        return view('gifts.create', compact('gift_types'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'gift_name' => 'required|string|max:255',
            'price' => 'required|integer|min:0',
            'gift_type_id' => 'required|integer|exists:gift_types,id'
        ]);

        Gift::create($request->all());
        return redirect()->back()->with('success', 'Gift added.');
    }
}
