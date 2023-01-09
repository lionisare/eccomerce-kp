<?php

class Data_pembayaran extends CI_Controller
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
    $data['pembayaran'] = $this->model_auth->tampil_pembayaran();
    $this->load->view('admin/template_admin/header');
    $this->load->view('admin/template_admin/sidebar');
    $this->load->view('admin/data_pembayaran', $data);
    $this->load->view('admin/template_admin/footer');
  }
  public function delete($id)
  {
    $where = array('id' => $id);
    $this->model_auth->delete_pembayaran($where, 'tb_pembayaran');
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Berhasil hapus data
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
    redirect('admin/data_pembayaran/index');
  }
  public function tambah_metode()
  {
    $nama_bank   = $this->input->post('nama_bank');
    $nama_rekening   = $this->input->post('nama_rekening');
    $data = array(
      'nama_bank' => $nama_bank,
      'nama_rekening' => $nama_rekening
    );
    $this->model_auth->tambah_metode($data, 'tb_pembayaran');
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Berhasil tambah metode pembayaran
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
    redirect('admin/data_pembayaran/index');
  }
  public function edit_metode($id)
  {
    $where = array('id' => $id);
    $data['pembayaran'] = $this->model_auth->edit_metode($where, 'tb_pembayaran')->result();
    $this->load->view('admin/template_admin/header');
    $this->load->view('admin/template_admin/sidebar');
    $this->load->view('admin/edit_metode', $data);
    $this->load->view('admin/template_admin/footer');
  }
  public function update_metode()
  {
    $id              = $this->input->post('id');
    $nama_bank       = $this->input->post('nama_bank');
    $nama_rekening   = $this->input->post('nama_rekening');
    $data = array(
      'nama_bank' => $nama_bank,
      'nama_rekening' => $nama_rekening
    );
    $where = array(
      'id' => $id
    );
    $this->model_auth->update_metode($where, $data, 'tb_pembayaran');
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Berhasil update metode pembayaran
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
    redirect('admin/data_pembayaran/index');
  }
  public function delete_metode($id)
  {
    $where = array('id' => $id);
    $this->model_auth->delete_metode($where, 'tb_pembayaran');
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Berhasil hapus metode pembayaran
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
    redirect('admin/data_pembayaran/index');
  }
}
