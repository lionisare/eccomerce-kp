<?php
class Model_konfirmasi extends CI_Model
{
    public function konfirmasi_user($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function tampil_data()
    {
        $this->db->select('*');
        $this->db->from('tb_konfirmasi');
        $this->db->join('tb_invoices', 'tb_invoices.id_invoice = tb_konfirmasi.id_invoice');
        return $this->db->get()->result();
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
}
