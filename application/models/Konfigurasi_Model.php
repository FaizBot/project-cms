<?php
class Konfigurasi_Model extends CI_Model
{
    public function simpan()
    {
        $data = array(
            'judul_website'  => $this->input->post('judul_website'),
            'profil_website'  => htmlspecialchars($this->input->post('profil_website')),
            'instagram'  => $this->input->post('instagram'),
            'facebook'  => $this->input->post('facebook'),
            'email'  => $this->input->post('email'),
            'alamat'  => $this->input->post('alamat'),
            'no_wa'  => $this->input->post('no_wa'),
        );
        $this->db->insert('konfigurasi', $data);
    }
    public function update()
    {
        $data = array(
            'judul_website'  => $this->input->post('judul_website'),
            'profil_website'  => htmlspecialchars($this->input->post('profil_website')),
            'instagram'  => $this->input->post('instagram'),
            'facebook'  => $this->input->post('facebook'),
            'email'  => $this->input->post('email'),
            'alamat'  => $this->input->post('alamat'),
            'no_wa'  => $this->input->post('no_wa'),
        );
        $where = array(
            'id_kategori' => $this->input->post('id_konfigurasi')
        );
        $this->db->update('konfigurasi', $data, $where);
    }
}
