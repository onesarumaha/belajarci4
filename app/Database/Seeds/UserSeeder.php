<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        // menambahkan 1 data
    /*    $data = [
            'name_user' => 'Administrator',
            'email_user' => 'onesarumaha@gmail.com',
            'password_user' => password_hash('12345', PASSWORD_DEFAULT),
        ];
        $this->db->table('users')->insert($data);
    */

        // untuk menambahkan banyak data  
         $data = [
            [
                'name_user' => 'Friska Yuli Suchendar',
                'email_user' => 'friska@gmail.com',
                'password_user' => password_hash('12345', PASSWORD_DEFAULT),
            ],
            [
                'name_user' => 'Yuli Suchendar',
                'email_user' => 'Suchendar@gmail.com',
                'password_user' => password_hash('yuli', PASSWORD_DEFAULT),
            ],
            [
                'name_user' => 'Administrator',
                'email_user' => 'onesarumaha@gmail.com',
                'password_user' => password_hash('123456', PASSWORD_DEFAULT),
            ],
        ];

        $this->db->table('users')->insertBatch($data);
        
    }
}
