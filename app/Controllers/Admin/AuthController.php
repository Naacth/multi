<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;

class AuthController extends BaseController
{
    public function login()
    {
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/admin/dashboard');
        }

        return view('auth/login');
    }

    public function attemptLogin()
    {
        $session = session();
        $userModel = new UserModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $userModel->where('username', $username)->first();

        if ($user) {
            $pass = $user['password'];
            if (password_verify($password, $pass)) {
                $ses_data = [
                    'id'         => $user['id'],
                    'username'   => $user['username'],
                    'name'       => $user['name'],
                    'isLoggedIn' => true,
                ];
                $session->set($ses_data);
                
                // Update last login
                $userModel->update($user['id'], ['last_login' => date('Y-m-d H:i:s')]);

                return redirect()->to('/admin/dashboard');
            } else {
                $session->setFlashdata('msg', 'Password salah.');
                return redirect()->to('/admin/login');
            }
        } else {
            $session->setFlashdata('msg', 'Username tidak ditemukan.');
            return redirect()->to('/admin/login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/admin/login');
    }
}
