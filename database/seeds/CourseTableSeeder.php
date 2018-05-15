<?php

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course = [
            //coursenya user id 1
            [
                'judul' => 'Basic Laravel 5.6',
                'harga' => 100000,
                'deskripsi' => 'Pelajari framework MVC laravel 5.6',
                'user_id' => 1,
                'category_id' => 9
            ],
            [
                'judul' => 'Basic Code Igniter 3.1',
                'harga' => 100000,
                'deskripsi' => 'Pelajari framework PHP dengan komunitas terbesar',
                'user_id' => 1,
                'category_id' => 9
            ],
            [
                'judul' => 'Express.js',
                'harga' => 150000,
                'deskripsi' => 'Pelajari framework backend dengan bahasa javascipt',
                'user_id' => 1,
                'category_id' => 9
            ],
            [
                'judul' => 'Graph QL',
                'harga' => 150000,
                'deskripsi' => 'Pelajari cara baru melakukan query',
                'user_id' => 1,
                'category_id' => 9
            ],
            [
                'judul' => 'React + Redux',
                'harga' => 200000,
                'deskripsi' => 'Pelajari single thruth state pada SPA ',
                'user_id' => 1,
                'category_id' => 9
            ],
            //course user id 2 
            [
                'judul' => 'Biology',
                'harga' => 100000,
                'deskripsi' => 'Belajar dengan cara mudah hafal',
                'user_id' => 2,
                'category_id' => 5
            ],
            [
                'judul' => 'Fisika',
                'harga' => 100000,
                'deskripsi' => 'Fisika itu mudah',
                'user_id' => 2,
                'category_id' => 5
            ],
            [
                'judul' => 'Kimia',
                'harga' => 100000,
                'deskripsi' => 'Belajar kimia itu asik ',
                'user_id' => 2,
                'category_id' => 5
            ],
            [
                'judul' => 'Matematika',
                'harga' => 100000,
                'deskripsi' => 'Metode cepat menghitung',
                'user_id' => 2,
                'category_id' => 5
            ],
            [
                'judul' => 'Bahasa Ingriss',
                'harga' => 100000,
                'deskripsi' => 'Belajar seru bahasa ingrris',
                'user_id' => 2,
                'category_id' => 5
            ],
            //course user id  3            
            [
                'judul' => 'Sejarah',
                'harga' => 100000,
                'deskripsi' => 'Belajar dengan cara mudah hafal',
                'user_id' => 3,
                'category_id' => 4
            ],
            [
                'judul' => 'Sosiologi',
                'harga' => 100000,
                'deskripsi' => 'Belajar dengan cara mudah hafal',
                'user_id' => 3,
                'category_id' => 4
            ],
            [
                'judul' => 'Bahasa Indonesia',
                'harga' => 100000,
                'deskripsi' => 'Belajar dengan cara mudah hafal',
                'user_id' => 3,
                'category_id' => 4
            ],
            [
                'judul' => 'Biology',
                'harga' => 100000,
                'deskripsi' => 'Belajar dengan cara mudah hafal',
                'user_id' => 3,
                'category_id' => 4
            ],
            //course user id  4
            [
                'judul' => 'Matematika',
                'harga' => 100000,
                'deskripsi' => 'Belajar dengan cara mudah hafal',
                'user_id' => 4,
                'category_id' => 3
            ],
            [
                'judul' => 'IPA',
                'harga' => 100000,
                'deskripsi' => 'Belajar dengan cara mudah hafal',
                'user_id' => 4,
                'category_id' => 3
            ],
            [
                'judul' => 'IPS',
                'harga' => 100000,
                'deskripsi' => 'Belajar dengan cara mudah hafal',
                'user_id' => 4,
                'category_id' => 3
            ],
            [
                'judul' => 'Bahasa Ingriss',
                'harga' => 100000,
                'deskripsi' => 'Belajar dengan cara mudah hafal',
                'user_id' => 4,
                'category_id' => 3
            ],
        ];

        Course::insert($course);
    }
}
