<?php
class Product_Model extends CI_Model
{
    public function simpan()
    {
        $data = array(
			'nama'           => $this->input->post('nama'),
			'spesifikasi'  	 => htmlspecialchars($this->input->post('spesifikasi')),
			'berat'  	     => $this->input->post('berat'),
			'deskripsi'  	 => htmlspecialchars($this->input->post('deskripsi')),
			'product_detail' => htmlspecialchars($this->input->post('product_detail')),
			'keterangan'  	 => htmlspecialchars($this->input->post('keterangan')),
			'harga'  	     => $this->input->post('harga'),
			'stock'          => $this->input->post('stock'),
			'slug'  	     => str_replace('','-',$this->input->post('nama')),
			'kategori'  	 => $this->input->post('kategori'),
			'tanggal'  	     => date('Y-m-d'),
		);
		$this->db->insert('product', $data);
    }
	public function update()
	{
		$data = array(
            'nama'           => $this->input->post('nama'),
			'spesifikasi'  	 => htmlspecialchars($this->input->post('spesifikasi')),
            'berat'  	     => $this->input->post('berat'),
			'deskripsi'  	 => htmlspecialchars($this->input->post('deskripsi')),
			'product_detail' => htmlspecialchars($this->input->post('product_detail')),
			'keterangan'  	 => htmlspecialchars($this->input->post('keterangan')),
            'harga'  	     => $this->input->post('harga'),
			'stock'          => $this->input->post('stock'),
			'slug'  	     => str_replace('','-',$this->input->post('nama')),
			'kategori'  	 => $this->input->post('kategori'),
			'tanggal'  	     => date('Y-m-d'),
        );
        $where = array(
            'id_product' => $this->input->post('id_product')
        );
        $this->db->update('product',$data,$where);
	}

	// calling product ke front end
	function add_pic($data = array())
    {
        return $this->db->insert_batch('picproduct', $data);
    }
	function add_is_primer($id_product)
    {
        $this->db->where('id_product', $id_product);
        $this->db->limit(1);
        $query = $this->db->get('picproduct');
        $data = $query->row();
        $this->db->set('is_primer', 1);
        $this->db->where('id_picproduct', $data->id_picproduct);
        $this->db->update('picproduct');
    }
	public function get_all_product()
    {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('picproduct', 'picproduct.id_product = product.id_product');
        $this->db->where('picproduct.is_primer', 1);
        $query = $this->db->get();
        return $query->result();
    }
    function get_product_by_id($id)
    {
        $this->db->where('id_product', $id);
        $query = $this->db->get('product');

        return $query->result();
    }
    function get_picture_product_by_id($id)
    {
        $this->db->where('id_product', $id);
        $query = $this->db->get('picproduct');

        return $query->result();
    }

    function add_cart($data)
    {
        $this->db->insert('cart', $data);
    }
    
    public function get_cart_item($id_user, $id_product)
    {
        return $this->db->get_where('cart', [
            'id_user' => $id_user,
            'id_product' => $id_product
        ])->row_array();
    }

    public function update_cart_item($id_user, $id_product, $update_data)
    {
        $this->db->where('id_user', $id_user);
        $this->db->where('id_product', $id_product);
        $this->db->update('cart', $update_data);
    }
    public function get_all_product_kategori($id)
    {
        // Ambil kategori berdasarkan id_product
        $this->db->select('kategori');
        $this->db->from('product');
        $this->db->where('id_product', $id);
        $ktr_query = $this->db->get();

        // Pastikan hasil tidak kosong
        if ($ktr_query->num_rows() > 0) {
            // Ambil nilai kategori
            $kategori = $ktr_query->row()->kategori;

            // Query produk berdasarkan kategori, kecuali produk dengan id yang sama
            $this->db->select('*');
            $this->db->from('product');
            $this->db->where('product.kategori', $kategori); // Perjelas tabel
            $this->db->where('product.id_product !=', $id);  // Perjelas tabel
            $this->db->join('picproduct', 'picproduct.id_product = product.id_product');
            $this->db->where('picproduct.is_primer', 1);
            $query = $this->db->get();

            // Kembalikan hasil query
            return $query->result();
        } else {
            // Jika kategori tidak ditemukan, kembalikan array kosong
            return [];
        }
    }
    public function search_products($category = null, $query = '')
    {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('picproduct', 'picproduct.id_product = product.id_product');
        $this->db->where('picproduct.is_primer', 1);

        if ($category) {
            $this->db->where('kategori', $category);
        }

        if ($query) {
            $this->db->like('nama', $query);
        }

        return $this->db->get()->result_array();
    }
}
