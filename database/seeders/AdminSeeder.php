<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'first_name' => '田中',
            'last_name' => '太郎',
            'first_name_kana' => 'タナカ',
            'last_name_kana' => 'タロウ',
            'jtc_id' => 'A001',
            'email' => 'tanaka@example.com',
            'password' => bcrypt('123'),
        ]);

        Admin::create([
            'first_name' => '山田',
            'last_name' => '花子',
            'first_name_kana' => 'ヤマダ',
            'last_name_kana' => 'ハナコ',
            'jtc_id' => 'A002',
            'email' => 'yamada@example.com',
            'password' => bcrypt('123'),
        ]);

        Admin::create([
            'first_name' => '鈴木',
            'last_name' => '一郎',
            'first_name_kana' => 'スズキ',
            'last_name_kana' => 'イチロウ',
            'jtc_id' => 'A003',
            'email' => 'suzuki@example.com',
            'password' => bcrypt('123'),
        ]);

    }
}
