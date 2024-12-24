<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class StoresController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $admin = Admin::with('stores')->find($user['id']);
        $stores = $admin->stores;
        return Inertia::render('Admin/Store/Index', ['stores' => $stores]);
    }
    public function create()
    {
        return Inertia::render('Admin/Store/Create');
    }
}
