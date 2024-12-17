<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('Product_Model');
        if ($this->session->userdata('level') == NULL){
			redirect('admin/auth');
		}
        if ($this->session->userdata('level') == 'user'){
			redirect('home');
		}
	}
	function index()
	{
		$this->db->select('*')->from('product');
		$this->db->order_by('nama','ASC');
		$product = $this->db->get()->result_array();

		$this->db->select('*')->from('kategori');
		$this->db->order_by('nama_kategori','ASC');
		$kategori = $this->db->get()->result_array();
		$data = array(
			'product' => $product,
			'kategori' => $kategori,
		);
		$this->template->load('admin/kerangka_admin', 'admin/product', $data);
	}
	function detail($id)
	{
		$product = $this->Product_Model->get_product_by_id($id);

		$this->db->select('*');
        $this->db->from('picproduct');
		$this->db->where('id_product', $id);
        $this->db->where('picproduct.is_primer', 1);
        $picproduct = $this->db->get()->result_array();

		$data = array(
			'product'		=> $product,
			'picproduct'	=> $picproduct,
		);
		$this->template->load('admin/kerangka_admin', 'admin/detail', $data);
	}
	function simpan()
	{
		$this->session->set_flashdata('success', 'Product telah ditambahkan !!');
		$this->Product_Model->simpan();
		redirect('admin/product');
	}
	public function update(){
		$this->Product_Model->update();
        $this->session->set_flashdata('success', 'Product telah diperbarui !!');
        redirect(site_url('admin/product'));
    }
	public function hapus($id) {
		$this->db->where('id_product', $id);
		$this->db->delete('product');
		$this->session->set_flashdata('success', 'Product telah dihapus !!');
		redirect('admin/product');
	}
}