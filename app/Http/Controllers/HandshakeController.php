<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HandshakeController extends Controller
{
    public function connect(Request $request){
        try {
            $result = User::where('phone', $request->input('phone'))->exists();
            
            return response()->json(['status' => $result], 201);
        } catch (\Throwable $th) {
            return response()->json(['status' => $th->getMessage()], 500);
        }
    }
}
