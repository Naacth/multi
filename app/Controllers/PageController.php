<?php

namespace App\Controllers;

use App\Models\ClientModel;

class PageController extends BaseController
{
    /**
     * Homepage
     */
    public function index()
    {
        $data = [
            'title' => 'Beranda | CV. Multi Teknik Jaya',
            'active' => 'home'
        ];

        return view('pages/home', $data);
    }

    /**
     * About Us Page
     */
    public function about()
    {
        $data = [
            'title' => 'Tentang Kami | CV. Multi Teknik Jaya',
            'active' => 'about'
        ];

        return view('pages/about', $data);
    }

    /**
     * Clients Page
     */
    public function clients()
    {
        $clientModel = new ClientModel();

        $data = [
            'title' => 'Klien Kami | CV. Multi Teknik Jaya',
            'active' => 'clients',
            'clients' => $clientModel->findAll()
        ];

        return view('pages/clients', $data);
    }

    /**
     * Contact Page
     */
    public function contact()
    {
        $data = [
            'title' => 'Hubungi Kami | CV. Multi Teknik Jaya',
            'active' => 'contact'
        ];

        return view('pages/contact', $data);
    }
}
