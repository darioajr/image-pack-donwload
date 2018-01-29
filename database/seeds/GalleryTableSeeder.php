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
            ['name' => '2018_inverno_basico_feminino','folder_path' => public_path('albums/hering/galleries/2018_inverno_basico_feminino'),'album_id' => 2],
            ['name' => '2018_inverno_basico_masculino','folder_path' => public_path('albums/hering/galleries/2018_inverno_basico_masculino'),'album_id' => 2],
        ]);
    }
}