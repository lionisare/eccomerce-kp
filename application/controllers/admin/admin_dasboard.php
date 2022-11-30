<?php

class Admin_dasboard extends CI_Controller
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
        $data['jumlahpdk'] = $this->model_produk->hitungdata();
        $data['jumlahuser'] = $this->model_auth->hitungdatauser();
        $data['jumlahpesanan'] = $this->model_invoice->hitungdatapesanan();

        $this->load->view('admin/template_admin/header');
        $this->load->view('admin/template_admin/sidebar');
        $this->load->view('admin/admin_dasboard', $data);
        $this->load->view('admin/template_admin/footer');
    }
}
