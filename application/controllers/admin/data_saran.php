<?php

class Data_Saran extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('role_id') != '1') {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda belum login!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect('auth/login');
    }
  }
  public function index()
  {
    $data['saran'] = $this->model_produk->tampil_saran();
    $this->load->view('admin/template_admin/header');
    $this->load->view('admin/template_admin/sidebar');
    $this->load->view('admin/data_saran', $data);
    $this->load->view('admin/template_admin/footer');
  }
  public function delete($id)
  {
    $where = array('id' => $id);
    $this->model_produk->delete_saran($where, 'tb_saran');
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Berhasil hapus saran
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
    redirect('admin/data_saran/index');
  }
}
