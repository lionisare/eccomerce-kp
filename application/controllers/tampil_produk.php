<?php
class Tampil_produk extends CI_Controller
{
    public function tampil_produk()
    {
        $data['produk'] = $this->model_produk->tampil_data()->result();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/template/produk', $data);
        $this->load->view('admin/template/footer');
    }
}
