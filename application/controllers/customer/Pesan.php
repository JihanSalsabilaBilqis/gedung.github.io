<?php

class Pesan extends CI_Controller
{
    public function tambahpesan($id)
    {
        $data['booking'] = $this->db->query("SELECT * FROM dtpesan")->result();
        $data['pesan'] = $this->gedungModel->ambilidpaket($id);
        $this->load->view('customer/pesan', $data);
        $this->load->view('templates_customer/footer');
    }
    public function tambahpesanAksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('customer/pesan');
            $this->load->view('templates_customer/footer');
        } else {
            $iduser     = $this->session->userdata('iduser');
            $idpaket    = $this->input->post('idpaket');
            $namapaket  = $this->input->post('namapaket');
            $harga      = $this->input->post('harga');
            $dp         = $this->input->post('dp');
            $acara      = $this->input->post('acara');
            $waktu      = $this->input->post('waktu');
            $tglkontrak = $this->input->post('tglkontrak');
            $tglacara   = $this->input->post('tglacara');

            $cek = $this->gedungModel->cek_tgl($tglacara);
            if ($cek != 0) {
                $this->session->set_flashdata('pesan-alert', '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Tanggal telah dibooking. Silahkan pilih tanggal lain.</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

                //redirect halaman daftar pesanan
                redirect('customer/pesan/tambahpesan/' . $this->input->post('idpaket'));
            } else {
                $data = array(
                    'iduser'        => $iduser,
                    'idpaket'       => $idpaket,
                    'namapaket'     => $namapaket,
                    'harga'         => $harga,
                    'dp'            => $dp,
                    'acara'         => $acara,
                    'waktu'         => $waktu,
                    'tglkontrak'    => $tglkontrak,
                    'tglacara'      => $tglacara,
                );
                $this->gedungModel->insert_data($data, 'dtpesan');
                $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Gedung Telah Dipesan</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

                //redirect halaman riwayat pesanan
                redirect('customer/dashboard/transaksi');
            }
        }
    }
    public function _rules()
    {
        $this->form_validation->set_rules('acara', 'acara', 'required');
        $this->form_validation->set_rules('waktu', 'waktu', 'required');
        $this->form_validation->set_rules('tglkontrak', 'Tanggal Kontrak', 'required');
        $this->form_validation->set_rules('tglacara', 'Tanggal Pelaksanaan', 'required');
    }
}
