<?php
class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['paket'] = $this->gedungModel->get_data('dtpaket')->result();
        $this->load->view('templates_customer/header');
        $this->load->view('customer/dashboard', $data);
        $this->load->view('templates_customer/footer');
    }
    public function transaksi()
    {
        $user = $this->session->userdata('iduser');
        $data['pesan'] = $this->db->query("SELECT * FROM dtpesan ps, dtpaket pkt, dtuser cs WHERE ps.idpaket=pkt.idpaket AND ps.iduser=cs.iduser AND cs.iduser='$user' ORDER BY idpesan DESC")->result();
        $this->load->view('templates_customer/header');
        $this->load->view('customer/transaksi', $data);
        $this->load->view('templates_customer/footer');
    }
    public function pembayaran($id)
    {
        $data['pesan'] = $this->db->query("SELECT * FROM dtpesan ps, dtpaket pkt, dtuser cs WHERE ps.idpaket=pkt.idpaket AND ps.iduser=cs.iduser AND ps.idpesan='$id' ORDER BY idpesan DESC")->result();
        $this->load->view('templates_customer/header');
        $this->load->view('customer/pembayaran', $data);
        $this->load->view('templates_customer/footer');
    }
    public function pembayaranaksi()
    {
        $id                             = $this->input->post('idpesan');
        $buktibayar                     = $_FILES['buktibayar']['name'];
        if ($buktibayar) {
            $config['upload_path']      = './assets/upload';
            $config['allowed_types']    = 'jpg|jpeg|png|pdf';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('buktibayar')) {
                $buktibayar = $this->upload->data('file_name');
                $this->db->set('buktibayar', $buktibayar);
            } else {
                echo $this->upload->display_errors();
            }
        }
        $data =  array('buktibayar' => $buktibayar);
        $where = array('idpesan' => $id);

        $this->gedungModel->update_data('dtpesan', $data, $where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Bukti Pembayaran Berhasil Dikirim!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect('customer/dashboard/transaksi');
    }
    public function cetakcek($id)
    {
        $data['pesan'] = $this->db->query("SELECT * FROM dtpesan ps, dtpaket pkt, dtuser cs WHERE ps.idpaket=pkt.idpaket AND ps.iduser=cs.iduser AND ps.idpesan='$id'")->result();
        $this->load->view('customer/cetakcek', $data);
    }
    public function bataltransaksi($id)
    {
        $where = array('idpesan' => $id);
        $this->gedungModel->delete_data($where, 'dtpesan');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>Acara Dibatalkan</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
        redirect('customer/dashboard/transaksi');
    }
    public function detailpaket($id)
    {
        $data['detail'] = $this->gedungModel->ambilidpaket($id);
        $this->load->view('templates_customer/header');
        $this->load->view('customer/dashboard', $data);
        $this->load->view('templates_customer/footer');
    }
}
