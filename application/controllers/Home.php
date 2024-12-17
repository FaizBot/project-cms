<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$this->load->model('Product_Model');
		$product = $this->Product_Model->get_all_product();
		
		$id_user = $this->session->userdata('id_user');
        $this->db->select('*')->from('user');
        $this->db->where('id_user', $id_user);
		$user = $this->db->get()->result_array();

		$this->db->select('*');
		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();
		
		$this->db->select('*');
		$this->db->from('konfigurasi');
		$konfigurasi = $this->db->get()->result_array();

		$this->db->select('*')->from('cart');
		$this->db->where('id_user', $this->session->userdata('id_user'));
        $this->db->join('product', 'product.id_product = cart.id_product');
        $this->db->join('picproduct', 'picproduct.id_product = product.id_product');
        $this->db->where('picproduct.is_primer', 1);
		$cart = $this->db->get()->result_array();

		$data = array(
			'product'		=> $product,
			'user' 			=> $user,
			'kategori' 		=> $kategori,
			'konfigurasi' 	=> $konfigurasi,
			'cart' 		    => $cart,
		);
		$this->template->load('user/kerangka_user', 'user/home', $data);
	}

	public function ajax_search_html()
	{
		// Pastikan permintaan dilakukan melalui AJAX
		if ($this->input->is_ajax_request()) {
			$input = json_decode($this->input->raw_input_stream, true);

			$category = $input['category'] === '0' ? null : $input['category'];
			$query = $input['query'];

			$results = $this->Product_Model->search_products($category, $query);

			$this->db->select('*')->from('kategori');
			$kategori = $this->db->get()->result_array();
			
			$data = array(
				'product'     => $results,
				'kategori' 	  => $kategori,
			);
			$html = $this->load->view('user/hasil', $data, true);

			echo $html;
		} else {
			show_404();
		}
			
	}
}