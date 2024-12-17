<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
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
	public function index()
	{
		// Ambil data penjualan dari tabel transaction
		$this->db->select('tanggal, SUM(sub_total) as total_penjualan');
		$this->db->from('transaction');
		$this->db->group_by('tanggal');
		$this->db->order_by('tanggal', 'ASC');
		$data['sales'] = $this->db->get()->result_array();

		$this->db->select('*');
		$this->db->from('product');
		$data['product'] = $this->db->get()->result_array();

		$this->db->select('tanggal, SUM(sub_total) as total_penjualan');
		$this->db->from('transaction');
		$this->db->where('DATE(tanggal)', date('Y-m-d')); // Tambahkan kondisi tanggal hari ini
		$this->db->group_by('tanggal');
		$this->db->order_by('tanggal', 'ASC');
		$data['penjualan'] = $this->db->get()->result_array();

		$this->db->select('*')->from('user');
		$this->db->order_by('nama','ASC');
		$data['user'] = $this->db->get()->result_array();
	
		// Tampilkan di view
		$this->template->load('admin/kerangka_admin', 'admin/home', $data);
	}
}