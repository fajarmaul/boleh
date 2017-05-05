<?php

use Illuminate\Database\Seeder;

class Items extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $item_name = ['cimol','martabak','somay','cilor','batagor'];
       $counter = 0;
       for($i = 0; $i<5; $i++){
         $item = new App\Item;
         $item -> item_name = $item_name[$i];
         $item -> price = rand(10000, 100000);
         $item -> type  = rand(0,1);
         $item->save();
         $counter++;
       }
       $this->command->info('Berhasil menambahkan '.$counter.' items kedalam database');

    }
}
