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
        
        $this->call([
          UserCareerTableSeeder::class,
        ]);
        
        $this->call([
          UserEducationTableSeeder::class,
        ]);
        
        
        $this->call([
          UserFavoriteTableSeeder::class,
        ]);
        
        
        $this->call([
          UserPictureTableSeeder::class,
        ]);
        
        
        
        
    }

}
