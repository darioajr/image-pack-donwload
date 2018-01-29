<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call('AlbumTableSeeder');
         $this->call('GalleryTableSeeder');
         $this->call('ImageTableSeeder');
    }
}
