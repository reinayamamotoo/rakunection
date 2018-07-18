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
        // $this->call(UsersTableSeeder::class);
        // シーダクラスが複数ある場合には、この配列に追加していけばOK
        
        $this->call([
          UsersTableSeeder::class,
        ]);
    }

}
