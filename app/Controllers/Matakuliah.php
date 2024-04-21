<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Matakuliah extends Controller
{
    public function index()
    {
        return view('view-form-matakuliah');
    }

    public function cetak()
    {
        // Load form validation library
        $validation = \Config\Services::validation();

        // Lakukan Validasi Langsung Dari Data POST
        $validation->setRules([
            'kode' => [
                'rules' => 'required|min_length[3]',
                'errors' => [
                    'required' => 'Kode Matakuliah Harus Diisi!!',
                    'min_length' => 'Kode Terlalu Pendek!!'
                ]
            ]
        ]);

        // Ambil data dari request POST
        $postData = $this->request->getPost();

        // Validasi data POST
        if (!$validation->run($postData)) {
            return redirect()->to(site_url('/matakuliah'))->withInput()->with('errors', $validation->getErrors());
        } 
            
        // Data valid, proses selanjutnya
        $data = [
            'kode' => $postData['kode'],
            'nama' => $postData['nama'],
            'sks' => $postData['sks'],
        ];

        return view('view-data-matakuliah', $data);
    }
}
?>
