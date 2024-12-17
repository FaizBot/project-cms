<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('User_Model');
        if ($this->session->userdata('level') == NULL){
			redirect('admin/auth');
		}
		if ($this->session->userdata('level') == 'user'){
			redirect('home');
		}
	}
	function index()
	{
		$this->db->select('*')->from('user');
		$this->db->order_by('nama','ASC');
		$user = $this->db->get()->result_array();
		$data = array('user' => $user);
		$this->template->load('admin/kerangka_admin', 'admin/user', $data);
	}
	function simpan()
	{
		$username = $this->input->post('username');
		$this->db->from('user'); 
		$this->db->where('username', $username);
		$cek = $this->db->get()->result_array();
		if($cek!=NULL){
			$this->session->set_flashdata('error', 'Username telah digunakan. !!');
        	redirect(site_url('admin/user'));
        }else{
			$this->session->set_flashdata('success', 'User telah ditambahkan !!');
			$this->User_Model->simpan();
			redirect('admin/user');
		} 
	}
	public function update(){
		$this->User_Model->update();
        $this->session->set_flashdata('success', 'User telah diperbarui !!');
        redirect(site_url('admin/user'));
    }
	public function hapus($id) {
		$this->db->where('id_user', $id);
		$this->db->delete('user');
		
		$this->session->set_flashdata('success', 'User telah dihapus !!');
		
		redirect('admin/user');
	}

}