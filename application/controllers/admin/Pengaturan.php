<?php

class Pengaturan extends CI_Controller
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

        $this->load->model('Model_pengaturan', 'model_pengaturan');
    }

    public function index()
    {
        $data['whatsapp'] = $this->model_pengaturan->get_whatsapp();
        $this->load->view('admin/template_admin/header');
        $this->load->view('admin/template_admin/sidebar');
        $this->load->view('admin/pengaturan', $data);
        $this->load->view('admin/template_admin/footer');
    }

    public function simpan_whatsapp()
    {
        $no_whatsapp   = $this->input->post('no_whatsapp');
        $result = $this->model_pengaturan->set_whatsapp($no_whatsapp);
        if ($result) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Berhasil Menyimpan data
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Gagal menyimpan data
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>');
        }
        redirect('admin/pengaturan');
    }
}
