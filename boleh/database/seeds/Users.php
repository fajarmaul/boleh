<?php

use Illuminate\Database\Seeder;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Faker::create('id_ID');
        $name = ['Fajar', 'Ardan', 'Afandi', 'Danang', 'Fikri'];
        $email = ['fajar@gmail.com', 'ardan@gmail.com', 'afandi@gmail.com', 'danang@gmail.com', 'fikri@gmail.com'];
        $counter = 0;
        for($i = 0; $i<5; $i++){
          $user = new App\User;
          $user -> name = $name[$i];
          $user -> email = $email[$i];
          $user -> password  = bcrypt('secret');
          $user -> phone = "02139837855";
          $user -> address = "IPB Dramaga";
          $user -> role = 0;
          $user->save();
          $counter++;
        }
        $this->command->info('Berhasil menambahkan '.$counter.' users kedalam database');

    }
}
