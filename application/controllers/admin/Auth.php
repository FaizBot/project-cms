<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('User_Model');
	}
	public function index()
	{
		$this->load->view('login');
	}
	
	public function tambah()
	{
		$this->load->view('register');
	}

	public function login()
	{
		$username  	= $this->input->post('username');
		$password  = md5($this->input->post('password'));
		$this->db->from('user')->where('username', $username);
		$user = $this->db->get()->row();
		if ($user == NULL){
			$this->session->set_flashdata('error', 'Username tidak ada !!');
			redirect('admin/auth');
		} else if($user->password==$password) {
			$data = array(
				'nama'	   => $user->nama,
				'username' => $user->username,
				'alamat'   => $user->alamat,
				'kota'     => $user->kota,
				'provinsi' => $user->provinsi,
				'kode_pos' => $user->kode_pos,
				'no_hp'    => $user->no_hp,
				'email'    => $user->email,
				'level'    => $user->level,
				'id_user'  => $user->id_user,
			);
			$this->session->set_userdata($data);
			if($user->level=='admin'){
				$this->session->set_flashdata('success', 'Berhasil login !!');
				redirect('admin/home');
			}else{
				$this->session->set_flashdata('success', 'Berhasil login !!');
				redirect('home');
			}
		} else {
			$this->session->set_flashdata('error', 'Password salah !!');
			redirect('admin/auth');
		}
	}

	public function logout()
	{
		$this->session->set_flashdata('success', 'Berhasil log out !!');
		$this->session->sess_destroy();
		redirect('home');
	}
}