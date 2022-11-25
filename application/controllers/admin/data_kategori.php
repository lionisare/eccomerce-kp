<?php
class Data_kategori extends CI_Controller
{
    public function index()
    {
        $data['kategori'] = $this->model_categori->tampil_data()->result();
        $this->load->view('admin/template_admin/header');
        $this->load->view('admin/template_admin/sidebar');
        $this->load->view('admin/data_kategori', $data);
        $this->load->view('admin/template_admin/footer');
    }
    public function tambah_kategori()
    {
        $nama_kategori   = $this->input->post('nama_kategori');
        $data = array(
            'nama_kategori' => $nama_kategori
        );
        $this->model_categori->tambah_kategori($data, 'tb_kategori');
        redirect('admin/data_kategori/index');
    }
    public function edit_kategori($id)
    {
        $where = array('kategori_id' => $id);
        $data['kategori'] = $this->model_categori->edit_kategori($where, 'tb_kategori')->result();
        $this->load->view('admin/template_admin/header');
        $this->load->view('admin/template_admin/sidebar');
        $this->load->view('admin/edit_kategori', $data);
        $this->load->view('admin/template_admin/footer');
    }
    public function update()
    {
        $id              = $this->input->post('kategori_id');
        $nama_kategori   = $this->input->post('nama_kategori');
        $data = array(
              'nama_kategori' => $nama_kategori
        );
        $where = array(
            'kategori_id' => $id
        );
        $this->model_categori->update_data($where, $data, 'tb_kategori');
        redirect('admin/data_kategori/index');
    }
    public function delete_kategori($id)
    {
        $where = array('kategori_id' => $id);
        $this->model_categori->delete_data($where, 'tb_kategori');
        redirect('admin/data_kategori/index');
    }
}
