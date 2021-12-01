<?php

class DataPenyewa extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->gedungModel->get_data('dtuser')->result();
        $this->load->view('templates_admin/header2');
        $this->load->view('admin/dataPenyewa', $data);
        $this->load->view('templates_admin/footer2');
    }
    public function hapusData($id)
    {
        $where = array('iduser' => $id);
        $this->gedungModel->delete_data($where, 'dtuser');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>Data Berhasil Dihapus!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
        redirect('admin/dataPenyewa');
    }
}
