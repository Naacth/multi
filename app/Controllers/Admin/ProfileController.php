<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;

class ProfileController extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $data = [
            'title'  => 'Profil Admin',
            'active' => 'profile',
            'user'   => $this->userModel->find(session()->get('id'))
        ];

        return view('admin/profile/index', $data);
    }

    public function update()
    {
        $id = session()->get('id');
        
        $rules = [
            'username' => "required|min_length[3]|is_unique[users.username,id,{$id}]",
            'name'     => 'required|min_length[3]',
        ];

        if ($this->request->getPost('password')) {
            $rules['password'] = 'required|min_length[6]';
            $rules['confirm_password'] = 'required|matches[password]';
        }

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'username' => $this->request->getPost('username'),
            'name'     => $this->request->getPost('name'),
        ];

        if ($this->request->getPost('password')) {
            $data['password'] = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);
        }

        $this->userModel->update($id, $data);

        // Update session name if changed
        session()->set('name', $data['name']);

        return redirect()->to('/admin/profile')->with('success', 'Profil berhasil diperbarui.');
    }
}
