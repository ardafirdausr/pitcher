<?php

use Illuminate\Database\Seeder;
use App\Models\User\Profile;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $userProfile = [
            [                
                'no_telepon' => '0822574666686', 
                'jenis_kelamin' => 'laki-laki', 
                'provinsi' => '35',
                'kota' => '3573',
                'kota_mengajar' => '3573',
                'Alamat' => 'Perum Bumi Asri C-4',
                'tentang' => 'Aku suka coding',
                'biodata' => 'Ini biodataku',
                'user_id' => 1
            ],
            [                
                'no_telepon' => '086350083655', 
                'jenis_kelamin' => 'perempuan', 
                'provinsi' => '32',
                'kota' => '3273',
                'kota_mengajar' => '3273',
                'Alamat' => 'Jalan Sesama no. 14',
                'tentang' => 'Aku suka jalan-jalan',
                'biodata' => 'Ini biodataku',
                'user_id' => 2
            ],
            [                
                'no_telepon' => '081124677562', 
                'jenis_kelamin' => 'laki-laki', 
                'provinsi' => '33',
                'kota' => '3374',
                'kota_mengajar' => '3374',
                'Alamat' => 'Perum Nusa Indah DD-44',
                'tentang' => 'Guru profesional di kampung',
                'biodata' => 'Ini biodataku',
                'user_id' => 3             
            ],
            [                
                'no_telepon' => '081234567890', 
                'jenis_kelamin' => 'perempuan', 
                'provinsi' => '32',
                'kota' => '3271',
                'kota_mengajar' => '3271',
                'Alamat' => 'Jalan Patimura gang 12 No. 77',
                'tentang' => 'Suka sekali mengajar',
                'biodata' => 'Ini biodataku',
                'user_id' => 4
            ]
        ];

        Profile::insert($userProfile);

    }
}
