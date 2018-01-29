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
            ['name' => 'dzarm', 'folder_path' => 'dzarm'],
            ['name' => 'hering', 'folder_path' => 'hering'],
            ['name' => 'heringkids', 'folder_path' => 'heringkids'],
            ['name' => 'puc', 'folder_path' => 'puc'],
        ]);
    }
}
