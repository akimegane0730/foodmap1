<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("categories")->insert([
            [
                'name' => '和食',
            ],
            [
                'name' => '洋食',
            ],
            [
                'name' => '中華',
            ],
            [
                'name' => 'イタリアン',
            ],
            [
                'name' => '居酒屋',
            ],
            [
                'name' => 'カフェ',
            ],
            [
                'name' => 'ラーメン',
            ],
            [
                'name' => 'その他',
            ],

        ]);
    }
}
