<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserProfile;
use App\Models\UserData;
class CentrallController extends Controller
{
    public function index()
    {
        return view('central.index');
    }

    public function getCentral()
    {
        $centrals = User::where('role_id', 3)
            ->with('UserProfile')
            ->paginate(10);

        return response()->json($centrals);
    }

    public function create()
    {
        return view('central.create');
    }

    public function store(Request $request)
    {
        try{
            $suser = new User();
            $suser->username = $request->username;
            $suser->password = bcrypt($request->password);
            $suser->is_admin = 1;
            $suser->role_id = 3;
            $suser->status = 1;
            $suser->expired_at = $request->expired_at;
            $suser->save();
            $suser->fresh();

            $suserdata = new UserData();
            $suserdata->user_id = $suser->id;
            $suserdata->central_id = 0;
            $suserdata->parent_id = 0;
            $suserdata->sub_parent_id = 0;
            $suserdata->coordinator_id = 0;
            $suserdata->sub_coordinator_id = 0;
            $suserdata->structure_task_id = 0;
            $suserdata->latitude = $request->latitude;
            $suserdata->longtitude = $request->longtitude;
            $suserdata->description = $request->description;
            $suserdata->status = 1;
            $suserdata->position = 1;
            $suserdata->save();

            $suserprofile = new UserProfile();
            $suserprofile->user_id = $suser->id;
            $suserprofile->user_type_id = 0;
            $suserprofile->full_name = $request->full_name;
            $suserprofile->national_id = $request->nrp_nik;
            $suserprofile->position = $request->position;
            $suserprofile->aka_name = $request->aka_name;
            $suserprofile->save();

            return redirect()->back();

        }catch(\Exception $e){
            return response()->json($e->getMessage());
            return redirect()->back();
        }
    }

    public function edit($userid)
    {
        $user = User::where('id', $userid)
            ->first();

        return view('central.edit', compact('user'));
    }

    public function update($userid, Request $request)
    {
        try {
            $suser = User::findOrFail($userid);
            $suser->username = $request->username;
            
            if (!empty($request->password)) {
                $suser->password = bcrypt($request->password);
            }
            $suser->expired_at = $request->expired_at;
            $suser->save();

            $suserdata = UserData::where('user_id', $userid)->first();
            $suserdata->latitude = $request->latitude;
            $suserdata->longtitude = $request->longtitude;
            $suserdata->description = $request->description;
            $suserdata->save();

            $suserprofile = UserProfile::where('user_id', $userid)->first();
            $suserprofile->full_name = $request->full_name;
            $suserprofile->national_id = $request->nrp_nik;
            $suserprofile->position = $request->position;
            $suserprofile->aka_name = $request->aka_name;
            $suserprofile->save();
    
            return redirect()->back()->with('success', 'User updated successfully');
    
        } catch(\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    
}
