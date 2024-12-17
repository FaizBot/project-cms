<?php
class Kurir_Model extends CI_Model
{
    public function simpan()
    {
        $data = array(
			'nama'  => $this->input->post('nama'),
		);
		$this->db->insert('kurir', $data);
    }

	public function update()
	{
		$data = array(
            'nama'  => $this->input->post('nama'),
        );
        $where = array(
            'id_kurir' => $this->input->post('id_kurir')
        );
        $this->db->update('kurir',$data,$where);
	}
}
