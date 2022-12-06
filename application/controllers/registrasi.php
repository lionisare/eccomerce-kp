<?php

class Registrasi extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => 'nama harus di isi']);
        $this->form_validation->set_rules('username', 'Username', 'required', ['required' => 'username harus di isi']);
        $this->form_validation->set_rules('password_1', 'Password', 'required|matches[password_2]', ['required' => 'password harus di isi', 'matches' => 'password tidak cocok']);
        $this->form_validation->set_rules('password_2', 'Password', 'required|matches[password_1]');
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/template/header');
            $this->load->view('registrasi');
        } else {
            $data = array(
                'id'  => '',
                'nama' => $this->input->post('nama'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password_1'),
                'role_id' => 0,
            );
            $this->db->insert('tb_user', $data);
            redirect('auth/login');
        }
    }
}
