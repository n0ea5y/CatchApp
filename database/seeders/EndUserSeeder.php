<?php

namespace Database\Seeders;

use App\Models\EndUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EndUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EndUser::create([
            'first_name' => '佐藤',
            'last_name' => '健',
            'first_name_kana' => 'サトウ',
            'last_name_kana' => 'ケン',
            'email' => 'satou@example.com',
            'password' => bcrypt('123'),
        ]);

        EndUser::create([
            'first_name' => '高橋',
            'last_name' => '葵',
            'first_name_kana' => 'タカハシ',
            'last_name_kana' => 'アオイ',
            'email' => 'takahashi@example.com',
            'password' => bcrypt('123'), 
        ]);

        EndUser::create([
            'first_name' => '中村',
            'last_name' => '美咲',
            'first_name_kana' => 'ナカムラ',
            'last_name_kana' => 'ミサキ',
            'email' => 'nakamura@example.com',
            'password' => bcrypt('123'), 
        ]);
    }
}
