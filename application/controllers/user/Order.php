<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('Kategori_Model');
		$this->load->model('Product_Model');
	}
	public function index($id)
	{
		$product = $this->Product_Model->get_all_product();

		$id_user = $this->session->userdata('id_user');
        $this->db->select('*')->from('user');
        $this->db->where('id_user', $id_user);
		$user = $this->db->get()->result_array();
		
		$this->db->select('*')->from('kategori');
		$kategori = $this->db->get()->result_array();

        $this->db->select('*');
        $this->db->from('transaction');
        $this->db->where('id_user', $id);
        $this->db->join('detailtransaction', 'detailtransaction.id_transaction = transaction.id_transaction');
        $this->db->join('product', 'product.id_product = detailtransaction.id_product');
		$this->db->join('picproduct', 'picproduct.id_product = product.id_product');
        $this->db->where('picproduct.is_primer', 1);
        $order = $this->db->get()->result_array();
		
		$data = array(
			'product'     => $product,
			'user'	      => $user,
			'kategori' 	  => $kategori,
			'order' 	  => $order,
		);
		$this->template->load('user/kerangka2', 'user/order', $data);
	}

}