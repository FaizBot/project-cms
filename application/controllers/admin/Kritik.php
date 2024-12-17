<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kritik extends CI_Controller {
	public function __construct()
	{
		parent:: __construct();
		if ($this->session->userdata('level') == NULL){
			redirect('admin/auth');
		}
		if ($this->session->userdata('level') == 'user'){
			redirect('home');
		}
	}
	public function index()
	{
		$this->db->select('*');
		$this->db->from('kritik');
		$this->db->join('user','user.id_user = kritik.id_user');
		$kritik = $this->db->get()->result_array();

		$data = array(
			'kritik'	=> $kritik,
		);
		$this->template->load('admin/kerangka_admin', 'admin/kritik', $data);
	}
}