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

    public function index() {

        if (session() -> get('id') == NULL) {

            return view('/layout/login');

        } else if (session() -> get('id') > 0) {

            return redirect() -> to('/home/user');

        }

    }

    // ================================================================================================================================ // - Login System

    public function aksi_login() {

        $Schema = new Schema();

        $username = $this -> request -> getPost('username');
        $password = $this -> request -> getPost('password');

        $data = array(
            'username' => $username,
            'password' => md5($password)
        );

        $session = $Schema -> getWhere2('user', $data);

        if ($session > 0) {

            session() -> set('id', $session['id_user']);
            session() -> set('username', $session['username']);
            session() -> set('level', $session['level']);

            return redirect() -> to('/home/user');

        } else {

            return redirect() -> to('/home/');

        }

    }

    public function logout() {

        session() -> destroy();

        return redirect() -> to('/home/');

    }   

    public function user() {

        if (session() -> get('id') == NULL) {

            return redirect() -> to('/home/');

        } else if (session() -> get('id') > 0) {

            $Schema = new Schema();

                // Fetching data

            $on = 'user.level = level.id_level';

            $_fetch['userData'] = $Schema -> visual_table_join2('user', 'level', $on);

            echo view('layout/_heading');
            echo view('pages/data_user', $_fetch);
            echo view('layout/_menu');
            echo view('layout/_footer');

        }

    }

    public function register_user() {

        if (session() -> get('id') == NULL) {

            echo view('register');

        } else if (session() -> get('id') > 0) {

            return redirect() -> to('/home/user');

        }

    }

    public function aksi_register() {

        if (session() -> get('id') == NULL) {

            $Schema = new Schema();

                $username = $this->request->getPost('username');
                $password = $this->request->getPost('password');

            $user = array(
                'username'=> $username,
                'password'=> md5($password),
                'level'=> '2',
            );
            
                $Schema -> insert_data('user', $user);

            $where = array('username' => $username);
            $_fetch = $Schema -> getWhere2('user', $where);

            $_id = $_fetch['id_user'];

                $Schema -> insert_data('petugas', array('user' => $_id));

            return redirect()->to('/home/');

        } else {

            return redirect()->to('/home/');

        }

    }


    public function pelanggan() {

        if (session() -> get('id') == NULL) {

            return redirect() -> to('/home/pelanggan');

        } else if (session() -> get('id') > 0) {

            $Schema = new Schema();

                    // Fetching data

                    // $on = 'user.level = level.id_level';

                    // $_fetch['pemasukanData'] = $Schema -> visual_table_join2('user', 'level', $on);
            $_fetch['pelangganData'] = $Schema -> visual_table('pelanggan');

            echo view('layout/_heading');
            echo view('pages/data_pelanggan', $_fetch);
            echo view('layout/_menu');
            echo view('layout/_footer');

        }
        
    }

    public function tambah_data_pelanggan() {

        if(in_array(session() -> get('level'), [1])) {

            $Schema = new Schema();
            
            echo view('layout/_heading');
            echo view('layout/_menu');
            echo view('forms/tambah_data_pelanggan');
            echo view('layout/_footer');

        } else {

            return redirect()->to('/home/');

        }

    }

    public function aksi_tambah_data_pelanggan() {

        if (in_array(session() -> get('level'), [1])) {

            $Schema = new Schema();
            $nama = $this->request->getPost('nama');
            $alamat = $this->request->getPost('alamat');
            $no_telpon = $this->request->getPost('no_telpon');
            $created_at = $this->request->getPost('created_at');
            
            $pelangganData = array(
                'nama' => $nama,
                'alamat' => $alamat,
                'no_telpon' => $no_telpon,
                'created_at' => date('Y,m-d H:i:s'),
                
                
            );
            $Schema -> insert_data('pelanggan', $pelangganData);
            // print_r($pelangganData);
            return redirect()->to('home/pelanggan');

        } else {

            return redirect()->to('/home/');

        }
        
    }

    public function edit_data_pelanggan($id) {

        if(in_array(session() -> get('level'), [1])) {

            $Schema = new Schema();
            $id_pelanggan = array('id_pelanggan' => $id);
            $_fetch['pelangganData'] = $Schema -> getWhere('pelanggan', $id_pelanggan);

            echo view('layout/_heading');
            echo view('layout/_menu');
            echo view('forms/edit_data_pelanggan', $_fetch);
            echo view('layout/_footer');

        } else {

            return redirect()->to('/home/');

        }

    }

    public function aksi_edit_data_pelanggan() {

        if (in_array(session()->get('level'), [1])) {

            $Schema = new Schema();
            $id_pelanggan = $this->request->getPost('id_pelanggan'); // Ambil nilai id_pelanggan dari form
            $nama = $this->request->getPost('nama');
            $alamat = $this->request->getPost('alamat');
            $no_telpon = $this->request->getPost('no_telpon');
            $created_at = $this->request->getPost('created_at');
    
            // Tentukan kondisi WHERE berdasarkan id_pelanggan
            $where = array('id_pelanggan' => $id_pelanggan);
            $pelangganData = array(
                'nama' => $nama,
                'alamat' => $alamat,
                'no_telpon' => $no_telpon,
                'created_at' => date('Y,m-d H:i:s'),
            );
    
            // Lakukan pembaruan data hanya jika level sesuai
            if (in_array(session()->get('level'), [1])) {
                $Schema->edit_data('pelanggan', $pelangganData, $where);
            }
    
            return redirect()->to('/home/pelanggan');
        } else {
            return redirect()->to('/home/');
        }
    }
    

    public function hapus_data_pelanggan($id)
    {
        if (in_array(session() -> get('level'), [1])) {

            $Model = new Schema();

            $where = array('id_pelanggan'=>$id);
            $Model->delete_data('pelanggan',$where);

            return redirect()->to('/Home/pelanggan/');

        }else{

            return redirect()->to('/Home');
        }

    }

    public function produk() {

        if (session() -> get('id') == NULL) {

            return redirect() -> to('/home/produk');

        } else if (session() -> get('id') > 0) {

            $Schema = new Schema();

                    // Fetching data

                    // $on = 'user.level = level.id_level';

                    // $_fetch['pemasukanData'] = $Schema -> visual_table_join2('user', 'level', $on);
            $_fetch['produkData'] = $Schema -> visual_table('produk');

            echo view('layout/_heading');
            echo view('pages/data_produk', $_fetch);
            echo view('layout/_menu');
            echo view('layout/_footer');

        }
        
    }

    public function tambah_data_produk() {

        if(in_array(session() -> get('level'), [1])) {

            $Schema = new Schema();
            
            echo view('layout/_heading');
            echo view('layout/_menu');
            echo view('forms/tambah_data_produk');
            echo view('layout/_footer');

        } else {

            return redirect()->to('/home/');

        }

    }

    public function aksi_tambah_data_produk() {

        if (in_array(session() -> get('level'), [1])) {

            $Schema = new Schema();
            $nama_produk = $this->request->getPost('nama_produk');
            $harga = $this->request->getPost('harga');
            $stok = $this->request->getPost('stok');
            $created_at = $this->request->getPost('created_at');
            
            $produkData = array(
                'nama_produk' => $nama_produk,
                'harga' => $harga,
                'stok' => $stok,
                'created_at' => date('Y,m-d H:i:s'),
                
                
            );
            $Schema -> insert_data('produk', $produkData);
            // print_r($pelangganData);
            return redirect()->to('home/produk');

        } else {

            return redirect()->to('/home/');

        }
        
    }

    public function edit_data_produk($id) {

        if(in_array(session() -> get('level'), [1])) {

            $Schema = new Schema();
            $id_produk = array('id_produk' => $id);
            $_fetch['produkData'] = $Schema -> getWhere('produk', $id_produk);

            echo view('layout/_heading');
            echo view('layout/_menu');
            echo view('forms/edit_data_produk', $_fetch);
            echo view('layout/_footer');

        } else {

            return redirect()->to('/home/');

        }

    }

    public function aksi_edit_data_produk() {

        if (in_array(session()->get('level'), [1])) {

            $Schema = new Schema();
            $id_produk = $this->request->getPost('id_produk'); // Ambil nilai id_pelanggan dari form
            $nama_produk = $this->request->getPost('nama_produk');
            $harga = $this->request->getPost('harga');
            $stok = $this->request->getPost('stok');
            $created_at = $this->request->getPost('created_at');
    
            // Tentukan kondisi WHERE berdasarkan id_pelanggan
            $where = array('id_produk' => $id_produk);
            $produkData = array(
                'nama_produk' => $nama_produk,
                'harga' => $harga,
                'stok' => $stok,
                'created_at' => date('Y,m-d H:i:s'),
            );
    
            // Lakukan pembaruan data hanya jika level sesuai
            if (in_array(session()->get('level'), [1])) {
                $Schema->edit_data('produk', $produkData, $where);
            }
    
            return redirect()->to('/home/produk');
        } else {
            return redirect()->to('/home/');
        }
    }


    public function hapus_data_produk($id)
    {
        if (in_array(session() -> get('level'), [1])) {

            $Model = new Schema();

            $where = array('id_produk'=>$id);
            $Model->delete_data('produk',$where);

            return redirect()->to('/Home/data_produk/');

        }else{

            return redirect()->to('/Home');
        }

    }

    public function penjualan() {

        if (in_array(session() -> get('level'), [1])) {

            $Schema = new schema();

                $on = 'penjualan.id_pelanggan = pelanggan.id_pelanggan';
                $_fetch['penjualanData'] = $Schema -> visual_table_join2('penjualan', 'pelanggan', $on);
                // $on2 = 'penjualan.id_produk = produk.id_produk';
                // $_fetch['penjualanData'] = $Schema->visual_table_join3('penjualan', 'pelanggan', 'produk', $on, $on2); 
           
            echo view('layout/_heading');
            echo view('layout/_menu');
            echo view('pages/data_penjualan', $_fetch);
            echo view('layout/_footer');

        } else {

            return redirect() -> to('/home/');

        }
    }


    public function tambah_data_penjualan() {

        if(in_array(session() -> get('level'), [1])) {

            $Schema = new Schema();

            $_fetch['pelangganData'] = $Schema -> visual_table('pelanggan');
            $_fetch['produkData'] = $Schema -> visual_table('produk');
            
            echo view('layout/_heading');
            echo view('layout/_menu');
            echo view('forms/tambah_data_penjualan', $_fetch);
            echo view('layout/_footer');

        } else {

            return redirect()->to('/home/');

        }

    }

    public function aksi_tambah_data_penjualan() {

        if (in_array(session() -> get('level'), [1])) {

            $Schema = new Schema();
            $nama = $this->request->getPost('nama');
            $nama_produk = $this->request->getPost('nama_produk');
            $harga = $this->request->getPost('harga');
            $quantity = $this->request->getPost('quantity');
            $subtotal = $this->request->getPost('subtotal');
            $tanggal_penjualan = $this->request->getPost('tanggal_penjualan');
            $bayar = $this->request->getPost('bayar');
            $kembalian = $this->request->getPost('kembalian');


            
            $penjualanData = array(
                'nama' => $nama,
                'nama_produk' => $nama_produk,
                'harga' => $harga, 
                'quantity' => $quantity, 
                'subtotal' => $subtotal,                
                'tanggal_penjualan' => date('Y,m-d H:i:s'),
                'bayar' => $bayar, 
                'kembalian' => $kembalian,                
               

                
            );
            $Schema -> insert_data('penjualan', $penjualanData);
            // print_r($pelangganData);
            return redirect()->to('home/penjualan');

        } else {

            return redirect()->to('/home/');

        }
        
    }

    public function edit_data_penjualan($id) {

        if(in_array(session() -> get('level'), [1])) {

            $Schema = new Schema();
            $id_penjualan = array('id_penjualan' => $id);
            $_fetch['penjualanData'] = $Schema -> getWhere('penjualan', $id_penjualan);

            echo view('layout/_heading');
            echo view('layout/_menu');
            echo view('forms/edit_data_penjualan', $_fetch);
            echo view('layout/_footer');

        } else {

            return redirect()->to('/home/');

        }

    }

    public function aksi_edit_data_penjualan() {

        if (in_array(session() -> get('level'), [1])) {

            $Schema = new Schema();
            $nama_produk = $this->request->getPost('nama_produk');
            $harga = $this->request->getPost('harga');
            $tanggal_penjualan = $this->request->getPost('tanggal_penjualan');

            $where = array('id_pelanggan' => $id_pelanggan);
            $pelangganData = array(
                'nama_produk' => $nama_produk,
                'harga' => $harga,                
                'tanggal_penjualan' => $tanggal_penjualan,

            );

            if (in_array(session() -> get('level'), [1])) {

                $Schema -> edit_data('pelanggan', $pelangganData, $where);

            }

            return redirect()->to('/home/pelanggan');

        } else {

            return redirect()->to('/home/');

        }

    }

    public function hapus_data_penjualan($id)
    {
        if (in_array(session() -> get('level'), [1])) {

            $Model = new Schema();

            $where = array('id_pelanggan'=>$id);
            $Model->delete_data('pelanggan',$where);

            return redirect()->to('/Home/pelanggan/');

        }else{

            return redirect()->to('/Home');
        }

    }

    
}


