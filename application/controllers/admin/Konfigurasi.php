<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfigurasi extends CI_Controller {
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('Konfigurasi_Model');
        if ($this->session->userdata('level') == NULL){
			redirect('admin/auth');
		}
		if ($this->session->userdata('level') == 'user'){
			redirect('home');
		}
	}
	function index()
	{
		$this->db->select('*')->from('konfigurasi');
		$konfigurasi = $this->db->get()->result_array();
		$data = array('konfigurasi' => $konfigurasi);
		$this->template->load('admin/kerangka_admin', 'admin/konfigurasi', $data);
	}
	public function tambah()
	{
		$this->template->load('admin/kerangka_admin', 'admin/konfigurasi');
	}
	function simpan()
	{
		$this->Konfigurasi_Model->simpan();
		$this->session->set_flashdata('success', 'Konfigurasi telah ditambah !!');
		redirect('admin/konfigurasi'); 
	}
	public function update(){
		$this->Konfigurasi_Model->update();
		$this->session->set_flashdata('success', 'Konfigurasi telah diperbarui !!');
        redirect(site_url('admin/konfigurasi'));
    }
	public function hapus($id){
        $where = array('id_konfigurasi' => $id);
        $this->db->delete('konfigurasi',$where);
		$this->session->set_flashdata('success', 'Konfigurasi telah dihapus !!');
        redirect(site_url('admin/kategori'));
    }
}