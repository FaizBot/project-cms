<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('Product_Model');
	}
	public $api_key = "4442ea7ad06f67db0b41f3f4084a2e62";
	public function index()
	{
		// data provinsi api
		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => "https://api.rajaongkir.com/starter/province",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_HTTPHEADER => array(
			"key: ".$this->api_key,
		),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
			// echo "cURL Error #:" . $err;
			$data['provinsi'] = array('error'=>true);
		} else {
			// echo $response;
			$data = json_decode($response,TRUE);
			$provinsi = $data['rajaongkir']['results'];
		}
		// provinsi

		// MENAMPILKAN KOTA dari API
		if(isset($_POST["id_provinsi"])){
			$id_provinsi_terpilih = $_POST["id_provinsi"];
			$curl = curl_init();

			curl_setopt_array($curl, array(
			CURLOPT_URL => "https://api.rajaongkir.com/starter/city?province=".$id_provinsi_terpilih,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => array(
				"key: ".$this->api_key,
			),
			));

			$response = curl_exec($curl);
			$err = curl_error($curl);

			curl_close($curl);

			if ($err) {
				// echo "cURL Error #:" . $err;
				$data['kota'] = array('error'=>true);
			} else {
				// echo $response;
				$data = json_decode($response,TRUE);
				$kota = $data['rajaongkir']['results'];
				echo "<option value=''>Pilih Kota / Kabupaten</option>";
				foreach($kota as $key => $tiap_kota) {
				echo "<option value='".$tiap_kota["type"]."".' '."".$tiap_kota["city_name"]."' nama_provinsi='".$tiap_kota["province"]."'
				id_kota = '".$tiap_kota["city_id"]."' 
				nama_kota='".$tiap_kota["city_name"]."'
				tipe_kota='".$tiap_kota["type"]."' 
				kodepos='".$tiap_kota["postal_code"]."'		>";
				echo $tiap_kota["type"]." ";
				echo $tiap_kota["city_name"];
				echo "</option>";
				echo "<input name='kode_pos' type='hidden' value='".$tiap_kota["postal_code"]."'>";
				}
			}
		}

		if(isset($_POST["ekspedisi"])){
			// ongkir
			$ekspedisi = $_POST["ekspedisi"];
			$kota      = $_POST["kota"];
			$berat     = $_POST["berat"];
			$curl      = curl_init();
	
			curl_setopt_array($curl, array(
			CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_POSTFIELDS => "origin=169&destination=".$kota."&weight=".$berat."&courier=".$ekspedisi,
			CURLOPT_HTTPHEADER => array(
				"content-type: application/x-www-form-urlencoded",
				"key: ".$this->api_key,
			),
			));
	
			$response = curl_exec($curl);
			$err = curl_error($curl);
	
			curl_close($curl);
	
			if ($err) {
			// echo "cURL Error #:" . $err;
			} else {
			// echo $response;
				$data = json_decode($response,TRUE);
				$paket = $data['rajaongkir']['results']['0']['costs'];
	
				echo "<option value=''>Pilih Paket</option>";
				foreach($paket as $key => $tiap_paket) {
					echo "<option
					paket='".$tiap_paket['service']."'
					ongkir='".$tiap_paket["cost"]["0"]["value"]."'
					etd='".$tiap_paket["cost"]["0"]["etd"]."' >";
					echo $tiap_paket["service"]." ";
					echo number_format($tiap_paket["cost"]["0"]["value"])." ";
					echo $tiap_paket["cost"]["0"]["etd"]." Days";
					echo "</option>";
				}
			}
		}
		

		$product = $this->Product_Model->get_all_product();

		$id_user = $this->session->userdata('id_user');
        $this->db->select('*')->from('user');
        $this->db->where('id_user', $id_user);
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
			'cart' 		  => $cart,
			'provinsi' 	  => $provinsi,
		);
		$this->template->load('user/kerangka2', 'user/checkout', $data);
	}

	public function process_checkout()
	{
		$id_user = $this->session->userdata('id_user');

		// Ambil data dari form (Billing Details)
		$data_billing = [
			'nama'       => $this->input->post('nama'),
			'email'      => $this->input->post('email'),
			'no_hp'      => $this->input->post('no_hp'),
			'alamat'     => $this->input->post('alamat'),
			'kota'       => $this->input->post('kota'),
			'provinsi'   => $this->input->post('provinsi'),
			'kode_pos'   => $this->input->post('kode_pos'),
		];
	
		// Perbarui data user di tabel user
		$this->db->where('id_user', $id_user);
		$this->db->update('user', $data_billing);
	
		// Ambil data cart
		$this->db->select('cart.*, product.harga, product.nama, product.id_product');
		$this->db->from('cart');
		$this->db->join('product', 'product.id_product = cart.id_product');
		$this->db->where('cart.id_user', $id_user);
		$cart = $this->db->get()->result_array();
	
		if (empty($cart)) {
			redirect('user/cart');
		}
	
		// Hitung total harga
		$cart_total = 0;
		$cart_jumlah = 0;
		$totalberat = 0;
		foreach ($cart as $item) {
			$cart_total += $item['sub_total'];
			$cart_jumlah += $item['qty'];
			$totalberat += $item['totalberat'];
		}
	
		// Simpan data transaksi ke tabel transaction
		$data_transaction = [
			'id_user'    => $id_user,
			'tanggal'    => date('Y-m-d'),
			'note'    	 => $this->input->post('note'),
			'payment'    => $this->input->post('payment'),
			'jumlah'     => $cart_jumlah,
			'sub_total'  => $cart_total,
			'totalberat' => $totalberat,
			'status'     => 'Pesanan Masuk',  // Status awal
			'paket'      => htmlspecialchars($this->input->post('paket')),
			'kurir'    	 => $this->input->post('kurir'),
		];
		$this->db->insert('transaction', $data_transaction);
		$id_transaction = $this->db->insert_id();
	
		// Simpan detail transaksi
		foreach ($cart as $item) {
			$data_order_item = [
				'id_product'      => $item['id_product'],
				'id_transaction'  => $id_transaction,
				'jumlah'          => $item['qty'],
				'harga'           => $item['harga'],
				'sub_harga'       => $item['harga'] * $item['qty']
			];
			$this->db->insert('detailtransaction', $data_order_item);
	
			// Kurangi stok produk
			$this->db->set('stock', 'stock - ' . $item['qty'], FALSE);
			$this->db->where('id_product', $item['id_product']);
			$this->db->update('product');
		}
	
		// Hapus cart setelah checkout berhasil
		$this->db->delete('cart', ['id_user' => $id_user]);
	
		// Redirect ke halaman sukses
		$this->session->set_flashdata('success', 'Pesanan Anda berhasil dibuat, silahkan cek MY TRACK ORDER !!');
		redirect('home');
	}
}