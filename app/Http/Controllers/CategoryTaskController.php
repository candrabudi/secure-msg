<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryTask;
class CategoryTaskController extends Controller
{
    public function index()
    {
        return view('report.categoryreport.index');
    }

    public function getTypeUser()
    {
        $typeusers = CategoryTask::with(['UserCentral', 'UserParent'])
            ->paginate(10);

        return response()->json($typeusers);
    }

    public function create()
    {
        $central = User::where('role_id', 3)
            ->get();
        return view('report.categoryreport.create');
    }

    public function store(Request $request)
    {
        try{
            $store = new CategoryTask();
            $store->central_id = $request->central_id ?? 0;
            $store->parent_id = $request->parent_id ?? 0;
            $store->sub_parent_id = $request->sub_parent_id ?? 0;
            $store->coordinator_id = $request->coordinator_id ?? 0;
            $store->sub_coordinator_id = $request->sub_coordinator_id ?? 0;
            $store->category_name = $request->category_name ?? "";
            $store->position = $request->position ?? 1;
            $store->save();
            return redirect()->back();
        }catch(\Exception $e){
            return redirect()->back();
        }
    }

    public function edit($categorytaskid)
    {
        $categoryTask = CategoryTask::where('id', $categorytaskid)
            ->first();

        return view('report.categoryreport.edit', compact('categoryTask'));
    }

    public function update($categorytaskid, Request $request)
    {
        try {
            $categoryTask = CategoryTask::findOrFail($categorytaskid);

            $categoryTask->central_id = $request->central_id ?? $categoryTask->central_id;
            $categoryTask->parent_id = $request->parent_id ?? $categoryTask->parent_id;
            $categoryTask->sub_parent_id = $request->sub_parent_id ?? $categoryTask->sub_parent_id;
            $categoryTask->coordinator_id = $request->coordinator_id ?? $categoryTask->coordinator_id;
            $categoryTask->sub_coordinator_id = $request->sub_coordinator_id ?? $categoryTask->coordinator_id;
            $categoryTask->category_name = $request->category_name ?? $categoryTask->category_name;
            $categoryTask->position = $request->position ?? $categoryTask->position;
            $categoryTask->save();

            return redirect()->back()->with('success', 'Kategori Tugas Sukses Update');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
