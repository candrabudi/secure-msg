<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaskType;
class TaskTypeController extends Controller
{
    public function index()
    {
        return view('masterdata.tipetugas.index');
    }

    public function getTaskType()
    {
        $tasktypes = TaskType::paginate(10);

        return response()->json($tasktypes);
    }

    public function create()
    {
        return view('masterdata.tipetugas.create');
    }

    public function store(Request $request)
    {
        try{
            $store = new TaskType();
            $store->name = $request->name ?? 0;
            $store->parent_id = $request->parent_id ?? 0;
            $store->save();

            return redirect()->back();

        }catch(\Exception $e){
            return redirect()->back();
        }
    }

    public function edit($tasktypeid)
    {
        $taskType = TaskType::where('id', $tasktypeid)
            ->first();

        return view('masterdata.tipetugas.edit', compact('taskType'));
    }

    public function update($tasktypeid, Request $request)
    {
        try {
            $tasktype = TaskType::findOrFail($tasktypeid);

            $tasktype->name = $request->name ?? $tasktype->name;
            $tasktype->parent_id = $request->parent_id ?? $tasktype->parent_id;
            $tasktype->save();

            return redirect()->back()->with('success', 'UserType updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

}
