<?php
class Model_pengaturan extends CI_Model
{
    private $whatsapp_key = 'WHATSAPP';
    private $table = 'tb_pengaturan';
    public function get_whatsapp()
    {
        $get = $this->db->select("*")
            ->from($this->table)
            ->where('kunci', $this->whatsapp_key)->get();

        if ($get->num_rows() < 1) {
            $whatsapp = [
                'kunci' => $this->whatsapp_key,
                'nilai' => ''
            ];
            $this->db->insert($this->table, $whatsapp);
            $whatsapp['id'] = $this->db->insert_id();
        } else {
            $whatsapp = $get->row_array();
        }
        return $whatsapp;
    }

    public function set_whatsapp($nomor_whatsapp)
    {
        $result = $this->db->where('kunci', $this->whatsapp_key)
            ->update($this->table, ['nilai' => $nomor_whatsapp]);
        return $result;
    }
}
