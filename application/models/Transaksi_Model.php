<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends CI_Model {
  // Mendapatkan semua pesanan masuk
  
  // Controller
  public function update_status($id, $status)
  {
      // Update status if it's valid
      $valid_statuses = ['Pesanan Dikonfirmasi', 'Pesanan Dikemas', 'Pesanan Dikirim', 'Pesanan Dalam Perjalanan', 'Pesanan Selesai'];
  
      if (in_array($status, $valid_statuses)) {
          $this->db->set('status', $status);
          $this->db->where('id_transaction', $id);
          $result = $this->db->update('transaction'); // Update status in the 'transaction' table
  
          return $result;
      } else {
          return false; // Return false if the status is invalid
      }
   }

  public function delete($id, $status)
  {
      // Update status if it's valid
      $valid_statuses = "Pesanan Masuk";
      var_dump($status == $valid_statuses); die;
      if (in_array($status, $valid_statuses)) {
            $this->db->where('id_transaction', $id);
            $result = $this->db->delete('transaction'); // Update status in the 'transaction' table
  
          return $result;
      } else {
          return false; // Return false if the status is invalid
      }
   }
    // Fungsi lainnya untuk mengambil data pesanan masuk, dll.
    public function get_pesanan() {
        // Query untuk mengambil data pesanan masuk
        $this->db->select('*');
        $this->db->from('transaction');
        $this->db->join('user', 'user.id_user = transaction.id_user');
        return $this->db->get()->result_array();
    }
    // Fungsi lainnya untuk mengambil data pesanan masuk, dll.
    public function get_pesanan_masuk() {
        // Query untuk mengambil data pesanan masuk
        $this->db->select('*');
        $this->db->from('transaction');
        $this->db->join('user', 'user.id_user = transaction.id_user');
        $this->db->where('transaction.status', 'Pesanan Masuk');
        return $this->db->get()->result_array();
    }
    public function get_pesanan_konfirmasi() {
        // Query untuk mengambil data pesanan masuk
        $this->db->select('*');
        $this->db->from('transaction');
        $this->db->join('user', 'user.id_user = transaction.id_user');
        $this->db->where('transaction.status', 'Pesanan Dikonfirmasi');
        return $this->db->get()->result_array();
    }
    public function get_pesanan_dikemas() {
        // Query untuk mengambil data pesanan masuk
        $this->db->select('*');
        $this->db->from('transaction');
        $this->db->join('user', 'user.id_user = transaction.id_user');
        $this->db->where('transaction.status', 'Pesanan Dikemas');
        return $this->db->get()->result_array();
    }
    public function get_pesanan_dikirim() {
        // Query untuk mengambil data pesanan masuk
        $this->db->select('*');
        $this->db->from('transaction');
        $this->db->join('user', 'user.id_user = transaction.id_user');
        $this->db->where('transaction.status', 'Pesanan Dikirim');
        return $this->db->get()->result_array();
    }
    public function get_pesanan_menuju_alamat() {
        // Query untuk mengambil data pesanan masuk
        $this->db->select('*');
        $this->db->from('transaction');
        $this->db->join('user', 'user.id_user = transaction.id_user');
        $this->db->where('transaction.status', 'Pesanan Dalam Perjalanan');
        return $this->db->get()->result_array();
    }
    public function get_pesanan_selesai() {
        // Query untuk mengambil data pesanan masuk
        $this->db->select('*');
        $this->db->from('transaction');
        $this->db->join('user', 'user.id_user = transaction.id_user');
        $this->db->where('transaction.status', 'Pesanan Selesai');
        return $this->db->get()->result_array();
    }

    public function update_dikirim($id, $status, $kurir, $no_resi)
    {
      // Update status if it's valid
      $valid_statuses = ['Pesanan Dikonfirmasi', 'Pesanan Dikemas', 'Pesanan Dikirim', 'Pesanan Dalam Perjalanan', 'Pesanan Selesai'];
  
      if (in_array($status, $valid_statuses)) {
          $this->db->set('status', $status);
          $this->db->set('no_resi', $no_resi);
          $this->db->where('id_transaction', $id);
          $result = $this->db->update('transaction'); // Update status in the 'transaction' table
  
          return $result;
      } else {
          return false; // Return false if the status is invalid
      }
    }
}