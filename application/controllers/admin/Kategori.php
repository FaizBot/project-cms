<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('Kategori_Model');
        if ($this->session->userdata('level') == NULL){
			redirect('admin/auth');
		}
		if ($this->session->userdata('level') == 'user'){
			redirect('home');
		}
	}
	function index()
	{
		$this->db->select('*')->from('kategori');
		$this->db->order_by('nama_kategori','ASC');
		$kategori = $this->db->get()->result_array();
		$data = array('kategori' => $kategori);
		$this->template->load('admin/kerangka_admin', 'admin/kategori', $data);
	}
	function simpan()
	{
		$nama_kategori = $this->input->post('nama_kategori');
		$this->db->from('kategori'); 
		$this->db->where('nama_kategori', $nama_kategori);
		$cek = $this->db->get()->result_array();
		if($cek!=NULL){
			$this->session->set_flashdata('error', 'Kategori telah tersedia !!');
        redirect(site_url('admin/kategori'));
        }else{
			$this->session->set_flashdata('success', 'Kategori telah ditambah !!');
			$this->Kategori_Model->simpan();
		redirect('admin/kategori'); 
		}
	}
	public function update(){
		$this->Kategori_Model->update();
		$this->session->set_flashdata('success', 'Kategori telah diperbarui !!');
        redirect(site_url('admin/kategori'));
    }
	public function hapus($id){
        $where = array('id_kategori' => $id);
        $this->db->delete('kategori',$where);
		$this->session->set_flashdata('success', 'Kategori telah dihapus !!');
        redirect(site_url('admin/kategori'));
    }

}