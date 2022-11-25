<?php
class Model_categori extends CI_Model
{
    public function data_peternakan()
    {
        return $this->db->get_where("tb_produk", array('kategori' => 'peternakan'));
    }
    public function data_pertanian()
    {
        return $this->db->get_where("tb_produk", array('kategori' => 'pertanian'));
    }
    public function data_makanan()
    {
        return $this->db->get_where("tb_produk", array('kategori' => 'makanan'));
    }
    public function data_umkm()
    {
        return $this->db->get_where("tb_produk", array('kategori' => 'umkm'));
    }
    public function tampil_data()
    {
        return $this->db->order_by('nama_kategori')->get('tb_kategori');
    }
    public function tambah_kategori($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function edit_kategori($where, $table)
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
}
