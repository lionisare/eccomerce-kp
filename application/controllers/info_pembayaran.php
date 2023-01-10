<?php
class Info_pembayaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') != '0') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda belum login!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('auth/login');
        }
    }
    public function info()
    {
        $data['pembayaran'] = $this->model_auth->tampil_pembayaran();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/info_bayar', $data);
        $this->load->view('admin/template/footer');
    }
}
