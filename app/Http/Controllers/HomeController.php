<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserProfile;
use App\Models\UserData;
class HomeController extends Controller
{
    public function getDropdownParent(Request $request)
    {
        $indukOptions = User::select('users.id', 'up.full_name')
            ->where('role_id', 4)
            ->where('central_id', $request->central_id)
            ->join('user_data as ud', 'ud.user_id', '=', 'users.id')
            ->join('user_profiles as up', 'up.user_id', '=', 'users.id')
            ->get();
            
        return response()->json($indukOptions);
    }
    
    public function getDropdownSubParent(Request $request)
    {
        $indukOptions = User::select('users.id', 'up.full_name')
            ->where('role_id', 5)
            ->where('parent_id', $request->parent_id)
            ->join('user_data as ud', 'ud.user_id', '=', 'users.id')
            ->join('user_profiles as up', 'up.user_id', '=', 'users.id')
            ->get();

        return response()->json($indukOptions);
    }
}
