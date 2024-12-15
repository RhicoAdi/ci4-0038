<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class User extends Seeder
{
    public function run()
    {
        //
        $data = [
            'username' => 'rhico',
            'password' => password_hash('admin', PASSWORD_DEFAULT),
            'nama_lengkap' => 'Rhico Adi Wira Kusuma',
            'email'    => 'rhicoadiwirakusuma@gmail.com',
        ];
        $this->db->table('user')->insert($data);
    }
}
