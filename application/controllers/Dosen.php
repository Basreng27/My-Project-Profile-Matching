<?php
class Dosen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('upload');
        $this->load->helper('url_helper');
        $this->load->helper('text');
        $this->load->helper('date');
        $this->load->library('pagination');
        $this->load->model('Mahasiswa_model');
        $this->load->model('Admin_model');
        $this->load->model('Dosen_model');
        $this->load->model('Pengajuan_model');
        $this->load->model('Judul_model');
    }

    public function home()
    {
        if ($this->session->userdata('status') != "login") {
            redirect(base_url('login'));
        } else {
            if ($this->session->userdata('tipe') == "admin") {
                redirect(base_url('home_admin'));
            }
        }
        $nidn = $this->session->userdata('nidn');

        $data['dosen'] = $this->Dosen_model->getdosen($nidn)->result();

        $this->load->view('pages/static/header_dosen');
        $this->load->view('pages/dosen/home_dosen', $data);
        $this->load->view('pages/static/footer');
    }

    public function daftar_membimbing()
    {
        if ($this->session->userdata('status') != "login") {
            redirect(base_url('login'));
        } else {
            if ($this->session->userdata('tipe') == "admin") {
                redirect(base_url('home_admin'));
            }
        }

        $nidn = $this->session->userdata('nidn');
        $kode = $this->Judul_model->membimbing($nidn)->row();

        $data['judul'] = $this->Judul_model->allstatusjudul($kode->kode)->result();

        $this->load->view('pages/static/header_dosen');
        $this->load->view('pages/dosen/daftar_membimbing', $data);
        $this->load->view('pages/static/footer');
    }

    function trimArray($array)
    {
        $tampung = [];
        foreach ($array as $key => $list) {
            $tampung[$key] = trim($list);
        }

        return $tampung;
    }

    public function proses_lulus()
    {
        if ($this->session->userdata('status') != "login") {
            redirect(base_url('login'));
        } else {
            if ($this->session->userdata('tipe') == "admin") {
                redirect(base_url('home_admin'));
            }
        }

        $data = $this->uri->segment(2);
        $kategori = $this->uri->segment(3);
        $kategorii = $this->uri->segment(4);
        $kategoriii = $this->uri->segment(5);

        $hasil = explode('_', $data);

        $status = $hasil[0];
        $id = $hasil[1];

        $nidn = $this->session->userdata('nidn');
        $kode = $this->Judul_model->membimbing($nidn)->row();

        $getdatadosen = $this->Dosen_model->getonedosen($kode->kode)->result_array();

        $final = $getdatadosen;

        foreach ($getdatadosen as $key => $list) {
            //seleksi kata ada atau tidak
            $kategori1 = str_replace('%20', ' ', strtolower(trim($kategori)));
            $kategori2 = str_replace('%20', ' ', strtolower(trim($kategorii)));
            $kategori3 = str_replace('%20', ' ', strtolower(trim($kategoriii)));

            //cek sudah ada atau tidak
            $riw = $this->trimArray(explode(',', strtolower($list['riwayat'])));
            if (in_array($kategori1, $riw)) {
                $final[$key]['addriwayat1'] = "";
            } elseif ($kategori1 == strtolower("Lainnya")) {
                $final[$key]['addriwayat1'] = "";
            } else {
                $final[$key]['addriwayat1'] = ", " . ucfirst($kategori1);
            }

            if (in_array($kategori2, $riw)) {
                $final[$key]['addriwayat2'] = "";
            } elseif ($kategori2 == strtolower("Lainnya")) {
                $final[$key]['addriwayat2'] = "";
            } else {
                $final[$key]['addriwayat2'] = ", " . ucfirst($kategori2);
            }

            if (in_array($kategori3, $riw)) {
                $final[$key]['addriwayat3'] = "";
            } elseif ($kategori3 == strtolower("Lainnya")) {
                $final[$key]['addriwayat3'] = "";
            } else {
                $final[$key]['addriwayat3'] = ", " . ucfirst($kategori3);
            }

            $final[$key]['allriwayat'] =  $list['riwayat'] . $final[$key]['addriwayat1'] . $final[$key]['addriwayat2'] . $final[$key]['addriwayat3'];

            //masukan ke field riwayat
            $this->db->where('nidn = ', $final[$key]['nidn']);
            $this->db->set('riwayat', $final[$key]['allriwayat']);
            $this->db->update('dosen');
        }
        // echo "<pre>" . print_r($final, true);
        // exit(1);

        $this->Judul_model->statuslulus($id, $status);

        redirect(base_url('daftar_membimbing'));
    }

    public function profile_dosen()
    {
        if ($this->session->userdata('status') != "login") {
            redirect(base_url('login'));
        } else {
            if ($this->session->userdata('tipe') == "admin") {
                redirect(base_url('home_admin'));
            }
        }

        $nip = $this->session->userdata('nidn');

        $data['dosen'] = $this->Dosen_model->getdosen($nip)->result();

        $this->load->view('pages/static/header_dosen');
        $this->load->view('pages/dosen/profile_dosen', $data);
        $this->load->view('pages/static/footer');
    }

    public function update_profile_dosen()
    {
        if ($this->session->userdata('status') != "login") {
            redirect(base_url('login'));
        } else {
            if ($this->session->userdata('tipe') == "admin") {
                redirect(base_url('home_admin'));
            }
        }

        $nidn = $this->input->post('nidn');
        $nama = $this->input->post('nama');
        $gelar = $this->input->post('gelar');
        $pendidikan_terakhir = $this->input->post('pendidikan_terakhir');
        $keahlian = $this->input->post('keahlian');
        $kode = $this->input->post('kode');
        $no_telepon = $this->input->post('no_telepon');
        $riwayat = $this->input->post('riwayat');
        $pb = $this->input->post('pb');

        $data = array(
            'nama' => $nama,
            'gelar' => $gelar,
            'pendidikan_terakhir' => $pendidikan_terakhir,
            'keahlian' => $keahlian,
            'kode' => $kode,
            'no_telepon' => $no_telepon,
            'riwayat' => $riwayat,
            'password' => $pb

        );

        $satu = $nidn;
        $nip = $this->session->userdata('nidn');

        $this->Dosen_model->update_dosen($satu, $data);
        $data['dosen'] = $this->Dosen_model->getdosen($nip)->result();
        $data['berhasil'] = "ada";

        $this->load->view('pages/static/header_dosen');
        $this->load->view('pages/dosen/profile_dosen', $data);
        $this->load->view('pages/static/footer');
    }

    public function edit_progres()
    {
        if ($this->session->userdata('status') != "login") {
            redirect(base_url('login'));
        } else {
            if ($this->session->userdata('tipe') == "admin") {
                redirect(base_url('home_admin'));
            }
        }

        $id = $this->uri->segment(2);
        $newidjudul = str_replace('%20', ' ', $id);

        $data['judul'] = $this->Judul_model->editprogres($newidjudul)->result();

        $this->load->view('pages/static/header_dosen');
        $this->load->view('pages/dosen/edit_progres', $data);
        $this->load->view('pages/static/footer');
    }

    public function proses_edit_progres()
    {
        if ($this->session->userdata('status') != "login") {
            redirect(base_url('login'));
        } else {
            if ($this->session->userdata('tipe') == "admin") {
                redirect(base_url('home_admin'));
            }
        }

        $data = array(
            $GLOBALS = $this->input->post('cancel')
        );

        if ($GLOBALS == "cancel") {
            redirect('daftar_membimbing', 'refresh');
        } else {
            $progres = $this->input->post('progres');
            $id = $this->input->post('id');

            $this->Judul_model->updateprogres($id, $progres);

            redirect(base_url('daftar_membimbing'));
        }
    }
}
