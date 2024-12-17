<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('Product_Model');
	}
	function detail($id)
	{
		$product = $this->Product_Model->get_product_by_id($id);

		$picproduct = $this->Product_Model->get_picture_product_by_id($id);

		$ktrprd = $this->Product_Model->get_all_product_kategori($id);

		$this->db->select('*');
		$this->db->from('user');
		$user = $this->db->get()->result_array();

		$this->db->select('*');
		$this->db->from('konfigurasi');
		$konfigurasi = $this->db->get()->result_array();

		$this->db->select('*')->from('cart');
		$this->db->where('id_user', $this->session->userdata('id_user'));
        $this->db->join('product', 'product.id_product = cart.id_product');
        $this->db->join('picproduct', 'picproduct.id_product = product.id_product');
        $this->db->where('picproduct.is_primer', 1);
		$cart = $this->db->get()->result_array();

		$this->db->select('*')->from('kategori');
		$kategori = $this->db->get()->result_array();
		$data = array(
			'product' 		=> $product,
			'picproduct' 	=> $picproduct,
			'ktrprd' 	    => $ktrprd,
			'user' 			=> $user,
			'konfigurasi' 	=> $konfigurasi,
			'kategori' 		=> $kategori,
			'cart' 		    => $cart,
		);
		$this->template->load('user/kerangka2', 'user/product', $data);
    }
}
