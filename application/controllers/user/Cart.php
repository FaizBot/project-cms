<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('Product_Model');
	}
	public function index()
	{
		$product = $this->Product_Model->get_all_product();

		$this->db->select('*')->from('user');
		$user = $this->db->get()->result_array();
		
		$this->db->select('*')->from('kategori');
		$kategori = $this->db->get()->result_array();

		$this->db->select('*')->from('konfigurasi');
		$konfigurasi = $this->db->get()->result_array();
		
		$this->db->select('*')->from('cart');
		$this->db->where('id_user', $this->session->userdata('id_user'));
        $this->db->join('product', 'product.id_product = cart.id_product');
        $this->db->join('picproduct', 'picproduct.id_product = product.id_product');
        $this->db->where('picproduct.is_primer', 1);
		$cart = $this->db->get()->result_array();
		
		$data = array(
			'product'     => $product,
			'user'	      => $user,
			'kategori' 	  => $kategori,
			'konfigurasi' => $konfigurasi,
			'cart' 		  => $cart
		);
		$this->template->load('user/kerangka2', 'user/cart', $data);
	}

	public function cart()
	{
		$this->load->library('cart');

		$id_user = $this->session->userdata('id_user');
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$qty = $this->input->post('qty');
		$harga = $this->input->post('harga');
		$berat = $this->input->post('berat');
		$totalberat = $berat * $qty;

		// Hitung subtotal
		$sub_total = $harga * $qty;

		// Periksa stok produk di database
		$product = $this->Product_Model->get_product_by_id($id);

		if ($product[0]->stock < $qty) {
			$this->session->set_flashdata('error', 'Stok produk tidak mencukupi.');
			redirect('user/product/detail/' . $id);
			return;
		}

		// Cek apakah produk sudah ada di cart
		$cart_item = $this->Product_Model->get_cart_item($id_user, $id);

		if ($cart_item) {
			// Update jumlah dan subtotal di cart
			$new_qty = $cart_item['qty'] + $qty;

			// Periksa kembali stok dengan jumlah baru
			if ($product[0]->stock < $new_qty) {
				$this->session->set_flashdata('error', 'Jumlah total melebihi stok produk.');
				redirect('user/product/detail/' . $id);
				return;
			}

			$update_data = [
				'qty' => $new_qty,
				'sub_total' => $harga * $new_qty,
				'totalberat' => $berat * $new_qty,
			];
			$this->session->set_flashdata('success', 'Product berhasil ditambahkan ke keranjang !!');
			$this->Product_Model->update_cart_item($id_user, $id, $update_data);
		} else {
			// Tambah produk baru ke cart
			$data = [
				'id_user' => $id_user,
				'id_product' => $id,
				'nama' => $nama,
				'qty' => $qty,
				'harga' => $harga,
				'sub_total' => $sub_total,
				'totalberat' => $totalberat,
			];

			$this->Product_Model->add_cart($data);
		}

		// Redirect kembali ke halaman detail produk
		$this->session->set_flashdata('success', 'Product berhasil ditambahkan ke keranjang !!');
		redirect('user/product/detail/' . $id);
	}

	public function deletecart($id_product, $id_user)
	{
        $this->db->where('id_user', $id_user);
        $this->db->where('id_product', $id_product);
		$this->db->delete('cart');
		$this->session->set_flashdata('success', 'Product berhasil dihapus dari keranjang !!');
		redirect('user/cart');
	}
}