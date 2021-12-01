<?php

class GedungModel extends CI_Model
{
    public function get_data($table)
    {
        return $this->db->get($table);
    }
    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function update_data($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }
    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function cek_login()
    {
        $username = set_value('username');
        $password = set_value('password');

        $result = $this->db
            ->where('username', $username)
            ->where('password', $password)
            ->limit(1)
            ->get('dtuser');

        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return FALSE;
        }
    }
    public function ambilidpaket($id)
    {
        $hasil = $this->db->where('idpaket', $id)->get('dtpaket');
        if ($hasil->num_rows() > 0) {
            return $hasil->result();
        } else {
            return FALSE;
        }
    }
    public function downloadPembayaran($id)
    {
        $query = $this->db->get_where('dtpesan', array('idpesan' => $id));
        return $query->row_array();
    }
    public function cek_tgl($tglacara)
    {
        $this->db->select('*');
        $this->db->where('tglacara', $tglacara);
        return $this->db->get('dtpesan')->num_rows();
    }
    public function get_keyword($keyword)
    {
        return $this->db->query('select * from dtpesan LEFT JOIN dtpaket on dtpesan.idpaket = dtpaket.idpaket LEFT JOIN dtuser on dtpesan.iduser = dtuser.iduser where dtuser.nama LIKE "%' . $keyword . '%"')->result();
    }
}
