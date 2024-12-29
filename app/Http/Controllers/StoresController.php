<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Inertia\Inertia;

class StoresController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $admin = Admin::with('store')->find($user['id']);
        $stores = $admin->store;
        return Inertia::render('Admin/Store/Index', ['stores' => $stores]);
    }

    public function create()
    {
        return Inertia::render('Admin/Store/Create');
    }

    public function store(Request $request)
    {
        $store = new Store();

        $store->fill($request->all());
        $store->save();
        
        // 中間テーブルにデータを追加
        $admin = Admin::find(Auth::id()); // Admin IDをリクエストから取得
        if ($admin) {
            $admin->store()->attach($store->id); // 中間テーブルに関連付け
            return response()->json(['redirect' => route('admin.store.index')]);
        }
    }
}
