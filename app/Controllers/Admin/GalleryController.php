<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\GalleryModel;

class GalleryController extends BaseController
{
    protected $galleryModel;

    public function __construct()
    {
        $this->galleryModel = new GalleryModel();
    }

    public function index()
    {
        $data = [
            'title'   => 'Galeri Foto',
            'active'  => 'gallery',
            'gallery' => $this->galleryModel->findAll()
        ];

        return view('admin/gallery/index', $data);
    }

    public function new()
    {
        $data = [
            'title'  => 'Upload Foto Baru',
            'active' => 'gallery'
        ];
        return view('admin/gallery/create', $data);
    }

    public function create()
    {
        $rules = [
            'title' => 'required',
            'image' => 'uploaded[image]|max_size[image,5120]|is_image[image]|mime_in[image,image/jpg,image/jpeg,image/png,image/gif,image/webp]',
            'category' => 'required'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $file = $this->request->getFile('image');
        $newName = $file->getRandomName();
        $file->move('uploads/gallery', $newName);

        $data = [
            'title'    => $this->request->getPost('title'),
            'image'    => $newName,
            'category' => $this->request->getPost('category'),
        ];

        $this->galleryModel->insert($data);

        return redirect()->to('/admin/gallery')->with('success', 'Foto berhasil diupload.');
    }

    public function delete($id)
    {
        $photo = $this->galleryModel->find($id);
        
        if ($photo) {
            // Delete file
            if (file_exists('uploads/gallery/' . $photo['image'])) {
                unlink('uploads/gallery/' . $photo['image']);
            }
            
            $this->galleryModel->delete($id);
            return redirect()->to('/admin/gallery')->with('success', 'Foto berhasil dihapus.');
        }

        return redirect()->to('/admin/gallery')->with('error', 'Foto tidak ditemukan.');
    }
}
