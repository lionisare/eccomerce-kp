<?php
class Model_pengaturan extends CI_Model
{
    private $table = 'tb_pengaturan';

    public function get($key)
    {
        $get = $this->db->select("*")
            ->from($this->table)
            ->where('kunci', $key)->get();

        if ($get->num_rows() < 1) {
            $result = [
                'kunci' => $key,
                'nilai' => ''
            ];
            $this->db->insert($this->table, $result);
            $result['id'] = $this->db->insert_id();
        } else {
            $result = $get->row_array();
        }
        return $result;
    }

    public function set($key, $value)
    {
        $result = $this->db->where('kunci', $key)
            ->update($this->table, ['nilai' => $value]);
        return $result;
    }
}
