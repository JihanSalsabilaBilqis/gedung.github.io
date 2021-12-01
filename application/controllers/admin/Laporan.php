<?php
class Laporan extends CI_Controller
{
    public function index()
    {
        $dari = $this->input->post('dari');
        $sampai = $this->input->post('sampai');
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates_admin/header2');
            $this->load->view('admin/laporan');
            $this->load->view('templates_admin/footer2');
        } else {
            // $data['lapor'] = $this->db->query("SELECT * FROM dtpesan ps, dtpaket pt, dtuser pn WHERE ps.idpesan=pt.idpaket AND ps.iduser=pn.iduser AND date(tglkontrak) >= '$dari' AND date(tglkontrak) <= '$sampai'")->result();
            $data['lapor'] = $this->db->query("SELECT * FROM dtpesan ps LEFT JOIN dtpaket pt ON ps.idpaket=pt.idpaket LEFT JOIN dtuser pn ON ps.iduser=pn.iduser WHERE ps.tglkontrak BETWEEN '$dari' AND '$sampai'")->result();
            $this->load->view('templates_admin/header2');
            $this->load->view('admin/dataLaporan', $data);
            $this->load->view('templates_admin/footer2');
        }
    }
    public function cetakLaporan()
    {
        $dari = $this->input->get('dari');
        $sampai = $this->input->get('sampai');
        $data['title'] = "Cetak Laporan Transaksi";
        $data['lapor'] = $this->db->query("SELECT * FROM dtpesan ps LEFT JOIN dtpaket pt ON ps.idpaket=pt.idpaket LEFT JOIN dtuser pn ON ps.iduser=pn.iduser WHERE ps.tglkontrak BETWEEN '$dari' AND '$sampai'")->result();
        $this->load->view('templates_admin/header2', $data);
        $this->load->view('admin/cetakLaporan', $data);
    }
    public function _rules()
    {
        $this->form_validation->set_rules('dari', 'Dari Tanggal', 'required');
        $this->form_validation->set_rules('sampai', 'Sampai Tanggal', 'required');
    }
}
