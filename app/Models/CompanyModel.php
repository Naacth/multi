<?php

namespace App\Models;

use CodeIgniter\Model;

class CompanyModel extends Model
{
    protected $table            = 'company_info';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['key', 'value', 'description'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Helper method to get all config as key-value pair
    public function getConfig()
    {
        $rows = $this->findAll();
        $config = [];
        foreach ($rows as $row) {
            $config[$row['key']] = $row['value'];
        }
        return $config;
    }
}
