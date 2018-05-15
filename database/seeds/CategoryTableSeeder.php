<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            ['name' => 'Umum'],
            ['name' => 'TK/PAUD'],
            ['name' => 'SD'],
            ['name' => 'SMP'],
            ['name' => 'SMA'],
            ['name' => 'Universitas'],
            ['name' => 'Bahasa'],
            ['name' => 'Seni'],            
            ['name' => 'Komputer'],
            ['name' => 'Elektronika'],            
            ['name' => 'Umum'],
            ['name' => 'Olimpiade'],
            ['name' => 'Olahraga'],
            ['name' => 'Desain'],
            ['name' => 'Fotografi'],
            ['name' => 'Bisnis'],
            ['name' => 'Soft skill'],            
        ];

        Category::insert($category);
    }
}
