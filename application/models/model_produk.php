<?php

class Model_produk extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->select("a.*, b.nama_kategori")
            ->from('tb_produk as a')
            ->join('tb_kategori as b',  'a.kategori_id = b.kategori_id', 'left')
            ->get();
    }

    public function tambah_produk($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function edit_produk($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function find($id)
    {
        $result = $this->db->select("a.*, b.nama_kategori")
            ->from('tb_produk as a')
            ->join('tb_kategori as b',  'a.kategori_id = b.kategori_id', 'left')
            ->where('a.id_brg', $id)
            ->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }
    public function detail_produk($id_brg)
    {
        $result =  $this->db->select("a.*, b.nama_kategori")
            ->from('tb_produk as a')
            ->join('tb_kategori as b',  'a.kategori_id = b.kategori_id', 'left')
            ->where('a.id_brg', $id_brg)
            ->get();
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
    public function ambil_id_produk($id_brg)
    {
        $result =  $this->db->select("a.*, b.nama_kategori")
            ->from('tb_produk as a')
            ->join('tb_kategori as b',  'a.kategori_id = b.kategori_id', 'left')
            ->where('a.id_brg', $id_brg)
            ->get();
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
    public function hitungdata()
    {
        return $this->db->get('tb_produk')->num_rows();
    }
    public function tampil_saran()
    {
        $result = $this->db->get('tb_saran');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
    public function delete_saran($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function get_Keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('tb_produk');
        $this->db->like('nama_brg', $keyword);
        return $this->db->get()->result();
    }
}
