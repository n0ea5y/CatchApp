<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // AdminSeederを呼び出し
        $this->call(AdminSeeder::class);
        // EndUserSeederを呼び出し
        $this->call(EndUserSeeder::class);
        // StoreSeederを読み出し 
        $this->call(StoreSeeder::class);
    }
}
