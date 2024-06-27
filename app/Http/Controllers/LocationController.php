<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserLocation;
class LocationController extends Controller
{
    public function update(Request $request)
    {
        $user = Auth::user();
        // return response()->json($user);
        UserLocation::create([
            'user_id' => $user->id,
            'location' => $request->input('location'),
            'status' => 1
        ]);

        return response()->json(['status' => 'success']);
    }

    public function getLocation(Request $request)
    {
        $user = Auth::user();
        return response()->json(['location' => $user->last_location]);
    }
}
