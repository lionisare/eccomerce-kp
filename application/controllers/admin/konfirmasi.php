<?php

class Konfirmasi extends CI_Controller
{
	public function index()
	{
		// $data['konfirmasi_admin'] = $this>Model_konfirmasi
		$this->load->view('admin/template_admin/header');
		$this->load->view('admin/template_admin/sidebar');
		$this->load->view('konfirmasi/admin');
		$this->load->view('admin/template_admin/footer');
	}
}
