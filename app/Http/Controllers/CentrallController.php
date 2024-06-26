<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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

    public function store()
    {
        return "";
    }
}
