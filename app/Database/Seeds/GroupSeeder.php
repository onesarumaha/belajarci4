<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GroupSeeder extends Seeder
{
    public function run()
    {
         $data = [
            [
                'name_group' => 'Teman TK',
                'info_group' => 'Teman dari TK',
            ],
             [
                'name_group' => 'Teman SD',
                'info_group' => 'Teman dari SD',
            ],
            [
                'name_group' => 'Teman SMK',
                'info_group' => 'Teman dari SMK',
            ],
            [
                'name_group' => 'Teman SMP',
                'info_group' => 'Teman dari SMP',
            ],
            [
                'name_group' => 'Teman Kuliah',
                'info_group' => 'Teman dari Kuliah',
            ],
            
        ];

        $this->db->table('groups')->insertBatch($data);
    }
}
