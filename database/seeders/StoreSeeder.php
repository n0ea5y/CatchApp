<?php

namespace Database\Seeders;

use App\Models\Store;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Store::create([
            'name' => '酔っ来らせ',
            'name_kana' => 'ヨッコラセ',
        ]);
        Store::create([
            'name' => '酔っ来いしょ',
            'name_kana' => 'ヨッコイショ',
        ]);
        Store::create([
            'name' => '天下鳥',
            'name_kana' => 'テンカドリ',
        ]);
        Store::create([
            'name' => 'シャカリキ',
            'name_kana' => 'シャカリキ',
        ]);
        Store::create([
            'name' => '金太郎',
            'name_kana' => 'キンタロウ',
        ]);
    }
}
