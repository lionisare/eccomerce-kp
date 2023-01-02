<?php
class Konfirmasi extends CI_Controller
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
    public function proses_konfirmasi()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('konfirmasi/user');
        $this->load->view('admin/template/footer');
    }
    public function tambah_konfirmasi()
    {
        $nama_konfirmasi   = $this->input->post('nama_konfirmasi');
        $dari_bank = $this->input->post('dari_bank');
        $ke_bank   = $this->input->post('ke_bank');
        $jumlah      = $this->input->post('jumlah');
        $gambar     = $_FILES['gambar']['name'];
        if ($gambar = '') {
        } else {
            $config['upload_path'] = './upload/konfirmasi';
            $config['allowed_types'] = '*';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Upload gambar gagal!";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }
        $data = array(
            'nama_konfirmasi' => $nama_konfirmasi,
            'dari_bank' => $dari_bank,
            'ke_bank' => $ke_bank,
            'jumlah' => $jumlah,
            'gambar' => $gambar
        );
        $this->model_konfirmasi->konfirmasi_user($data, 'tb_konfirmasi');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Berhasil melakukan konfirmasi pembayaran
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
        redirect('welcome');
    }
}
