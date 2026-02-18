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
        $rules = [
            'name' => 'required|min_length[3]',
            'logo' => 'permit_empty|max_size[logo,2048]|is_image[logo]|mime_in[logo,image/jpg,image/jpeg,image/png,image/gif,image/webp]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'name'        => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'logo'        => null,
        ];

        $file = $this->request->getFile('logo');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $uploadDir = FCPATH . 'uploads' . DIRECTORY_SEPARATOR . 'clients';
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }
            $newName = $file->getRandomName();
            if ($file->move($uploadDir, $newName)) {
                $data['logo'] = $newName;
            } else {
                return redirect()->back()->withInput()->with('error', 'Gagal menyimpan file logo: ' . ($file->getError() ?: 'cek folder writable/uploads/clients'));
            }
        }

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
            'name' => 'required|min_length[3]',
            'logo' => 'permit_empty|max_size[logo,2048]|is_image[logo]|mime_in[logo,image/jpg,image/jpeg,image/png,image/gif,image/webp]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'name'        => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
        ];

        $file = $this->request->getFile('logo');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $uploadDir = FCPATH . 'uploads' . DIRECTORY_SEPARATOR . 'clients';
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }
            $newName = $file->getRandomName();
            if ($file->move($uploadDir, $newName)) {
                $data['logo'] = $newName;
                $oldPath = FCPATH . 'uploads' . DIRECTORY_SEPARATOR . 'clients' . DIRECTORY_SEPARATOR . ($client['logo'] ?? '');
                if (!empty($client['logo']) && is_file($oldPath)) {
                    @unlink($oldPath);
                }
            } else {
                return redirect()->back()->withInput()->with('error', 'Gagal menyimpan file logo: ' . ($file->getError() ?: 'cek folder writable/uploads/clients'));
            }
        }

        $this->clientModel->update($id, $data);

        return redirect()->to('/admin/clients')->with('success', 'Data klien berhasil diperbarui.');
    }

    public function delete($id)
    {
        $client = $this->clientModel->find($id);
        $logoPath = $client && !empty($client['logo'])
            ? FCPATH . 'uploads' . DIRECTORY_SEPARATOR . 'clients' . DIRECTORY_SEPARATOR . $client['logo']
            : '';
        if ($logoPath !== '' && is_file($logoPath)) {
            @unlink($logoPath);
        }
        $this->clientModel->delete($id);
        return redirect()->to('/admin/clients')->with('success', 'Klien berhasil dihapus.');
    }
}
