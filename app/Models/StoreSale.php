<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StoreSale extends Model
{
    //
    protected $fillable = [
        'store_id',
        'date',
        'sales_amount',
    ];
}
