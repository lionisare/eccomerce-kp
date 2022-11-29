<?php

class Konfirmasi extends CI_Controller
{
	public function index()
	{
		$data['konfirmasi'] = $this->model_konfirmasi->tampil_data();
		$this->load->view('admin/template_admin/header');
		$this->load->view('admin/template_admin/sidebar');
		$this->load->view('konfirmasi/admin', $data);
		$this->load->view('admin/template_admin/footer');
	}
	public function detail_konfirmasi()
	{
		$this->load->view('admin/template_admin/header');
		$this->load->view('admin/template_admin/sidebar');
		$this->load->view('konfirmasi/detail_konfirmasi');
		$this->load->view('admin/template_admin/footer');
	}
}
