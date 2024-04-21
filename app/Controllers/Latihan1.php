<?php 
namespace App\Controllers;
use App\Models\Model_latihan1;

class Latihan1 extends BaseController
{
    public function index()
    {
        echo "Selamat Datang..selamat belajar web programming";
        //$this->load->view('view-latihan);
    }

    public function penjumlahan($n1, $n2)
    {
        $model = new Model_latihan1(); // Menginisialisasi model

        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $model->jumlah($n1, $n2);

        return view("view-latihan", $data);
    }

} ?>