<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('services')->truncate();

        $data = [
            [
                'title'       => 'Machining',
                'slug'        => 'machining',
                'description' => 'Pembuatan, perbaikan serta Recondisi Alat berat dan Sparepart Mesin Industri.',
                'icon'        => 'cog', // We'll manage icons in the view or use SVGs
            ],
            [
                'title'       => 'Filter',
                'slug'        => 'filter',
                'description' => 'Pembuatan dan perbaikan berbagai jenis filter industri (Press Jig Filter).',
                'icon'        => 'filter',
            ],
            [
                'title'       => 'Fabrikasi',
                'slug'        => 'fabrikasi',
                'description' => 'Komponen material baik berupa Plat, Pipa ataupun Baja yang dapat dibentuk sesuai kebutuhan.',
                'icon'        => 'hammer',
            ],
        ];

        // Add timestamps
        foreach ($data as &$row) {
            $row['created_at'] = date('Y-m-d H:i:s');
            $row['updated_at'] = date('Y-m-d H:i:s');
        }

        $this->db->table('services')->insertBatch($data);
    }
}
