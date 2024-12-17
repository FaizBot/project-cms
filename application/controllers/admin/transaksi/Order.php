<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Transaksi_Model');
        if ($this->session->userdata('level') == NULL){
			redirect('admin/auth');
		}
		if ($this->session->userdata('level') == 'user'){
			redirect('home');
		}
    }

    // Menampilkan semua daftar pesanan
    public function index()
    {
        $title = "Pesanan"; // Judul halaman

        $this->db->select('*');
        $this->db->from('kurir');
        $kurir = $this->db->get()->result_array();
    
        $transaksi = $this->Transaksi_Model->get_pesanan(); // Ambil data pesanan dari model
        
        // Ambil data produk berdasarkan transaksi
        // Menggunakan id_transaction untuk memfilter produk yang terkait
        $product = [];
        foreach ($transaksi as $t) {
            $this->db->select('*');
            $this->db->from('transaction');
            $this->db->join('detailtransaction', 'detailtransaction.id_transaction = transaction.id_transaction'); // Join dengan detailtransaction
            $this->db->join('product', 'product.id_product = detailtransaction.id_product'); // Join dengan tabel product
            $this->db->where('transaction.id_transaction', $t['id_transaction']); // Filter berdasarkan id_transaction
            $productsForTransaction = $this->db->get()->result_array();
            
            // Menambahkan produk berdasarkan transaksi
            $product[$t['id_transaction']] = $productsForTransaction;
        }
    
        $data = array(
            'title' => $title,
            'transaksi' => $transaksi,
            'product' => $product, // Mengirimkan produk berdasarkan id_transaction
        );
    
        $this->template->load('admin/kerangka_admin', 'admin/transaksi/order', $data);
    }

    // Menampilkan daftar pesanan masuk
    public function masuk()
    {
        $title = "Pesanan Masuk"; // Judul halaman
    
        $transaksi = $this->Transaksi_Model->get_pesanan_masuk(); // Ambil data pesanan masuk dari model
    
        $transaction = $this->Transaksi_Model->get_pesanan(); // Ambil data pesanan dari model
    
        // Ambil data produk berdasarkan transaksi
        // Menggunakan id_transaction untuk memfilter produk yang terkait
        $product = [];
        foreach ($transaction as $t) {
            $this->db->select('*');
            $this->db->from('transaction');
            $this->db->join('detailtransaction', 'detailtransaction.id_transaction = transaction.id_transaction'); // Join dengan detailtransaction
            $this->db->join('product', 'product.id_product = detailtransaction.id_product'); // Join dengan tabel product
            $this->db->where('transaction.id_transaction', $t['id_transaction']); // Filter berdasarkan id_transaction
            $productsForTransaction = $this->db->get()->result_array();
            
            // Menambahkan produk berdasarkan transaksi
            $product[$t['id_transaction']] = $productsForTransaction;
        }
    
        $data = array(
            'title' => $title,
            'transaksi' => $transaksi,
            'transaction' => $transaction,
            'product' => $product, // Mengirimkan produk berdasarkan id_transaction
        );
    
        $this->template->load('admin/kerangka_admin', 'admin/transaksi/masuk', $data);
    }
    

    // Metode untuk mengubah status pesanan
    public function ubah_konfirmasi($id)
    {
        // Update status to 'Pesanan Dikonfirmasi'
        $status = 'Pesanan Dikonfirmasi'; 
    
        // Call model to update the status in the database
        $update = $this->Transaksi_Model->update_status($id, $status); 
    
        if ($update) {
            $this->session->set_flashdata('success', 'Status pesanan berhasil diubah ke Pesanan Dikonfirmasi');
        } else {
            $this->session->set_flashdata('error', 'Gagal mengubah status pesanan');
        }
        redirect('admin/transaksi/order/masuk');
    }

    // Menampilkan daftar pesanan konfirmasi
    public function konfirmasi()
    {
        $title = "Pesanan Dikonfirmasi"; // Judul halaman
    
        $transaksi = $this->Transaksi_Model->get_pesanan_konfirmasi(); // Ambil data pesanan konfirmasi dari model
    
        $transaction = $this->Transaksi_Model->get_pesanan(); // Ambil data pesanan dari model
    
        // Ambil data produk berdasarkan transaksi
        // Menggunakan id_transaction untuk memfilter produk yang terkait
        $product = [];
        foreach ($transaction as $t) {
            $this->db->select('*');
            $this->db->from('transaction');
            $this->db->join('detailtransaction', 'detailtransaction.id_transaction = transaction.id_transaction'); // Join dengan detailtransaction
            $this->db->join('product', 'product.id_product = detailtransaction.id_product'); // Join dengan tabel product
            $this->db->where('transaction.id_transaction', $t['id_transaction']); // Filter berdasarkan id_transaction
            $productsForTransaction = $this->db->get()->result_array();
            
            // Menambahkan produk berdasarkan transaksi
            $product[$t['id_transaction']] = $productsForTransaction;
        }
    
        $data = array(
            'title' => $title,
            'transaksi' => $transaksi,
            'transaction' => $transaction,
            'product' => $product, // Mengirimkan produk berdasarkan id_transaction
        );
    
        $this->template->load('admin/kerangka_admin', 'admin/transaksi/konfirmasi', $data);
    }
    

    // Metode untuk mengubah status pesanan
    public function ubah_dikemas($id)
    {
        // Update status to 'Pesanan Dikemas'
        $status = 'Pesanan Dikemas'; 
    
        // Call model to update the status in the database
        $update = $this->Transaksi_Model->update_status($id, $status); 
    
        if ($update) {
            $this->session->set_flashdata('success', 'Status pesanan berhasil diubah ke Pesanan Dikemas');
        } else {
            $this->session->set_flashdata('error', 'Gagal mengubah status pesanan');
        }
        redirect('admin/transaksi/order/konfirmasi');
    }

    // Menampilkan daftar pesanan dikemas
    public function dikemas()
    {
        $title = "Pesanan Dikemas"; // Judul halaman
    
        $this->db->select('*');
        $this->db->from('kurir');
        $kurir = $this->db->get()->result_array();

        $transaksi = $this->Transaksi_Model->get_pesanan_dikemas(); // Ambil data pesanan dikemas dari model
    
        $transaction = $this->Transaksi_Model->get_pesanan(); // Ambil data pesanan dari model
    
        // Ambil data produk berdasarkan transaksi
        // Menggunakan id_transaction untuk memfilter produk yang terkait
        $product = [];
        foreach ($transaction as $t) {
            $this->db->select('*');
            $this->db->from('transaction');
            $this->db->join('detailtransaction', 'detailtransaction.id_transaction = transaction.id_transaction'); // Join dengan detailtransaction
            $this->db->join('product', 'product.id_product = detailtransaction.id_product'); // Join dengan tabel product
            $this->db->where('transaction.id_transaction', $t['id_transaction']); // Filter berdasarkan id_transaction
            $productsForTransaction = $this->db->get()->result_array();
            
            // Menambahkan produk berdasarkan transaksi
            $product[$t['id_transaction']] = $productsForTransaction;
        }
    
        $data = array(
            'title' => $title,
            'transaksi' => $transaksi,
            'transaction' => $transaction,
            'product' => $product, // Mengirimkan produk berdasarkan id_transaction
            'kurir'   => $kurir,
        );
    
        $this->template->load('admin/kerangka_admin', 'admin/transaksi/dikemas', $data);
    }
    

    // Metode untuk mengubah status pesanan
    public function ubah_dikirim($id)
    {
        // Update status to 'Pesanan Dikirim'
        $status = 'Pesanan Dikirim'; 
        
        $no_resi = $this->input->post('no_resi');
        // Call model to update the status in the database
        $update = $this->Transaksi_Model->update_dikirim($id, $status, $kurir, $no_resi); 
    
        if ($update) {
            $this->session->set_flashdata('success', 'Status pesanan berhasil diubah ke Pesanan Dikirim');
        } else {
            $this->session->set_flashdata('error', 'Gagal mengubah status pesanan');
        }
        redirect('admin/transaksi/order/dikemas');
    }
    
    // Menampilkan daftar pesanan dikirim
    public function dikirim()
    {
        $title = "Pesanan Dikirim"; // Judul halaman
    
        $this->db->select('*');
        $this->db->from('kurir');
        $kurir = $this->db->get()->result_array();

        $transaksi = $this->Transaksi_Model->get_pesanan_dikirim(); // Ambil data pesanan dikirim dari model
    
        $transaction = $this->Transaksi_Model->get_pesanan(); // Ambil data pesanan dari model
    
        // Ambil data produk berdasarkan transaksi
        // Menggunakan id_transaction untuk memfilter produk yang terkait
        $product = [];
        foreach ($transaction as $t) {
            $this->db->select('*');
            $this->db->from('transaction');
            $this->db->join('detailtransaction', 'detailtransaction.id_transaction = transaction.id_transaction'); // Join dengan detailtransaction
            $this->db->join('product', 'product.id_product = detailtransaction.id_product'); // Join dengan tabel product
            $this->db->where('transaction.id_transaction', $t['id_transaction']); // Filter berdasarkan id_transaction
            $productsForTransaction = $this->db->get()->result_array();
            
            // Menambahkan produk berdasarkan transaksi
            $product[$t['id_transaction']] = $productsForTransaction;
        }
    
        $data = array(
            'title' => $title,
            'transaksi' => $transaksi,
            'transaction' => $transaction,
            'product' => $product, // Mengirimkan produk berdasarkan id_transaction
            'kurir'   => $kurir,
        );
    
        $this->template->load('admin/kerangka_admin', 'admin/transaksi/dikirim', $data);
    }
    

    // Metode untuk mengubah status pesanan
    public function ubah_menuju_alamat($id)
    {
        // Update status to 'Pesanan Dalam Perjalanan'
        $status = 'Pesanan Dalam Perjalanan'; 
    
        // Call model to update the status in the database
        $update = $this->Transaksi_Model->update_status($id, $status);
        if ($update) {
            $this->session->set_flashdata('success', 'Status pesanan berhasil diubah ke Pesanan Dalam Perjalanan');
            redirect('admin/transaksi/order/menuju_alamat');
        } else {
            $this->session->set_flashdata('error', 'Gagal mengubah status pesanan');
            redirect('admin/transaksi/order/dikirim');
        }
    }

    // Menampilkan daftar pesanan menuju_alamat
    public function menuju_alamat()
    {
        $title = "Pesanan Dalam Perjalanan"; // Judul halaman
    
        $this->db->select('*');
        $this->db->from('kurir');
        $kurir = $this->db->get()->result_array();

        $transaksi = $this->Transaksi_Model->get_pesanan_menuju_alamat(); // Ambil data pesanan Dalam Perjalanan dari model
    
        $transaction = $this->Transaksi_Model->get_pesanan(); // Ambil data pesanan dari model
    
        // Ambil data produk berdasarkan transaksi
        // Menggunakan id_transaction untuk memfilter produk yang terkait
        $product = [];
        foreach ($transaction as $t) {
            $this->db->select('*');
            $this->db->from('transaction');
            $this->db->join('detailtransaction', 'detailtransaction.id_transaction = transaction.id_transaction'); // Join dengan detailtransaction
            $this->db->join('product', 'product.id_product = detailtransaction.id_product'); // Join dengan tabel product
            $this->db->where('transaction.id_transaction', $t['id_transaction']); // Filter berdasarkan id_transaction
            $productsForTransaction = $this->db->get()->result_array();
            
            // Menambahkan produk berdasarkan transaksi
            $product[$t['id_transaction']] = $productsForTransaction;
        }
    
        $data = array(
            'title' => $title,
            'transaksi' => $transaksi,
            'transaction' => $transaction,
            'product' => $product, // Mengirimkan produk berdasarkan id_transaction
            'kurir'   => $kurir,
        );
    
        $this->template->load('admin/kerangka_admin', 'admin/transaksi/menuju_alamat', $data);
    }
    

    // Metode untuk mengubah status pesanan
    public function ubah_selesai($id)
    {
        // Update status to 'Pesanan Selesai'
        $status = 'Pesanan Selesai'; 
    
        // Call model to update the status in the database
        $update = $this->Transaksi_Model->update_status($id, $status); 
    
        if ($update) {
            $this->session->set_flashdata('success', 'Status pesanan berhasil diubah ke Pesanan Selesai');
        } else {
            $this->session->set_flashdata('error', 'Gagal mengubah status pesanan');
        }
        redirect('admin/transaksi/order/menuju_alamat');
    }

    // Menampilkan daftar pesanan selesai
    public function selesai()
    {
        $title = "Pesanan Selesai"; // Judul halaman
    
        $this->db->select('*');
        $this->db->from('kurir');
        $kurir = $this->db->get()->result_array();

        $transaksi = $this->Transaksi_Model->get_pesanan_selesai(); // Ambil data pesanan selesai dari model
    
        $transaction = $this->Transaksi_Model->get_pesanan(); // Ambil data pesanan dari model
    
        // Ambil data produk berdasarkan transaksi
        // Menggunakan id_transaction untuk memfilter produk yang terkait
        $product = [];
        foreach ($transaction as $t) {
            $this->db->select('*');
            $this->db->from('transaction');
            $this->db->join('detailtransaction', 'detailtransaction.id_transaction = transaction.id_transaction'); // Join dengan detailtransaction
            $this->db->join('product', 'product.id_product = detailtransaction.id_product'); // Join dengan tabel product
            $this->db->where('transaction.id_transaction', $t['id_transaction']); // Filter berdasarkan id_transaction
            $productsForTransaction = $this->db->get()->result_array();
            
            // Menambahkan produk berdasarkan transaksi
            $product[$t['id_transaction']] = $productsForTransaction;
        }
    
        $data = array(
            'title' => $title,
            'transaksi' => $transaksi,
            'transaction' => $transaction,
            'product' => $product, // Mengirimkan produk berdasarkan id_transaction
            'kurir'   => $kurir,
        );
    
        $this->template->load('admin/kerangka_admin', 'admin/transaksi/selesai', $data);
    }

    // Metode untuk menghapus status pesanan
    public function hapus($id)
    {
        // Batasi status to 'Pesanan Masuk'
        $this->db->from('transaction');
        $this->db->where('id_transaction', $id);
        $this->db->select('status');
        $status = $this->db->get()->result_array();
        var_dump($status); die;
    
        // Call model to update the status in the database
        $hapus = $this->Transaksi_Model->delete($id, $status); 
    
        if ($hapus) {
            $this->session->set_flashdata('success', 'Berhasil mengapus pesanan');
        } else {
            $this->session->set_flashdata('error', 'Gagal menghapus pesanan');
        }
        redirect('admin/transaksi/order/masuk');
    }
}