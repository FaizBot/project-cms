<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kritik extends CI_Controller {
	function simpan()
	{
		$data = array(
            'id_user' => $this->session->userdata('id_user'),
			'kritik'  => $this->input->post('kritik'),
            'tanggal' => date('Y-m-d'),
		);
		$this->db->insert('kritik', $data);
        $this->session->set_flashdata('success', 'Terimakasih atas Kritik dan Saran anda');
        redirect('home');
	}
}