<?php

class DataPaket extends CI_Controller
{
    public function index()
    {
        $data['paket'] = $this->gedungModel->get_data('dtpaket')->result();
        $this->load->view('templates_admin/header2');
        $this->load->view('admin/dataPaket', $data);
        $this->load->view('templates_admin/footer2');
    }
    public function tambahData()
    {
        $this->load->view('templates_admin/header2');
        $this->load->view('admin/tambahPaket');
        $this->load->view('templates_admin/footer2');
    }
    public function tambahdataAksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->tambahData();
        } else {
            $namapaket  = $this->input->post('namapaket');
            $jadwal     = $this->input->post('jadwal');
            $harga      = $this->input->post('harga');
            $dp         = $this->input->post('dp');

            $data = array(
                'namapaket' => $namapaket,
                'jadwal'    => $jadwal,
                'harga'     => $harga,
                'dp'        => $dp
            );
            $this->gedungModel->insert_data($data, 'dtpaket');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Data Berhasil Ditambahkan!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('admin/dataPaket');
        }
    }
    public function updatedata($id)
    {
        $where = array('idpaket' => $id);
        $data['paket'] = $this->gedungModel->get_data('dtpaket')->result();
        $data['paket'] = $this->db->query("SELECT * FROM dtpaket WHERE idpaket ='$id'")->result();
        $this->load->view('templates_admin/header2');
        $this->load->view('admin/updatePaket', $data);
        $this->load->view('templates_admin/footer2');
    }
    public function updatedataAksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $id         = $this->input->where('idpaket');
            $this->updatedata($id);
        } else {
            $id         = $this->input->post('idpaket');
            $namapaket  = $this->input->post('namapaket');
            $jadwal     = $this->input->post('jadwal');
            $harga      = $this->input->post('harga');
            $dp         = $this->input->post('dp');
            $data = array(
                'namapaket' => $namapaket,
                'jadwal'    => $jadwal,
                'harga'     => $harga,
                'dp'        => $dp
            );
            $where = array('idpaket' => $id);
            $this->gedungModel->update_data('dtpaket', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Data Berhasil Diperbarui!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('admin/dataPaket');
        }
    }
    public function _rules()
    {
        $this->form_validation->set_rules('namapaket', 'Nama Paket', 'required');
        $this->form_validation->set_rules('jadwal', 'Jadwal Acara', 'required');
        $this->form_validation->set_rules('harga', 'Harga Paket', 'required');
        $this->form_validation->set_rules('dp', 'DP', 'required');
    }
    public function hapusData($id)
    {
        $where = array('idpaket' => $id);
        $this->gedungModel->delete_data($where, 'dtpaket');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>Data Berhasil Dihapus!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
        redirect('admin/dataPaket');
    }
    public function detail($id)
    {
        $data['detail'] = $this->gedungModel->ambilidpaket($id);
        $this->load->view('templates_admin/header2');
        $this->load->view('admin/pesan', $data);
        $this->load->view('templates_admin/footer2');
    }
}
