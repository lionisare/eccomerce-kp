<?php
class Konfirmasi extends CI_Controller
{
    public function proses_konfirmasi()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('konfirmasi/user');
        $this->load->view('admin/template/footer');
    }
    public function tambah_konfirmasi()
    {
        $nama   = $this->input->post('nama');
        $dari_bank = $this->input->post('dari_bank');
        $ke_bank   = $this->input->post('ke_bank');
        $jumlah      = $this->input->post('jumlah');
        $gambar     = $_FILES['gambar']['name'];
        if ($gambar = '') {
        } else {
            $config['upload_path'] = '.upload/konfirmasi/';
            $config['allowed_types'] = 'jpg|png|jpeg';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Upload gambar gagal!";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }
        $data = array(
            'nama' => $nama,
            'dari_bank' => $dari_bank,
            'ke_bank' => $ke_bank,
            'jumlah' => $jumlah,
            'gambar' => $gambar
        );
        $this->model_konfirmasi->konfirmasi_user($data, 'tb_konfirmasi');
        redirect('welcome');
    }
}
