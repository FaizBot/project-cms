<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('User_Model');
		$this->load->model('Product_Model');
	}
	function index()
	{
		// Ambil data user berdasarkan ID
        $id_user = $this->session->userdata('id_user');
        $this->db->select('*')->from('user');
        $this->db->where('id_user', $id_user);
		$user = $this->db->get()->result_array();

        $product = $this->Product_Model->get_all_product();
		
		$this->db->select('*')->from('kategori');
		$kategori = $this->db->get()->result_array();

		$this->db->select('*')->from('konfigurasi');
		$konfigurasi = $this->db->get()->result_array();
		
		$this->db->select('*')->from('cart');
		$this->db->where('id_user', $this->session->userdata('id_user'));
        $this->db->join('product', 'product.id_product = cart.id_product');
        $this->db->join('picproduct', 'picproduct.id_product = product.id_product');
        $this->db->where('picproduct.is_primer', 1);
		$cart = $this->db->get()->result_array();

        
        $data = array(
            'product'     => $product,
			'user'	      => $user,
			'kategori' 	  => $kategori,
			'konfigurasi' => $konfigurasi,
			'cart' 		  => $cart
        );
        
        // Load view edit user
        $this->template->load('user/kerangka2','user/account', $data);
	}
	function tambah()
	{
		// Ambil data user berdasarkan ID
        $id_user = $this->session->userdata('id_user');
        $this->db->select('*')->from('user');
        $this->db->where('id_user', $id_user);
		$user = $this->db->get()->result_array();

        $product = $this->Product_Model->get_all_product();
		
		$this->db->select('*')->from('kategori');
		$kategori = $this->db->get()->result_array();

		$this->db->select('*')->from('konfigurasi');
		$konfigurasi = $this->db->get()->result_array();
		
		$this->db->select('*')->from('cart');
		$this->db->where('id_user', $this->session->userdata('id_user'));
        $this->db->join('product', 'product.id_product = cart.id_product');
        $this->db->join('picproduct', 'picproduct.id_product = product.id_product');
        $this->db->where('picproduct.is_primer', 1);
		$cart = $this->db->get()->result_array();

        
        $data = array(
            'product'     => $product,
			'user'	      => $user,
			'kategori' 	  => $kategori,
			'konfigurasi' => $konfigurasi,
			'cart' 		  => $cart
        );
        
        // Load view edit user
        $this->template->load('user/kerangka2','user/edit_account', $data);
	}
	function simpan()
	{
		$username = $this->input->post('username');
		$this->db->from('user'); 
		$this->db->where('username', $username);
		$cek = $this->db->get()->result_array();
		if($cek!=NULL){
			$this->session->set_flashdata('error', 'Username telah digunakan. !!');
            redirect(site_url('admin/auth/tambah'));
        }else{
			$this->session->set_flashdata('success', 'User telah ditambahkan, silahkan login !!');
			$this->User_Model->simpanusr();
			redirect('admin/auth/tambah');
		} 
	}
    public function update()
    {
        $id_user = $this->input->post('id_user');
        $data = [
            'username' => $this->input->post('username'),
            'alamat'   => $this->input->post('alamat'),
            'no_hp'    => $this->input->post('no_hp'),
            'email'    => $this->input->post('email'),
            'level'    => 'user',
        ];

        // Cek apakah password diisi
        $password = $this->input->post('password');
        if (!empty($password)) {
            $data['password'] = password_hash($password, PASSWORD_DEFAULT);
        }

        // Update user
        $this->User_Model->update_user($data);

        // Redirect atau tampilkan pesan
        $this->session->set_flashdata('success', 'Data pengguna berhasil diperbarui.');
        redirect('user/user/index/' . $id_user);
    }
}