<?php

class Saran extends CI_Controller
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
    $nama = $this->input->post('nama');
    $saran = $this->input->post('saran');
    $data = array(
      'nama' => $nama,
      'saran' => $saran,
    );
    $this->model_auth->tambah_saran($data, 'tb_saran');
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Terima kasih atas saran anda
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
    redirect('welcome');
  }
}
