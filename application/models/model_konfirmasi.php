<?php
class Model_konfirmasi extends CI_Model
{
    public function konfirmasi_user($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function tampil_data()
    {
        $result = $this->db->get('tb_konfirmasi');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
}
