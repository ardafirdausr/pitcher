<?php

use Illuminate\Database\Seeder;
use App\Models\User\User;
use App\Models\User\Identity;
use Illuminate\Support\Facades\Hash;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            //id 1
            [ 'name' => 'Arda Firdaus Ramadhan', 'email' => 'ardafirdausr@gmail.com', 'password' => Hash::make('rahasia')],
            //id 2
            [ 'name' => 'Sisca', 'email' => 'sisca@gmail.com', 'password' => Hash::make('hihihi')],
            //id 3
            [ 'name' => 'Agus Widodo', 'email' => 'aguswidodo@gmail.com', 'password' => Hash::make('hohoho')],
            //id 4
            [ 'name' => 'Nur Rizky', 'email' => 'nurrizky@gmail.com', 'password' => Hash::make('hahaha')],
        ];

        User::insert($userData);

    }
}
