<?php

class Model_auth extends CI_Model
{
    public function cek_login()
    {
        $username = set_value('username');
        $password = set_value('password');

        $result   = $this->db->where('username', $username)
            ->where('password', $password)
            ->limit(1)
            ->get('tb_user');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }
    public function hitungdatauser()
    {
        $query = $this->db->get('tb_user');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function tambah_saran($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function tampil_user()
    {
        $result = $this->db->get('tb_user');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
    public function delete_user($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function tampil_pembayaran()
    {
        $result = $this->db->get('tb_pembayaran');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
    public function tambah_metode($table, $data)
    {
        $this->db->insert($data, $table);
    }
    public function edit_metode($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update_metode($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function delete_metode($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function get_metode()
    {
        $query = $this->db->query("SELELCT * FROM tb_pembayaran ORDER BY nama_bank ASC");
        return $query->result();
    }
}
