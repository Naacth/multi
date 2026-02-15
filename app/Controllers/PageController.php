<?php

namespace App\Controllers;

use App\Models\ClientModel;
use App\Models\CompanyModel;
use App\Models\ServiceModel;
use App\Models\GalleryModel;

class PageController extends BaseController
{
    protected $companyModel;
    protected $clientModel;
    protected $serviceModel;
    protected $galleryModel;

    public function __construct()
    {
        $this->companyModel = new CompanyModel();
        $this->clientModel = new ClientModel();
        $this->serviceModel = new ServiceModel();
        $this->galleryModel = new GalleryModel();
    }

    protected function getCompanyData()
    {
        return $this->companyModel->getConfig();
    }

    public function index()
    {
        $company = $this->getCompanyData();
        
        $data = [
            'title'    => 'Beranda | ' . ($company['name'] ?? 'CV. Multi Teknik Jaya'),
            'active'   => 'home',
            'company'  => $company,
            'clients'  => $this->clientModel->findAll(),
            'services' => $this->serviceModel->findAll(),
            'gallery'  => $this->galleryModel->orderBy('created_at', 'DESC')->findAll(6) // Latest 6 photos
        ];

        return view('pages/home', $data);
    }

    public function about()
    {
        $company = $this->getCompanyData();
        
        $data = [
            'title'   => 'Tentang Kami | ' . ($company['name'] ?? 'CV. Multi Teknik Jaya'),
            'active'  => 'about',
            'company' => $company
        ];

        return view('pages/about', $data);
    }

    public function clients()
    {
        $company = $this->getCompanyData();
        
        $data = [
            'title'   => 'Klien Kami | ' . ($company['name'] ?? 'CV. Multi Teknik Jaya'),
            'active'  => 'clients',
            'company' => $company,
            'clients' => $this->clientModel->findAll()
        ];

        return view('pages/clients', $data);
    }

    public function contact()
    {
        $company = $this->getCompanyData();
        
        $data = [
            'title'   => 'Kontak | ' . ($company['name'] ?? 'CV. Multi Teknik Jaya'),
            'active'  => 'contact',
            'company' => $company
        ];

        return view('pages/contact', $data);
    }
}
