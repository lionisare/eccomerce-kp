<?php
class Model_konfirmasi extends CI_Model
{
    public function konfirmasi_user($data, $table)
    {
        $this->db->insert($table, $data);
    }
}
