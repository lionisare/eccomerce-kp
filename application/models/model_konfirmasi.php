<?php
class Model_konfirmasi extends CI_Model
{
    public function konfirmasi_user($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function tampil_data()
    {
        // $this->db->select('*');
        // $this->db->from('tb_konfirmasi');
        // $this->db->join('tb_invoices', 'tb_invoices.id_invoice = tb_konfirmasi.id_invoice');
        // return $this->db->get()->result();
        $result = $this->db->get('tb_konfirmasi');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
    public function ambil_id_invoices($id_invoice)
    {
        $result = $this->db->where('id_invoice', $id_invoice)->limit(1)->get('tb_invoices');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }
    public function ambil_id_konfirmasi($id_konfirmasi)
    {
        $result =  $this->db->select("a.*, b.id_invoice")
            ->from('tb_konfirmasi as a')
            ->join('tb_invoices as b',  'a.id_konfirmasi = b.id_invoice', 'left')
            ->where('a.id_konfirmasi', $id_konfirmasi)
            ->get();
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
