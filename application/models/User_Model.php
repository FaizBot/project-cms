<?php
class User_Model extends CI_Model
{
    public function simpan()
    {
        $data = array(
			'username'  => htmlspecialchars($this->input->post('username')),
			'nama'  	=> $this->input->post('nama'),
			'alamat'  	=> $this->input->post('alamat'),
			'kota'  	=> $this->input->post('kota'),
			'provinsi'  => $this->input->post('provinsi'),
			'kode_pos'  => $this->input->post('kode_pos'),
			'no_hp'  	=> $this->input->post('no_hp'),
			'email'  	=> $this->input->post('email'),
			'password'  => md5($this->input->post('password')),
			'level'  	=> $this->input->post('level'),
		);
		$this->db->insert('user', $data);
    }
	public function update()
	{
		$data = array(
            'username'      => htmlspecialchars($this->input->post('username')),
            'alamat'        => $this->input->post('alamat'),
            'kota'  	    => $this->input->post('kota'),
			'provinsi'      => $this->input->post('provinsi'),
			'kode_pos'      => $this->input->post('kode_pos'),
            'no_hp'         => $this->input->post('no_hp'),
            'email'         => $this->input->post('email'),
            'level'         => $this->input->post('level'),
        );
        $where = array(
            'id_user' => $this->input->post('id_user')
        );
        $this->db->update('user',$data,$where);
	}
	public function simpanusr()
    {
        $data = array(
			'username'  => htmlspecialchars($this->input->post('username')),
			'nama'  	=> $this->input->post('nama'),
			'email'  	=> $this->input->post('email'),
			'password'  => md5($this->input->post('password')),
			'alamat'  	=> 'tidak ada data',
			'kota'  	=> 'tidak ada data',
			'provinsi'  => 'tidak ada data',
			'kode_pos'  => 'tidak ada data',
			'no_hp'  	=> 'tidak ada data',
			'level'  	=> 'user',
		);
		$this->db->insert('user', $data);
    }
	public function update_user($data)
	{
		$id_user = array(
            'id_user' => $this->input->post('id_user')
        );
		$this->db->update('user',$data,$id_user);
	}
}