<?php

class Ambil_id extends CI_Controller
{
    public function ambil_id($id_invoice)
    {
        $data['invoice'] = $this->model_invoice->ambil_id_saja($id_invoice);
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/proses_pesanan', $data);
        $this->load->view('admin/template/footer');
    }
}
