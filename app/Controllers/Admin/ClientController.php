<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ClientModel;

class ClientController extends BaseController
{
    protected $clientModel;

    public function __construct()
    {
        $this->clientModel = new ClientModel();
    }

    public function index()
    {
        $data = [
            'title'   => 'Manajemen Klien',
            'active'  => 'clients',
            'clients' => $this->clientModel->findAll()
        ];

        return view('admin/clients/index', $data);
    }

    public function new()
    {
        $data = [
            'title'  => 'Tambah Klien Baru',
            'active' => 'clients'
        ];
        return view('admin/clients/create', $data);
    }

    public function create()
    {
        // Validation handled by model or manually here
        $rules = [
            'name' => 'required|min_length[3]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'name'        => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
        ];

        // Handle File Upload (Logo) could be added here if needed
        // For now, we are just managing text data per user request history (placeholders used)
        
        $this->clientModel->insert($data);

        return redirect()->to('/admin/clients')->with('success', 'Klien berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $client = $this->clientModel->find($id);

        if (!$client) {
            return redirect()->to('/admin/clients')->with('error', 'Klien tidak ditemukan.');
        }

        $data = [
            'title'  => 'Edit Klien',
            'active' => 'clients',
            'client' => $client
        ];

        return view('admin/clients/edit', $data);
    }

    public function update($id)
    {
        $client = $this->clientModel->find($id);
        if (!$client) {
            return redirect()->to('/admin/clients')->with('error', 'Klien tidak ditemukan.');
        }

        $rules = [
            'name' => 'required|min_length[3]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'name'        => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
        ];

        $this->clientModel->update($id, $data);

        return redirect()->to('/admin/clients')->with('success', 'Data klien berhasil diperbarui.');
    }

    public function delete($id)
    {
        $this->clientModel->delete($id);
        return redirect()->to('/admin/clients')->with('success', 'Klien berhasil dihapus.');
    }
}
