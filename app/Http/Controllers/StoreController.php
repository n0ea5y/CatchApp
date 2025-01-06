<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Store;
use App\Models\StoreSale;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Inertia\Inertia;
use Laravel\Pail\ValueObjects\Origin\Console;

class StoreController extends Controller
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
        $validated = $request->validate([
            'name' => 'required|string',
            'name_kana' => 'required|string',
        ]);
        $store = new Store();
        
        $store->fill($validated);
        $store->save();
        
        // 中間テーブルにデータを追加
        $admin = Admin::find(Auth::id()); // Admin IDをリクエストから取得
        if ($admin) {
            $admin->store()->attach($store->id); // 中間テーブルに関連付け
            return response()->json(['redirect' => route('admin.store.index',['message' => '登録完了しました'])]);
        }
    }

    public function show($id) {
        Log::debug($id);

        return Inertia::render('Admin/Store/Show', ['storeId' => $id]);
    }


    public function salesAmount(Request $request) {
        Log::debug($request);
        $validated = $request->validate([
            'store_id' => 'required|string',
            'sales_amount' => 'required|string',
            'date' => 'required',
        ]);

        $validated['date'] = Carbon::parse($validated['date'])->format('Y-m-d');
        $storeSale = new StoreSale();
        Log::debug($validated);
        $storeSale->fill($validated);
        $storeSale->save();
    }
}
