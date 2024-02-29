<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Schema;
use Dompdf\Dompdf;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Fill;

use TCPDF;

class Home extends BaseController{

    public function getHargaProduk()
    {
        // Ambil nama produk dari permintaan POST
        $namaProduk = $this->request->getPost('nama_produk');

        // Lakukan query ke database untuk mendapatkan harga produk berdasarkan nama produk
        // Misalnya menggunakan model ProdukModel, Anda akan melakukan sesuatu seperti:
        // $hargaProduk = $this->produkModel->getHargaByNamaProduk($namaProduk);

        // Simulasikan data harga produk (gantilah dengan data sesuai implementasi Anda)
        $hargaProduk = 10000; // Contoh harga produk

        // Kirim respons JSON berisi harga produk
        return $this->response->setJSON(['harga' => $hargaProduk]);
    }
}