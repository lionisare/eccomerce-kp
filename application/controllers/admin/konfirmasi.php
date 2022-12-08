<?php

class Konfirmasi extends CI_Controller
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
		$data['konfirmasi'] = $this->model_konfirmasi->tampil_data();
		$this->load->view('admin/template_admin/header');
		$this->load->view('admin/template_admin/sidebar');
		$this->load->view('konfirmasi/admin', $data);
		$this->load->view('admin/template_admin/footer');
	}
	// public function detail_konfirmasi($id_pesanan)
	// {
	// 	$data['konfirmasi'] = $this->model_konfirmasi->ambil_id_pesanan($id_pesanan);
	// 	$this->load->view('admin/template_admin/header');
	// 	$this->load->view('admin/template_admin/sidebar');
	// 	$this->load->view('konfirmasi/detail_konfirmasi', $data);
	// 	$this->load->view('admin/template_admin/footer');
	// }
}
