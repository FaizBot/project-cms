<?php
class Kategori_Model extends CI_Model
{
    public function simpan()
    {
        $data = array(
			'nama_kategori'  => $this->input->post('nama_kategori'),
		);
		$this->db->insert('kategori', $data);
    }
	public function update()
	{
		$data = array(
            'nama_kategori'      => $this->input->post('nama_kategori'),
        );
        $where = array(
            'id_kategori' => $this->input->post('id_kategori')
        );
        $this->db->update('kategori',$data,$where);
	}
    public function getProdukByKategori($nama_kategori)
    {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('kategori', 'product.kategori = nama_kategori');
        $this->db->where('kategori.nama_kategori', $nama_kategori);
        return $this->db->get()->result_array();
    }

    public function get_all_product($ktr)
    {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->where('kategori', $ktr);
        $this->db->join('picproduct', 'picproduct.id_product = product.id_product');
        $this->db->where('picproduct.is_primer', 1);
        $query = $this->db->get();
        return $query->result();
    }
}
