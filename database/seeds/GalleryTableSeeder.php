<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GalleryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galleries')->insert([
            ['name' => 'inverno_feminino_2018','album_id' => 2],
            ['name' => 'verao_masculino_2018','album_id' => 2],
        ]);
    }
}