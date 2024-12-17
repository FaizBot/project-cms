<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Picproduct extends CI_Controller {
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
        $this->db->select('*');
        $this->db->from('product');
        $this->db->order_by('nama','ASC');
        $prdct = $this->db->get()->result_array();

        $this->db->select('*');
        $this->db->from('product');
        $this->db->order_by('nama','ASC');
        $this->db->join('picproduct', 'picproduct.id_product = product.id_product');
        $this->db->where('picproduct.is_primer', 1);
        $product = $this->db->get()->result_array();

        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('picproduct', 'picproduct.id_product = product.id_product');
        $picproduct = $this->db->get()->result_array();
        $data = array(
			'product'    => $product,
			'picproduct' => $picproduct,
			'prdct'      => $prdct,
		);
		$this->template->load('admin/kerangka_admin', 'admin/picproduct', $data);
	}
    function simpan_img()
    {
        $id = $this->input->post('id_product'); // Use input->post for form data
        $id = intval($id);
        // No need to set validation rules here, as it's handled in the Product_Model

        $jmlhimg = count($_FILES['picture']['name']);

        $uploadData = [];
        for ($i = 0; $i < $jmlhimg; $i++) {
            // Correctly access individual file data within the array
            $uploadData[$i]['id_product'] = $id;

            $_FILES['userfile']['name'] = $_FILES['picture']['name'][$i];
            $_FILES['userfile']['type'] = $_FILES['picture']['type'][$i];
            $_FILES['userfile']['tmp_name'] = $_FILES['picture']['tmp_name'][$i];
            $_FILES['userfile']['size'] = $_FILES['picture']['size'][$i];

            $config['upload_path'] = './assets/upload/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = 2048;
            
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('userfile')) {
                $fileData = $this->upload->data();
                $uploadData[$i]['picture'] = $fileData['file_name'];
                $uploadData[$i]['id_product'] = $id; // Add the id element to the inner array
            }
        }

        if ($uploadData !== NULL) {
            $insert = $this->Product_Model->add_pic($uploadData);
            $this->Product_Model->add_is_primer($id);
            if ($insert) {
                $this->session->set_flashdata('success', 'Berhasil upload picture. !!');
                redirect(site_url('admin/picproduct'));
            } else {
                $this->session->set_flashdata('error', 'Gagal upload picture. !!');
            }
        }
    }

    public function hapus($id){
        $filename=FCPATH.'./assets/upload/'.$id;
        if(file_exists($filename)){
            unlink("./assets/upload/".$id);
        }

        $where = array('id_product' => $id);
        $this->db->delete('picproduct',$where);
        $this->session->set_flashdata('success', 'Berhasil menghapus picture. !!');
        redirect('admin/picproduct');
    }
}