<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\CompanyModel;

class CompanyController extends BaseController
{
    protected $companyModel;

    public function __construct()
    {
        $this->companyModel = new CompanyModel();
    }

    public function index()
    {
        $data = [
            'title'   => 'Data Perusahaan',
            'active'  => 'company',
            'company' => $this->companyModel->findAll()
        ];

        return view('admin/company/index', $data);
    }

    public function update()
    {
        $data = $this->request->getPost();

        foreach ($data as $key => $value) {
            // Check if key exists
            $exists = $this->companyModel->where('key', $key)->first();
            
            if ($exists) {
                // Update
                $this->companyModel->update($exists['id'], ['value' => $value]);
            } else {
                // Ignore unknown keys or insert if needed (strict mode on: ignore)
            }
        }

        session()->setFlashdata('success', 'Data perusahaan berhasil diperbarui.');
        return redirect()->to('/admin/company');
    }
}
