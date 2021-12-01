<?php
class Masuk extends CI_Controller
{
    public function index()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/masuk');
            $this->load->view('templates_customer/footer');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $cek = $this->gedungModel->cek_login($username, $password);

            if ($cek == FALSE) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>Nama Pengguna atau Kata Sandi Salah</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('auth/masuk');
            } else {
                $this->session->set_userdata('nama', $cek->nama);
                $this->session->set_userdata('username', $cek->username);
                $this->session->set_userdata('role_id', $cek->role_id);
                $this->session->set_userdata('iduser', $cek->iduser);

                switch ($cek->role_id) {
                    case 1:
                        redirect('admin/beranda');
                        break;
                    case 2:
                        redirect('customer/dashboard');
                        break;
                    default:
                        break;
                }
            }
        }
    }
    public function _rules()
    {
        $this->form_validation->set_rules('username', 'Nama Pengguna', 'required');
        $this->form_validation->set_rules('password', 'Kata Sandi', 'required');
    }
    public function keluar()
    {
        $this->session->sess_destroy();
        redirect('customer/dashboard');
    }
}
