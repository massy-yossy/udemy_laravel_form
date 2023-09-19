<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            ['name' => '高級クロワッサン', 'area_id' => 1],
            ['name' => '高級食パン', 'area_id' => 2],
            ['name' => '高級コッペパン', 'area_id' => 1],
            ['name' => '高級アンパン', 'area_id' => 3],
        ]);
    }
}
