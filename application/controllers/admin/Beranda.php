<?php
class Beranda extends CI_Controller
{
    public function index()
    {
        $paket = $this->db->query("SELECT * FROM dtpaket");
        $data['paket'] = $paket->num_rows();
        $sewa = $this->db->query("SELECT * FROM dtpesan");
        $data['sewa'] = $sewa->num_rows();
        $bayar = $this->db->query("SELECT * FROM dtpesan");
        $data['bayar'] = $bayar->num_rows();
        $user = $this->db->query("SELECT * FROM dtuser");
        $data['user'] = $user->num_rows();
        $data['pesan'] = $this->db->query("SELECT * FROM dtpesan ps, dtpaket pkt, dtuser cs WHERE ps.idpaket=pkt.idpaket AND ps.iduser=cs.iduser ORDER BY idpesan DESC")->result();
        $this->load->view('templates_admin/header2');
        $this->load->view('admin/beranda', $data);
        $this->load->view('templates_admin/footer2');
    }
}
