<?php
class Categori extends CI_Controller
{
    public function tampil_produk_kategori($kategori_id)
    {
        $data['kategori'] = $this->model_categori->ambil_id_kategori($kategori_id);
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('categori/categori', $data);
        $this->load->view('admin/template/footer');
    }
}
