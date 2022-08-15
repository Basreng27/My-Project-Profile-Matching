<?php
class Dosen_model extends CI_Model
{

    function __construct()
    {
        $this->load->database();
    }

    public function ceklogin($data)
    {
        $this->db->select('*');
        $this->db->from('dosen');
        $this->db->where('nidn = ', $data['nidn']);
        $this->db->where('password = ', $data['password']);
        $query = $this->db->get();
        return $query;
    }

    public function getalldosenaktif($status)
    {
        $this->db->select('*');
        $this->db->from('dosen');
        $this->db->where('status', $status);
        $query = $this->db->get();
        return $query;
    }

    public function getalldosentidakaktif($status)
    {
        $this->db->select('*');
        $this->db->from('dosen');
        $this->db->where('status', $status);
        $query = $this->db->get();
        return $query;
    }

    public function getalldosen()
    {
        $this->db->select('*');
        $this->db->from('dosen');
        $query = $this->db->get();
        return $query;
    }

    public function bagi($hasil)
    {
        $this->db->select('*');
        $this->db->set('kuota', $hasil);
        $this->db->where('status =', 'y');
        $this->db->update('dosen');
    }

    public function reset()
    {
        $this->db->select('*');
        $this->db->set('kuota', '0');
        $this->db->update('dosen');
    }

    public function editstatus($nidn, $status)
    {
        $this->db->where('nidn = ', $nidn);
        $this->db->set('status', $status);
        $this->db->update('dosen');
    }

    public function ceknidn($nidn)
    {
        $this->db->select('*');
        $this->db->from('dosen');
        $this->db->where('nidn = ', $nidn);
        $query = $this->db->get();
        return $query;
    }

    public function cekkode($kode)
    {
        $this->db->select('*');
        $this->db->from('dosen');
        $this->db->where('kode = ', $kode);
        $query = $this->db->get();
        return $query;
    }

    public function insertdosen($data)
    {
        $this->db->set('nidn', $data['nidn']);
        $this->db->set('nama', $data['nama']);
        $this->db->set('gelar', $data['gelar']);
        $this->db->set('status', $data['status']);
        $this->db->set('keahlian', $data['gabungkeahlian']);
        $this->db->set('kode', $data['kode']);
        $this->db->set('no_telepon', $data['no_telepon']);
        $this->db->set('password', $data['nidn']);
        $this->db->insert('dosen');
    }

    public function getpembimbing($stat)
    {
        $this->db->order_by('score', 'desc');
        $this->db->select('*');
        $this->db->from('dosen');
        $this->db->where('status =', $stat);
        $query = $this->db->get();
        return $query;
    }

    public function kurang($nidn, $kur)
    {
        $this->db->where('nidn =', $nidn);
        $this->db->set('kuota', $kur);
        $this->db->update('dosen');
    }

    public function getdosen($nidn)
    {
        $this->db->select('*');
        $this->db->from('dosen');
        $this->db->where('nidn = ', $nidn);
        $query = $this->db->get();
        return $query;
    }

    public function namadosen($nidn)
    {
        $this->db->select('nama');
        $this->db->from('dosen');
        $this->db->where('nidn', $nidn);
        $query = $this->db->get();
        return $query;
    }

    public function update_dosen($satu, $data)
    {
        $this->db->where('nidn = ', $satu);
        $this->db->update('dosen', $data);
    }

    public function getonedosen($kode)
    {
        $multi = array('kode' => $kode);

        $this->db->select('*');
        $this->db->from('dosen');
        $this->db->where($multi);
        $query = $this->db->get();
        return $query;
    }

    public function addriwayat($nidn, $riwayat)
    {
        $this->db->where('nidn = ', $nidn);
        $this->db->set('riwayat', $riwayat);
        $this->db->update('dosen');
    }

    public function cekriw($kode)
    {
        $multi = array('kode' => $kode, 'riwayat' => "");

        $this->db->select('riwayat');
        $this->db->from('dosen');
        $this->db->where($multi);
        $query = $this->db->get();
        return $query;
    }
}
