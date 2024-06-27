<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserLocation;
use App\Models\User;
use DB;
class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function getUserLocation()
    {
       $users = User::select('id', 'username')
            ->get();

        $locations = [];
        foreach ($users as $user) {
            if($user->UserLocation){
                $locations[] = [
                    'id' => $user->id,
                    'username' => $user->username,
                    'location' => $user->UserLocation->location,
                    'status' => $user->UserLocation->status,
                ];
            }
        }

        return response()->json($locations);
    }
    

    
}
