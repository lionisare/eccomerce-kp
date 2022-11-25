<?php

class Data_produk extends CI_Controller
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
        $data['produk'] = $this->model_produk->tampil_data()->result();
        $data['kategoris'] = $this->model_categori->tampil_data()->result();
        $this->load->view('admin/template_admin/header');
        $this->load->view('admin/template_admin/sidebar');
        $this->load->view('admin/data_produk', $data);
        $this->load->view('admin/template_admin/footer');
    }
    public function tambah_produk()
    {
        $nama_brg    = $this->input->post('nama_brg');
        $keterangan  = $this->input->post('keterangan');
        $kategori_id = $this->input->post('kategori_id');
        $harga       = $this->input->post('harga');
        $stok        = $this->input->post('stok');
        $gambar      = $_FILES['gambar']['name'];
        if ($gambar = '') {
        } else {
            $config['upload_path'] = './upload';
            $config['allowed_types'] = 'jpg|png|jpeg|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Upload gambar gagal!";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }
        $data = array(
            'nama_brg' => $nama_brg,
            'keterangan' => $keterangan,
            'kategori_id' => $kategori_id,
            'harga' => $harga,
            'stok' => $stok,
            'gambar' => $gambar,
        );
        $this->model_produk->tambah_produk($data, 'tb_produk');
        redirect('admin/data_produk/index');
    }

    public function edit($id)
    {
        $where = array('id_brg' => $id);
        $data['produk'] = $this->model_produk->edit_produk($where, 'tb_produk')->result();
        $data['kategoris'] = $this->model_categori->tampil_data()->result();
        $this->load->view('admin/template_admin/header');
        $this->load->view('admin/template_admin/sidebar');
        $this->load->view('admin/edit_produk', $data);
        $this->load->view('admin/template_admin/footer');
    }
    public function update()
    {
        $id          = $this->input->post('id_brg');
        $nama_brg    = $this->input->post('nama_brg');
        $keterangan  = $this->input->post('keterangan');
        $kategori_id = $this->input->post('kategori_id');
        $harga       = $this->input->post('harga');
        $stok        = $this->input->post('stok');
        $data = array(
            'nama_brg' => $nama_brg,
            'keterangan' => $keterangan,
            'kategori_id' => $kategori_id,
            'harga' => $harga,
            'stok' => $stok
        );
        $where = array(
            'id_brg' => $id
        );
        $this->model_produk->update_data($where, $data, 'tb_produk');
        redirect('admin/data_produk/index');
    }
    public function delete($id)
    {
        $where = array('id_brg' => $id);
        $this->model_produk->delete_data($where, 'tb_produk');
        redirect('admin/data_produk/index');
    }
    public function detail($id)
    {
        $data['produk'] = $this->model_produk->ambil_id_produk($id);
        $this->load->view('admin/template_admin/header');
        $this->load->view('admin/template_admin/sidebar');
        $this->load->view('admin/detail_produkadmin', $data);
        $this->load->view('admin/template_admin/footer');
    }
}
