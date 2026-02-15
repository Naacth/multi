<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        // Default Admin User
        $data = [
            'username'   => 'admin',
            'password'   => password_hash('admin123', PASSWORD_DEFAULT),
            'name'       => 'Administrator',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        // Check if admin exists
        if ($this->db->table('users')->where('username', 'admin')->countAllResults() === 0) {
            $this->db->table('users')->insert($data);
        }
    }
}
