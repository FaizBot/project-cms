<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kurir extends CI_Controller {
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('Kurir_Model');
        if ($this->session->userdata('level') == NULL){
			redirect('admin/auth');
		}
		if ($this->session->userdata('level') == 'user'){
			redirect('home');
		}
	}
	function index()
	{
		$this->db->select('*')->from('kurir');
		$this->db->order_by('nama','ASC');
		$kurir = $this->db->get()->result_array();
		$data = array('kurir' => $kurir);
		$this->template->load('admin/kerangka_admin', 'admin/kurir', $data);
	}
	function simpan()
	{
		$nama = $this->input->post('nama');
		$this->db->from('kurir'); 
		$this->db->where('nama', $nama);
		$cek = $this->db->get()->result_array();
		if($cek!=NULL){
			$this->session->set_flashdata('error', 'Kurir telah tersedia !!');
            redirect(site_url('admin/kurir'));
        }else{
			$this->session->set_flashdata('success', 'Kurir telah ditambah !!');
			$this->Kurir_Model->simpan();
		redirect('admin/kurir'); 
		}
	}
	public function update(){
		$this->Kurir_Model->update();
		$this->session->set_flashdata('success', 'Kurir telah diperbarui !!');
        redirect(site_url('admin/kurir'));
    }
	public function hapus($id){
        $where = array('id_kurir' => $id);
        $this->db->delete('kurir',$where);
		$this->session->set_flashdata('success', 'Kurir telah dihapus !!');
        redirect(site_url('admin/kurir'));
    }

}