<?php
class Dasboard extends CI_Controller
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
    public function tambah_keranjang($id)
    {
        $produk = $this->model_produk->find($id);
        $data = array(
            'id'  => $produk->id_brg,
            'qty' => 1,
            'price' => $produk->harga,
            'name' => $produk->nama_brg
        );
        $this->cart->insert($data);
        redirect('welcome');
    }
    public function detail_keranjang()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/detail_keranjang');
        $this->load->view('admin/template/footer');
    }
    public function hapus_keranjang()
    {
        $this->cart->destroy();
        redirect('welcome/index');
    }
    public function pembayaran()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/pembayaran');
        $this->load->view('admin/template/footer');
    }
    public function proses_pesanan()
    {
        $is_proses = $this->model_invoice->index();
        if ($is_proses) {
            $this->cart->destroy();
            $this->load->view('admin/template/header');
            $this->load->view('admin/template/sidebar');
            $this->load->view('admin/proses_pesanan');
            $this->load->view('admin/template/footer');
        } else {
            echo "Maaf, pesanan anda gagal diproses";
        }
    }
    public function detail_produk($id_brg)
    {
        $data['produk'] = $this->model_produk->detail_produk($id_brg);
        $this->cart->destroy();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/detail_produk', $data);
        $this->load->view('admin/template/footer');
    }
}
