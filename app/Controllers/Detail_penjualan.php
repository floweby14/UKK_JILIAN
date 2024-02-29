<?php

namespace App\Controllers;
use App\Models\M_detail_penjualan;
use Dompdf\Dompdf;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class detail_penjualan extends BaseController
{

    public function index($id)
    {
        if (session()->get('level') == 1 || session()->get('level') == 2) {
            $model = new M_detail_penjualan();

            $on='detailpenjualan.PenjualanID = penjualan.PenjualanID';
            $on2='detailpenjualan.ProdukID = produk.ProdukID';
            $data['jojo'] = $model->join3id('detailpenjualan', 'penjualan', 'produk', $on, $on2, $id);
            $data['id_penjualan'] = $id;

            $data['title'] = 'Detail Penjualan';
            $data['desc'] = 'Anda dapat melihat Detail Penjualan di Menu ini.';

            echo view('layout/_heading', $data);
           
            echo view('layout/_menu');
            echo view('detail_penjualan/view', $data);
            echo view('layout/_footer');
        } else {
            return redirect()->to('/');
        }
    }
    
}