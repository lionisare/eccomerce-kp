<?php
class Model_categori extends CI_Model
{
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
    public function ambil_kategori()
    {
        $this->db->select('*');
        $this->db->from('tb_kategori');
        $this->db->order_by('kategori_id', 'nama_kategori');
        return $this->db->get()->result();
    }
    public function kategori_produk($kategori_id)
    {
        $this->db->select('*');
        $this->db->from('tb_kategori');
        $this->db->order_by('kategori_id', $kategori_id);
        return $this->db->get()->row();
    }
    public function ambil_id_kategori($kategori_id)
    {
        $this->db->select('*');
        $this->db->from('tb_produk');
        $this->db->join('tb_kategori', 'tb_kategori.kategori_id = tb_produk.kategori_id', 'left');
        $this->db->where('tb_produk.kategori_id', $kategori_id);
        return $this->db->get()->result();
    }
}
