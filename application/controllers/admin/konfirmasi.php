<?php

class Konfirmasi extends CI_Controller
{
	public function index()
	{
		$data['konfirmasi'] = $this->model_konfirmasi->tampil_data();
		$this->load->view('admin/template_admin/header');
		$this->load->view('admin/template_admin/sidebar');
		$this->load->view('konfirmasi/admin');
		$this->load->view('admin/template_admin/footer');
	}
}
