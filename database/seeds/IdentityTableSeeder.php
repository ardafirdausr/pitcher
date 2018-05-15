<?php

use Illuminate\Database\Seeder;
use App\Models\User\Identity;

class IdentityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userIdentity = [
            [                
                'nik' => '0822574666686', 
                'nama_bank' => 'BRI', 
                'nomor_rekening' => '317901000163254',
                'pemilik_rekening' => 'Arda Firdaus Ramadhan',                                
                'user_id' => 1
            ],
            [                
                'nik' => '6098075998834005', 
                'nama_bank' => 'Mandiri', 
                'nomor_rekening' => '007531908729854',
                'pemilik_rekening' => 'Alma Indah Putri',                                
                'user_id' => 2
            ],
            [                
                'nik' => '44057690077089205', 
                'nama_bank' => 'BNI', 
                'nomor_rekening' => '97346908729854',
                'pemilik_rekening' => 'Agus Widodo',                                
                'user_id' => 3
            ],
            [                
                'nik' => '1145075998337865', 
                'nama_bank' => 'BCA', 
                'nomor_rekening' => '8769837701975364',
                'pemilik_rekening' => 'Nur Rizky',                                
                'user_id' => 4
            ],
        ];

        Identity::insert($userIdentity);

    }
}
