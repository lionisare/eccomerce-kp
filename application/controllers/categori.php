<?php
class Categori extends CI_Controller
{
    public function peternakan()
    {
        $data['peternakan'] = $this->model_categori->data_peternakan()->result();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('categori/peternakan', $data);
        $this->load->view('admin/template/footer');
    }
    public function pertanian()
    {
        $data['pertanian'] = $this->model_categori->data_pertanian()->result();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('categori/pertanian', $data);
        $this->load->view('admin/template/footer');
    }
    public function oleholeh()
    {
        $data['makanan'] = $this->model_categori->data_makanan()->result();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('categori/makanan', $data);
        $this->load->view('admin/template/footer');
    }
    public function umkm()
    {
        $data['umkm'] = $this->model_categori->data_umkm()->result();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('categori/umkm', $data);
        $this->load->view('admin/template/footer');
    }
}
