<?php

class DataTransaksi extends CI_Controller
{
    public function index()
    {
        $data['pesan'] = $this->db->query("SELECT * FROM dtpesan ps, dtpaket pkt, dtuser cs WHERE ps.idpaket=pkt.idpaket AND ps.iduser=cs.iduser ORDER BY idpesan DESC")->result();
        $this->load->view('templates_admin/header2');
        $this->load->view('admin/dataTransaksi', $data);
        $this->load->view('templates_admin/footer2');
    }
    public function pembayaran($id)
    {
        $where = array('idpesan' => $id);
        $data['pesan'] = $this->db->query("SELECT * FROM dtpesan WHERE idpesan='$id'")->result();
        $this->load->view('templates_admin/header2');
        $this->load->view('admin/databayar', $data);
        $this->load->view('templates_admin/footer2');
    }
    public function cekbayar()
    {
        $id             = $this->input->post('idpesan');
        $statusbayar     = $this->input->post('statusbayar');

        $data = array('statusbayar'  => $statusbayar);
        $where = array('idpesan'    => $id);

        $this->gedungModel->update_data('dtpesan', $data, $where);
        redirect('admin/dataTransaksi');
    }
    public function downloadbayar($id)
    {
        $this->load->helper('download');
        $filebayar = $this->gedungModel->downloadPembayaran($id);
        $file = 'assets/upload/' . $filebayar['buktibayar'];
        force_download($file, NULL);
    }
    public function selesai($id)
    {
        $where = array('idpesan' => $id);
        $data['pesan'] = $this->db->query("SELECT * FROM dtpesan WHERE idpesan='$id'")->result();
        $this->load->view('templates_admin/header2');
        $this->load->view('admin/bayarselesai', $data);
        $this->load->view('templates_admin/footer2');
    }
    public function cari()
    {
        $keyword = $this->input->post('keyword');
        $data['pesan'] = $this->gedungModel->get_keyword($keyword);
        $this->load->view('templates_admin/header2');
        $this->load->view('admin/dataCari', $data);
        $this->load->view('templates_admin/footer2');
    }
}
