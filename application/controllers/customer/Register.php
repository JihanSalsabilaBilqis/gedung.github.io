<?php
class Register extends CI_Controller
{
    public function index()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('customer/register');
            $this->load->view('templates_customer/footer');
        } else {
            $nama    = $this->input->post('nama');
            $nohp     = $this->input->post('nohp');
            $alamat   = $this->input->post('alamat');
            $noktp    = $this->input->post('noktp');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $role_id  = '2';

            $data = array(
                'nama'     => $nama,
                'nohp'     => $nohp,
                'alamat'   => $alamat,
                'noktp'    => $noktp,
                'username' => $username,
                'password' => $password,
                'role_id'  => $role_id
            );

            $this->gedungModel->insert_data($data, 'dtuser');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Data Berhasil Register, Silahkan Login!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('auth/masuk');
        }
    }
    public function _rules()
    {
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('nohp', 'Telepon', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('noktp', 'No. KTP', 'required');
        $this->form_validation->set_rules('username', 'Nama Pengguna', 'required');
        $this->form_validation->set_rules('password', 'Kata Sandi', 'required');
    }
}
