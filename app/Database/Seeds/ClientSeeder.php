<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ClientSeeder extends Seeder
{
    public function run()
    {
        // Clear existing data
        $this->db->table('clients')->truncate();
        
        $data = [
            [
                'name'        => 'PT. DONGJIN INDONESIA',
                'logo'        => null,
                'description' => 'Industri Tekstil',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'name'        => 'PT. ACRYL TEXTILE MILLS (ACTEM) / TORAY',
                'logo'        => null,
                'description' => 'Industri Tekstil',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'name'        => 'PT. INDONESIA SYNTHETIC TEXTILE MILLS (ISTEM) / TORAY',
                'logo'        => null,
                'description' => 'Industri Tekstil',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'name'        => 'PT. KODASINDO TATASARANA',
                'logo'        => null,
                'description' => 'Industri',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'name'        => 'PT. WONOKOYO JAYA KUSUMA',
                'logo'        => null,
                'description' => 'Industri',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'name'        => 'PT. ALAM LESTARI UNGGUL',
                'logo'        => null,
                'description' => 'Industri',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'name'        => 'PT. LAUTAN SULFAMAT LESTARI',
                'logo'        => null,
                'description' => 'Industri Kimia',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'name'        => 'PT. SINCERE STORE',
                'logo'        => null,
                'description' => 'Retail',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'name'        => 'PT. INDORAMA PETROCHEMICAL',
                'logo'        => null,
                'description' => 'Industri Petrokimia',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'name'        => 'PT. IPB SHIGETA ANIMALS BOGOR',
                'logo'        => null,
                'description' => 'Peternakan',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'name'        => 'PT. SAMWON INTERNASIONAL',
                'logo'        => null,
                'description' => 'Industri',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'name'        => 'PT. KJH INDAH',
                'logo'        => null,
                'description' => 'Industri',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'name'        => 'PT. IPB SHIGETA ANIMAL SURABAYA',
                'logo'        => null,
                'description' => 'Peternakan',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
        ];

        $this->db->table('clients')->insertBatch($data);
    }
}
