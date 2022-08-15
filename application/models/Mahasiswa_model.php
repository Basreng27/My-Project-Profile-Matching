<?php

class Mahasiswa_model extends CI_Model
{

    function __construct()
    {
        $this->load->database();
    }

    public function getallmahasiswa()
    {
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $query = $this->db->get();
        return $query;
    }

    public function cari()
    {
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $query = $this->db->get();
        return $query;
    }
}
