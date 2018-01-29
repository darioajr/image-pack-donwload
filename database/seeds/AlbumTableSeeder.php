<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlbumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('albums')->insert([
            ['name' => 'dzarm', 'folder_path' => public_path('albums/dzarm')],
            ['name' => 'hering', 'folder_path' => public_path('albums/hering')],
            ['name' => 'heringkids', 'folder_path' => public_path('albums/heringkids')],
            ['name' => 'puc', 'folder_path' => public_path('albums/puc')],
        ]);
    }
}
