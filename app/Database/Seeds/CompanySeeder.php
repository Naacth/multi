<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CompanySeeder extends Seeder
{
    public function run()
    {
        $this->db->table('company_info')->truncate();

        $data = [
            ['key' => 'name', 'value' => 'CV. Multi Teknik Jaya', 'description' => 'Nama Perusahaan'],
            ['key' => 'address', 'value' => 'Bumi Indah City Tahap 2 Blok FH No.3A, Kel. Sukamantri Kec. Pasarkemis Kab. Tangerang', 'description' => 'Alamat Lengkap'],
            ['key' => 'phone', 'value' => '(021) 59313656', 'description' => 'Nomor Telepon'],
            ['key' => 'fax', 'value' => '(021) 5905343', 'description' => 'Nomor Fax'],
            ['key' => 'whatsapp', 'value' => '6281234567890', 'description' => 'Nomor WhatsApp (Format: 628...)'],
            ['key' => 'email', 'value' => 'multiteknikj@gmail.com', 'description' => 'Email Perusahaan'],
            ['key' => 'director', 'value' => 'TRI LUARTININGSIH', 'description' => 'Nama Direktur'],
            ['key' => 'employees', 'value' => '7 Orang', 'description' => 'Jumlah Karyawan'],
            ['key' => 'vision', 'value' => 'Menjadi bengkel Filter, Bubut dan Fabrikasi terbaik dan terpercaya serta pilihan utama para Customer.', 'description' => 'Visi Perusahaan'],
            ['key' => 'google_maps', 'value' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521260322283!2d106.61988957475149!3d-6.194741393792892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f8e853d2e3c7%3A0x7b5d3d3d3d3d3d3d!2sBumi%20Indah%20City!5e0!3m2!1sen!2sid!4v1623314000000!5m2!1sen!2sid', 'description' => 'Link Embed Google Maps'],
        ];

        // Add timestamps
        foreach ($data as &$row) {
            $row['created_at'] = date('Y-m-d H:i:s');
            $row['updated_at'] = date('Y-m-d H:i:s');
        }

        $this->db->table('company_info')->insertBatch($data);
    }
}
