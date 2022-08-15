<?php

class Judul_model extends CI_Model
{

    function __construct()
    {
        $this->load->database();
    }

    public function getalljudul()
    {
        $this->db->select('*');
        $this->db->from('judul');
        $query = $this->db->get();
        return $query;
    }

    public function insertjudul($data)
    {
        $this->db->set('nim', $data['nim']);
        $this->db->set('judul', $data['judul']);
        $this->db->set('ta', $data['ta']);
        $this->db->set('semester', $data['semester']);
        $this->db->set('kode', $data['kode']);
        $this->db->set('nama', $data['nama']);
        $this->db->set('status', $data['status']);
        $this->db->set('kategori1', $data['kategori1']);
        $this->db->set('kategori2', $data['kategori2']);
        $this->db->set('kategori3', $data['kategori3']);
        $this->db->insert('judul');
    }

    public function membimbing($nidn)
    {
        $this->db->select('kode');
        $this->db->from('dosen');
        $this->db->where('nidn', $nidn);
        $query = $this->db->get();
        return $query;
    }

    public function statusjudul($kode, $status)
    {
        $multi = array('kode' => $kode, 'status' => $status);

        $this->db->select('*');
        $this->db->from('judul');
        $this->db->where($multi);
        $query = $this->db->get();
        return $query;
    }

    public function allstatusjudul($kode)
    {
        $multi = array('kode' => $kode);

        $this->db->select('*');
        $this->db->from('judul');
        $this->db->where($multi);
        $query = $this->db->get();
        return $query;
    }

    public function statuslulus($id, $status)
    {
        $this->db->where('id = ', $id);
        $this->db->set('status', $status);
        $this->db->update('judul');
    }

    public function editprogres($newidjudul)
    {
        $this->db->select('*');
        $this->db->from('judul');
        $this->db->where('id', $newidjudul);
        $query = $this->db->get();
        return $query;
    }

    public function updateprogres($idjudul, $progres)
    {
        $this->db->where('id = ', $idjudul);
        $this->db->set('progres', $progres);
        $this->db->update('judul');
    }
}
