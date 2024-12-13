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

    }
}
