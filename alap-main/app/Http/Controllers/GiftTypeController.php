<?php

namespace App\Http\Controllers;

use App\Models\GiftType;
use Illuminate\Http\Request;

class GiftTypeController extends Controller
{
    public function index()
    {
        $gifttypes = GiftType::all();
        return view('gift_types.index', compact('gifttypes'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|string|max:255'
        ]);
        GiftType::create($request->all());
        return redirect()->back()->with('success', 'Gift type added.');
    }
}
