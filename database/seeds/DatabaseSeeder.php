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
        // run php artisan laravolt:indonesia:seed 
        $this->call([
            UserTableSeeder::class,
            ProfileTableSeeder::class,
            IdentityTableSeeder::class,
            CategoryTableSeeder::class ,
            CourseTableSeeder::class                       
        ]);
    }
}
