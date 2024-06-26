<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserType;

class UserTypeController extends Controller
{
    public function index()
    {
        return view('masterdata.tipeuser.index');
    }

    public function getTypeUser()
    {
        $typeusers = UserType::with(['UserCentral', 'UserParent'])
            ->paginate(10);

        return response()->json($typeusers);
    }

    public function create()
    {
        return view('masterdata.tipeuser.create');
    }

    public function store(Request $request)
    {
        try{
            $store = new UserType();
            $store->central_id = $request->central_id ?? 0;
            $store->parent_id = $request->parent_id ?? 0;
            $store->logo_image = $request->logo_image ?? "";
            $store->label = $request->label ?? "";
            $store->color = $request->color ?? "";
            $store->type = $request->type ?? "";
            $store->is_show = $request->is_show ?? 0;
            $store->save();

            return redirect()->back();

        }catch(\Exception $e){
            return redirect()->back();
        }
    }

    public function edit($usertypeid)
    {
        $userType = UserType::where('id', $usertypeid)
            ->first();

        return view('masterdata.tipeuser.edit', compact('userType'));
    }

    public function update($usertype_id, Request $request)
    {
        try {
            $usertype = UserType::findOrFail($usertype_id);

            $usertype->central_id = $request->central_id ?? $usertype->central_id;
            $usertype->parent_id = $request->parent_id ?? $usertype->parent_id;
            $usertype->logo_image = $request->logo_image ?? $usertype->logo_image;
            $usertype->label = $request->label ?? $usertype->label;
            $usertype->color = $request->color ?? $usertype->color;
            $usertype->type = $request->type ?? $usertype->type;
            $usertype->is_show = $request->is_show ?? $usertype->is_show;

            $usertype->save();

            return redirect()->back()->with('success', 'UserType updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

}
