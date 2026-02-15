<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ServiceModel;

class ServiceController extends BaseController
{
    protected $serviceModel;

    public function __construct()
    {
        $this->serviceModel = new ServiceModel();
    }

    public function index()
    {
        $data = [
            'title'    => 'Manajemen Layanan',
            'active'   => 'services',
            'services' => $this->serviceModel->findAll()
        ];

        return view('admin/services/index', $data);
    }

    public function new()
    {
        $data = [
            'title'  => 'Tambah Layanan Baru',
            'active' => 'services'
        ];
        return view('admin/services/create', $data);
    }

    public function create()
    {
        $rules = [
            'title' => 'required|min_length[3]',
            'slug'  => 'required|min_length[3]|is_unique[services.slug]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'title'       => $this->request->getPost('title'),
            'slug'        => $this->request->getPost('slug'),
            'description' => $this->request->getPost('description'),
            'icon'        => $this->request->getPost('icon'), // We can store SVG path data or icon name
        ];

        $this->serviceModel->insert($data);

        return redirect()->to('/admin/services')->with('success', 'Layanan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $service = $this->serviceModel->find($id);

        if (!$service) {
            return redirect()->to('/admin/services')->with('error', 'Layanan tidak ditemukan.');
        }

        $data = [
            'title'   => 'Edit Layanan',
            'active'  => 'services',
            'service' => $service
        ];

        return view('admin/services/edit', $data);
    }

    public function update($id)
    {
        $service = $this->serviceModel->find($id);
        if (!$service) {
            return redirect()->to('/admin/services')->with('error', 'Layanan tidak ditemukan.');
        }

        $rules = [
            'title' => 'required|min_length[3]',
            'slug'  => "required|min_length[3]|is_unique[services.slug,id,{$id}]",
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'title'       => $this->request->getPost('title'),
            'slug'        => $this->request->getPost('slug'),
            'description' => $this->request->getPost('description'),
            'icon'        => $this->request->getPost('icon'),
        ];

        $this->serviceModel->update($id, $data);

        return redirect()->to('/admin/services')->with('success', 'Layanan berhasil diperbarui.');
    }

    public function delete($id)
    {
        $this->serviceModel->delete($id);
        return redirect()->to('/admin/services')->with('success', 'Layanan berhasil dihapus.');
    }
}
