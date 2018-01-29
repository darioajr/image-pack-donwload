<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //feminino
        DB::table('images')->insert([
            'name' => '0B0CAX7EN.jpg',
            "file_path" => "hering/galleries/2018_inverno_basico_feminino/0B0CAX7EN.jpg",
            'gallery_id' => 1,
        ]);
        DB::table('images')->insert([
            'name' => '0B0CRWBEN.jpg',
            "file_path" => "hering/galleries/2018_inverno_basico_feminino/0B0CRWBEN.jpg",
            'gallery_id' => 1,
        ]);

        //masculino
        DB::table('images')->insert([
            'name' => '3M1M1BEN.jpg',
            "file_path" => "hering/galleries/2018_inverno_basico_masculino/3M1M1BEN.jpg",
            'gallery_id' => 1,
        ]);
        DB::table('images')->insert([
            'name' => '04YR1AEN.jpg',
            "file_path" => "hering/galleries/2018_inverno_basico_masculino/04YR1AEN.jpg",
            'gallery_id' => 1,
        ]);
        DB::table('images')->insert([
            'name' => '04ZEN10EN.jpg',
            "file_path" => "hering/galleries/2018_inverno_basico_masculino/04ZEN10EN.jpg",
            'gallery_id' => 1,
        ]);
    }
}