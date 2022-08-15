<?php
class Admin_model extends CI_Model
{

    function __construct()
    {
        $this->load->database();
    }

    public function cek_login($data)
    {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('nip = ', $data['nidn']);
        $this->db->where('password = ', $data['password']);
        $query = $this->db->get();
        return $query;
    }

    public function nama($nip)
    {
        $this->db->select('nama');
        $this->db->from('admin');
        $this->db->where('nip', $nip);
        $query = $this->db->get();
        return $query;
    }

    public function hak($hak)
    {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('nip = ', $hak);
        $query = $this->db->get();
        return $query;
    }

    public function admin($nidn, $nama, $password)
    {
        $this->db->set('nip', $nidn);
        $this->db->set('nama', $nama);
        $this->db->set('password', $password);
        $this->db->insert('admin');
    }

    public function user($nidn)
    {
        $this->db->where('nip', $nidn);
        $this->db->delete('admin');
    }

    public function getadmin($nip)
    {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('nip = ', $nip);
        $query = $this->db->get();
        return $query;
    }

    public function cekpassword($satu)
    {
        $this->db->select('password');
        $this->db->from('admin');
        $this->db->where('nip = ', $satu);
        $query = $this->db->get();
        return $query;
    }

    public function update_admin($satu, $data)
    {
        $this->db->where('nip = ', $satu);
        $this->db->update('admin', $data);
    }

    public function getkategori()
    {
        $this->db->select('*');
        $this->db->from('kategori');
        $query = $this->db->get();
        return $query;
    }

    public function cekkategori($kategori)
    {
        $this->db->select('*');
        $this->db->from('kategori');
        $this->db->where('kategori = ', $kategori);
        $query = $this->db->get();
        return $query;
    }

    public function insertkategori($data)
    {
        $this->db->set('kategori', $data['kategori']);
        $this->db->insert('kategori');
    }
}
