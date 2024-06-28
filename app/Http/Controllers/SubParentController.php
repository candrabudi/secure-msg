<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserProfile;
use App\Models\UserData;
class SubParentController extends Controller
{
    public function index()
    {
        return view('subparent.index');
    }

    public function getSubParent()
    {
        $subparents = User::where('role_id', 5)
            ->with('UserProfile')
            ->paginate(10);

        return response()->json($subparents);
    }

    public function create()
    {
        $centrals = User::where('role_id', 3)
            ->get();

        return view('subparent.create', compact('centrals'));
    }

    public function store(Request $request)
    {
        try{
            $suser = new User();
            $suser->username = $request->username;
            $suser->password = bcrypt($request->password);
            $suser->is_admin = $request->is_admin ?? 0;
            $suser->role_id = 5;
            $suser->status = 1;
            $suser->expired_at = $request->expired_at;
            $suser->save();
            $suser->fresh();

            $suserdata = new UserData();
            $suserdata->user_id = $suser->id;
            $suserdata->central_id = $request->central_id ?? 0;
            $suserdata->parent_id = $request->parent_id ?? 0;
            $suserdata->sub_parent_id = $request->sub_parent_id ?? 0;
            $suserdata->coordinator_id = 0;
            $suserdata->sub_coordinator_id = 0;
            $suserdata->structure_task_id = 0;
            $suserdata->latitude = $request->latitude;
            $suserdata->longtitude = $request->longtitude;
            $suserdata->description = $request->description;
            $suserdata->status = 1;
            $suserdata->position = $request->data_position ?? 1;
            $suserdata->save();

            $suserprofile = new UserProfile();
            $suserprofile->user_id = $suser->id;
            $suserprofile->user_type_id = 0;
            $suserprofile->full_name = $request->full_name;
            $suserprofile->national_id = $request->nrp_nik;
            $suserprofile->position = $request->position;
            $suserprofile->aka_name = $request->aka_name;
            $suserprofile->gender = $request->gender;
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

        return view('subparent.edit', compact('user'));
    }

    public function update($user_id, Request $request)
    {
        try {
            $suser = User::findOrFail($user_id);
            $suser->username = $request->username;

            if (!empty($request->password)) {
                $suser->password = bcrypt($request->password);
            }
            
            $suser->is_admin = $request->is_admin ?? $suser->is_admin;
            $suser->expired_at = $request->expired_at ?? $suser->expired_at;
            $suser->save();

            $suserdata = UserData::where('user_id', $user_id)->firstOrFail();
            $suserdata->central_id = $request->central_id ?? $suserdata->central_id;
            $suserdata->parent_id = $request->parent_id ?? $suserdata->parent_id;
            $suserdata->position = $request->data_position ?? $suserdata->position;
            $suserdata->save();

            $suserprofile = UserProfile::where('user_id', $user_id)->firstOrFail();
            $suserprofile->full_name = $request->full_name ?? $suserprofile->full_name;
            $suserprofile->national_id = $request->nrp_nik ?? $suserprofile->national_id;
            $suserprofile->position = $request->position ?? $suserprofile->position;
            $suserprofile->aka_name = $request->aka_name ?? $suserprofile->aka_name;
            $suserprofile->gender = $request->gender ?? $suserprofile->gender;
            $suserprofile->save();

            return redirect()->back()->with('success', 'User updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
