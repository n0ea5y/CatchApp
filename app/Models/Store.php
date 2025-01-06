<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        'name',
        'name_kana',
    ];

    public function admin()
    {
        return $this->belongsToMany(Admin::class, 'admin_stores', 'admin_id', 'store_id');    
    }
}
