<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        'name',
        'name_kana',
    ];

    public function admins()
    {
        return $this->belongsToMany(Admin::class, 'admin_stores', 'admin_id', 'store_id');    
    }
    public function storeSale()
    {
        return $this->belongsTo(StoreSale::class, 'id', 'store_id')
                ->whereYear('date', now()->year) // 今月の年
                ->whereMonth('date', now()->month) // 今月の月
                ->latest('date') // 日付の降順で並べる
                ->limit(1); // 最新の1件のみ取得
    }
}
