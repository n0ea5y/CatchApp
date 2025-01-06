<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\AdminStore;
use App\Models\Store;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

class Admin_Store_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $admins = Admin::pluck('id')->toArray();
        $stores = Store::pluck('id')->toArray();
        // 配列をランダムに並び替え
        shuffle($admins);
        shuffle($stores);

        Log::debug('Admins:', $admins);
        Log::debug('Stores:', $stores);

        // AdminStore テーブルにデータを挿入
        foreach ($stores as $key => $storeId) {
            // Admin ID をランダムに選択（キーをループと対応させる）
            $adminId = $admins[$key % count($admins)]; // 配列を超えないように調整

            AdminStore::create([
                'admin_id' => $adminId,
                'store_id' => $storeId,
            ]);
        }
    }
}
