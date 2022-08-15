<?php

class Pengajuan_model extends CI_Model
{

    function __construct()
    {
        $this->load->database();
    }

    public function status($status)
    {
        $this->db->select('*');
        $this->db->from('pengajuan');
        $this->db->where('status', $status);
        $query = $this->db->get();
        return $query;
    }

    public function insertpengajuan($data)
    {
        $this->db->set('judul', $data['judul']);
        $this->db->set('kategori1', $data['kategori1']);
        $this->db->set('kategori2', $data['kategori2']);
        $this->db->set('kategori3', $data['kategori3']);
        $this->db->set('ta', $data['ta']);
        $this->db->set('semester', $data['semester']);
        $this->db->set('status', $data['status']);
        $this->db->set('nim', $data['nim']);
        $this->db->insert('pengajuan');
    }

    public function getallpengajuan()
    {
        $this->db->select('*');
        $this->db->from('pengajuan');
        $this->db->where('status =', 'diterima');
        $query = $this->db->get();
        return $query;
    }

    public function getpengajuanditerima()
    {
        $this->db->select('*');
        $this->db->from('pengajuan');
        $this->db->where('status', 'diterima');
        $query = $this->db->get();
        return $query;
    }


    public function getpengajuan($newid)
    {
        $this->db->select('*');
        $this->db->from('pengajuan');
        $this->db->where('id_pengajuan = ', $newid);
        $query = $this->db->get();
        return $query;
    }

    public function delete($del)
    {
        $this->db->where($del);
        $this->db->delete('pengajuan');
    }
}
