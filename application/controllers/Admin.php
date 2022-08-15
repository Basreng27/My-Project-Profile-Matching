<?php
class Admin extends CI_Controller
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
        $this->load->model('Admin_model');
        $this->load->model('Dosen_model');
        $this->load->model('Pengajuan_model');
        $this->load->model('Mahasiswa_model');
        $this->load->model('Judul_model');
    }

    public function home()
    {
        if ($this->session->userdata('status') != "login") {
            redirect(base_url('login'));
        } else {
            if ($this->session->userdata('tipe') == "dosen") {
                redirect(base_url('home_dosen'));
            }
        }

        $this->load->view('pages/static/header_admin');
        $this->load->view('pages/admin/home_admin');
        $this->load->view('pages/static/footer');
    }

    public function bagi()
    {
        if ($this->session->userdata('status') != "login") {
            redirect(base_url('login'));
        } else {
            if ($this->session->userdata('tipe') == "dosen") {
                redirect(base_url('home_dosen'));
            }
        }

        $diterima = $this->Pengajuan_model->status('diterima')->num_rows();
        $dosen = $this->Dosen_model->getalldosenaktif('y')->num_rows();

        $hasil = $diterima / $dosen;

        $this->Dosen_model->bagi($hasil);

        redirect(base_url('home_admin'));
    }

    public function reset()
    {
        if ($this->session->userdata('status') != "login") {
            redirect(base_url('login'));
        } else {
            if ($this->session->userdata('tipe') == "dosen") {
                redirect(base_url('home_dosen'));
            }
        }

        $this->Dosen_model->reset();

        redirect(base_url('home_admin'));
    }

    public function daftar_dosen()
    {
        if ($this->session->userdata('status') != "login") {
            redirect(base_url('login'));
        } else {
            if ($this->session->userdata('tipe') == "dosen") {
                redirect(base_url('home_dosen'));
            }
        }

        $data['dosen'] = $this->Dosen_model->getalldosen()->result();

        $this->load->view('pages/static/header_admin');
        $this->load->view('pages/admin/daftar_dosen', $data);
        $this->load->view('pages/static/footer');
    }

    public function proses_status()
    {
        if ($this->session->userdata('status') != "login") {
            redirect(base_url('login'));
        } else {
            if ($this->session->userdata('tipe') == "dosen") {
                redirect(base_url('home_dosen'));
            }
        }

        $data = $this->uri->segment(2);
        $hasil = explode('_', $data);
        $status = $hasil[0];
        $nidn = $hasil[1];

        $this->Dosen_model->editstatus($nidn, $status);

        redirect(base_url('daftar_dosen'));
    }

    public function give_admin()
    {
        if ($this->session->userdata('status') != "login") {
            redirect(base_url('login'));
        } else {
            if ($this->session->userdata('tipe') == "dosen") {
                redirect(base_url('home_dosen'));
            }
        }

        $data = $this->uri->segment(2);
        $hasil = str_replace('%20', ' ', explode('_', $data));
        $nidn = $hasil[1];
        $nama = $hasil[2];
        $password = $hasil[3];

        $this->Admin_model->admin($nidn, $nama, $password);

        redirect(base_url('daftar_dosen'));
    }

    public function give_user()
    {
        if ($this->session->userdata('status') != "login") {
            redirect(base_url('login'));
        } else {
            if ($this->session->userdata('tipe') == "dosen") {
                redirect(base_url('home_dosen'));
            }
        }

        $data = $this->uri->segment(2);
        $hasil = explode('_', "$data");
        $nidn = $hasil[1];

        $this->Admin_model->user($nidn);

        redirect(base_url('daftar_dosen'));
    }

    public function daftar_mahasiswa()
    {
        if ($this->session->userdata('status') != "login") {
            redirect(base_url('login'));
        } else {
            if ($this->session->userdata('tipe') == "dosen") {
                redirect(base_url('home_dosen'));
            }
        }

        $data['mahasiswa'] = $this->Mahasiswa_model->getallmahasiswa()->result();

        $this->load->view('pages/static/header_admin');
        $this->load->view('pages/admin/daftar_mahasiswa', $data);
        $this->load->view('pages/static/footer');
    }

    public function tambah_dosen()
    {
        if ($this->session->userdata('status') != "login") {
            redirect(base_url('login'));
        } else {
            if ($this->session->userdata('tipe') == "dosen") {
                redirect(base_url('home_dosen'));
            }
        }
        $this->load->view('pages/static/header_admin');
        $this->load->view('pages/admin/tambah_dosen');
        $this->load->view('pages/static/footer');
    }

    public function proses_tambah_dosen()
    {
        if ($this->session->userdata('status') != "login") {
            redirect(base_url('login'));
        } else {
            if ($this->session->userdata('tipe') == "dosen") {
                redirect(base_url('home_dosen'));
            }
        }

        $nidn = $this->input->post('nidn');
        $nama = $this->input->post('nama');
        $gelar = $this->input->post('gelar');
        $status = $this->input->post('status');
        $keahlian1 = $this->input->post('keahlian1');
        $keahlian2 = $this->input->post('keahlian2');
        $keahlian3 = $this->input->post('keahlian3');
        $keahlian4 = $this->input->post('keahlian4');
        $keahlian5 = $this->input->post('keahlian5');
        $kode = $this->input->post('kode');
        $no_telepon = $this->input->post('no_telepon');

        //menggabungkang keahlian1-5
        $gabungkeahlian = $keahlian1 . ", " . $keahlian2 . ", " . $keahlian3 . ", " . $keahlian4 . ", " . $keahlian5;

        $data = array(
            'nidn' => $nidn,
            'nama' => $nama,
            'gelar' => $gelar,
            'status' => $status,
            'gabungkeahlian' => $gabungkeahlian,
            'kode' => $kode,
            'no_telepon' => $no_telepon,
            'password' => $nidn
        );

        $ceknidn = $this->Dosen_model->ceknidn($nidn)->num_rows();
        $cekkode = $this->Dosen_model->cekkode($kode)->num_rows();

        if ($ceknidn == 0) {
            if ($cekkode == 0) {
                $this->Dosen_model->insertdosen($data);
                $data['sukses'] = "ada";
                $this->load->view('pages/static/header_admin');
                $this->load->view('pages/admin/tambah_dosen', $data);
                $this->load->view('pages/static/footer');
            } else {
                $data['cekkode'] = "ada";
                $this->load->view('pages/static/header_admin');
                $this->load->view('pages/admin/tambah_dosen', $data);
                $this->load->view('pages/static/footer');
            }
        } else {
            $data['ceknidn'] = "ada";
            $this->load->view('pages/static/header_admin');
            $this->load->view('pages/admin/tambah_dosen', $data);
            $this->load->view('pages/static/footer');
        }
    }

    public function tambah_pengajuan_judul()
    {
        if ($this->session->userdata('status') != "login") {
            redirect(base_url('login'));
        } else {
            if ($this->session->userdata('tipe') == "dosen") {
                redirect(base_url('home_dosen'));
            }
        }
        $this->load->view('pages/static/header_admin');
        $this->load->view('pages/admin/tambah_pengajuan_judul');
        $this->load->view('pages/static/footer');
    }

    public function proses_tambah_pengajuan_judul()
    {
        if ($this->session->userdata('status') != "login") {
            redirect(base_url('login'));
        } else {
            if ($this->session->userdata('tipe') == "dosen") {
                redirect(base_url('home_dosen'));
            }
        }

        $judul = $this->input->post('judul');
        $kategori1 = $this->input->post('kategori1');
        $kategori2 = $this->input->post('kategori2');
        $kategori3 = $this->input->post('kategori3');
        $ta = $this->input->post('ta');
        $semester = $this->input->post('semester');
        $status = $this->input->post('status');
        $nim = $this->input->post('nim');

        // $gabung = $kategori1 . ", " . $kategori3 . ", " . $kategori2;

        $data = array(
            'judul' => $judul,
            'kategori1' => $kategori1,
            'kategori2' => $kategori2,
            'kategori3' => $kategori3,
            'ta' => $ta,
            'semester' => $semester,
            'status' => $status,
            'nim' => $nim
        );


        $this->Pengajuan_model->insertpengajuan($data);

        $data['sukses'] = "ada";
        $this->load->view('pages/static/header_admin');
        $this->load->view('pages/admin/tambah_pengajuan_judul', $data);
        $this->load->view('pages/static/footer');
    }

    public function daftar_proposal()
    {
        if ($this->session->userdata('status') != "login") {
            redirect(base_url('login'));
        } else {
            if ($this->session->userdata('tipe') == "dosen") {
                redirect(base_url('home_dosen'));
            }
        }

        $data['pengajuan'] = $this->Pengajuan_model->getallpengajuan()->result();

        $this->load->view('pages/static/header_admin');
        $this->load->view('pages/admin/daftar_proposal', $data);
        $this->load->view('pages/static/footer');
    }

    public function daftar_judul()
    {
        if ($this->session->userdata('status') != "login") {
            redirect(base_url('login'));
        } else {
            if ($this->session->userdata('tipe') == "dosen") {
                redirect(base_url('home_dosen'));
            }
        }

        $data['judul'] = $this->Judul_model->getalljudul()->result();

        $this->load->view('pages/static/header_admin');
        $this->load->view('pages/admin/daftar_Judul', $data);
        $this->load->view('pages/static/footer');
    }

    public function pemilihan_pembimbing()
    {
        if ($this->session->userdata('status') != "login") {
            redirect(base_url('login'));
        } else {
            if ($this->session->userdata('tipe') == "dosen") {
                redirect(base_url('home_dosen'));
            }
        }

        $data['pengajuan'] = $this->Pengajuan_model->getpengajuanditerima()->result();

        $this->load->view('pages/static/header_admin');
        $this->load->view('pages/admin/pemilihan_pembimbing', $data);
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

    public function pilih_pembimbing()
    {
        if ($this->session->userdata('status') != "login") {
            redirect(base_url('login'));
        } else {
            if ($this->session->userdata('tipe') == "dosen") {
                redirect(base_url('home_dosen'));
            }
        }

        $id_pengajuan = $this->uri->segment(2);
        $kategori = $this->uri->segment(3);
        $kategorii = $this->uri->segment(4);
        $kategoriii = $this->uri->segment(5);

        $newid = str_replace('%20', ' ', $id_pengajuan);

        $data['pengajuan'] = $this->Pengajuan_model->getpengajuan($newid)->result();

        $get_dosen = $this->Dosen_model->getpembimbing('y')->result_array();

        $hasil = $get_dosen;
        foreach ($get_dosen as $key => $list) {
            //seleksi kata ada atau tidak
            $kategori1 = str_replace('%20', ' ', strtolower(trim($kategori)));
            $kategori2 = str_replace('%20', ' ',  strtolower(trim($kategorii)));
            $kategori3 = str_replace('%20', ' ', strtolower(trim($kategoriii)));

            //bobot keahlian
            $keah = $this->trimArray(explode(',', strtolower($list['keahlian'])));

            if (in_array($kategori1, $keah)) {
                $hasil[$key]['bobot_keahlian1'] = 1;
            } else {
                $hasil[$key]['bobot_keahlian1'] = 0;
            }

            if (in_array($kategori2, $keah)) {
                $hasil[$key]['bobot_keahlian2'] = 1;
            } else {
                $hasil[$key]['bobot_keahlian2'] = 0;
            }

            if (in_array($kategori3, $keah)) {
                $hasil[$key]['bobot_keahlian3'] = 1;
            } else {
                $hasil[$key]['bobot_keahlian3'] = 0;
            }

            //bobot riwayat
            $keingin = $this->trimArray(explode(',', strtolower($list['riwayat'])));

            if (in_array($kategori1, $keingin)) {
                $hasil[$key]['bobot_riwayat1'] = 1;
            } else {
                $hasil[$key]['bobot_riwayat1'] = 0;
            }

            if (in_array($kategori2, $keingin)) {
                $hasil[$key]['bobot_riwayat2'] = 1;
            } else {
                $hasil[$key]['bobot_riwayat2'] = 0;
            }

            if (in_array($kategori3, $keingin)) {
                $hasil[$key]['bobot_riwayat3'] = 1;
            } else {
                $hasil[$key]['bobot_riwayat3'] = 0;
            }

            //pembobotan setiap aspek
            $hasil[$key]['pembobotan_keahlian1'] = $hasil[$key]['bobot_keahlian1'] - 1;
            $hasil[$key]['pembobotan_keahlian2'] = $hasil[$key]['bobot_keahlian2'] - 1;
            $hasil[$key]['pembobotan_keahlian3'] = $hasil[$key]['bobot_keahlian3'] - 1;
            $hasil[$key]['pembobotan_riwayat1'] = $hasil[$key]['bobot_riwayat1'] - 1;
            $hasil[$key]['pembobotan_riwayat2'] = $hasil[$key]['bobot_riwayat2'] - 1;
            $hasil[$key]['pembobotan_riwayat3'] = $hasil[$key]['bobot_riwayat3'] - 1;

            //hasil pemetaan gap
            //keahlian
            if ($hasil[$key]['pembobotan_keahlian1'] == 0) {
                $hasil[$key]['hasil_pembobotan_keahlian1'] = 1;
            } else {
                $hasil[$key]['hasil_pembobotan_keahlian1'] = 0;
            }

            if ($hasil[$key]['pembobotan_keahlian2'] == 0) {
                $hasil[$key]['hasil_pembobotan_keahlian2'] = 1;
            } else {
                $hasil[$key]['hasil_pembobotan_keahlian2'] = 0;
            }
            if ($hasil[$key]['pembobotan_keahlian3'] == 0) {
                $hasil[$key]['hasil_pembobotan_keahlian3'] = 1;
            } else {
                $hasil[$key]['hasil_pembobotan_keahlian3'] = 0;
            }

            //riwayat
            if ($hasil[$key]['pembobotan_riwayat1'] == 0) {
                $hasil[$key]['hasil_pembobotan_riwayat1'] = 1;
            } else {
                $hasil[$key]['hasil_pembobotan_riwayat1'] = 0;
            }

            if ($hasil[$key]['pembobotan_riwayat2'] == 0) {
                $hasil[$key]['hasil_pembobotan_riwayat2'] = 1;
            } else {
                $hasil[$key]['hasil_pembobotan_riwayat2'] = 0;
            }

            if ($hasil[$key]['pembobotan_riwayat3'] == 0) {
                $hasil[$key]['hasil_pembobotan_riwayat3'] = 1;
            } else {
                $hasil[$key]['hasil_pembobotan_riwayat3'] = 0;
            }

            //perhitungan core factor dan secondary factor
            //core factor
            $hasil[$key]['perhitungan_cf_keahlian'] = $hasil[$key]['hasil_pembobotan_keahlian1'] + $hasil[$key]['hasil_pembobotan_keahlian2'] + $hasil[$key]['hasil_pembobotan_keahlian3'] / 1;

            //secondary factor
            $hasil[$key]['perhitungan_sf_riwayat'] = $hasil[$key]['hasil_pembobotan_riwayat1'] + $hasil[$key]['hasil_pembobotan_riwayat2'] + $hasil[$key]['hasil_pembobotan_riwayat3'] / 1;

            //perhitungan nilai total (core factor 70% dan secondary factor 30%)
            $hasil[$key]['perhitungan_nilai_total_keahlian'] = ((70 / 100) * $hasil[$key]['perhitungan_cf_keahlian']);
            $hasil[$key]['perhitungan_nilai_total_riwayat'] = ((30 / 100) * $hasil[$key]['perhitungan_sf_riwayat']);

            //perhitungan ranking
            $hasil[$key]['ranking'] = $hasil[$key]['perhitungan_nilai_total_keahlian'] + $hasil[$key]['perhitungan_nilai_total_riwayat'];

            //masukan ke field score
            $this->db->where('nidn = ', $hasil[$key]['nidn']);
            $this->db->set('score', $hasil[$key]['ranking']);
            $this->db->update('dosen');
        }

        // echo "<pre>" . print_r($hasil, true);
        // exit(1);

        $data['dosen'] = $this->Dosen_model->getpembimbing('y')->result();

        $this->load->view('pages/static/header_admin');
        $this->load->view('pages/admin/pilih_pembimbing', $data);
        $this->load->view('pages/static/footer');
    }

    public function proses_pilih_pembimbing()
    {
        if ($this->session->userdata('status') != "login") {
            redirect(base_url('login'));
        } else {
            if ($this->session->userdata('tipe') == "dosen") {
                redirect(base_url('home_dosen'));
            }
        }

        $data = array(
            $GLOBALS = $this->input->post('cancel')
        );

        if ($GLOBALS == "cancel") {
            redirect('pemilihan_pembimbing', 'refresh');
        } else {
            $id_pengajuan = $this->input->post('id_pengajuan');
            $nim = $this->input->post('nim');
            $judul = $this->input->post('judul');
            $ta = $this->input->post('ta');
            $semester = $this->input->post('semester');
            $kode = $this->input->post('kode');
            $nama = $this->input->post('nama');
            $nidn = $this->input->post('nidn');
            $status = $this->input->post('status');
            $kategori1 = $this->input->post('kategori1');
            $kategori2 = $this->input->post('kategori2');
            $kategori3 = $this->input->post('kategori3');

            //$gabung = $kategori1 . ", " . $kategori2 . ", " . $kategori3;

            $cekkuota = $this->input->post('kuota');

            $data = array(
                'nim' => $nim,
                'judul' => $judul,
                'ta' => $ta,
                'semester' => $semester,
                'kode' => $kode,
                'nama' => $nama,
                'status' => $status,
                'kategori1' => $kategori1,
                'kategori2' => $kategori2,
                'kategori3' => $kategori3
            );

            $kuo = $cekkuota - 1;

            $del = array(
                'id_pengajuan' => $id_pengajuan
            );

            $this->Dosen_model->kurang($nidn, $kuo);
            $this->Judul_model->insertjudul($data);
            $this->Pengajuan_model->delete($del);

            redirect(base_url('pemilihan_pembimbing'));
        }
    }

    public function profile_admin()
    {
        if ($this->session->userdata('status') != "login") {
            redirect(base_url('login'));
        } else {
            if ($this->session->userdata('tipe') == "dosen") {
                redirect(base_url('home_dosen'));
            }
        }

        $nip = $this->session->userdata('nidn');

        $data['admin'] = $this->Admin_model->getadmin($nip)->result();

        $this->load->view('pages/static/header_admin');
        $this->load->view('pages/admin/profile_admin', $data);
        $this->load->view('pages/static/footer');
    }

    public function update_profile_admin()
    {
        if ($this->session->userdata('status') != "login") {
            redirect(base_url('login'));
        } else {
            if ($this->session->userdata('tipe') == "dosen") {
                redirect(base_url('home_dossen'));
            }
        }

        $nipp = $this->input->post('nip');
        $nama = $this->input->post('nama');
        $pb = $this->input->post('pb');

        $data = array(
            'nama' => $nama,
            'password' => $pb

        );

        $satu = $nipp;
        $nip = $this->session->userdata('nidn');

        $this->Admin_model->update_admin($satu, $data);
        $data['admin'] = $this->Admin_model->getadmin($nip)->result();
        $data['berhasil'] = "ada";

        $this->load->view('pages/static/header_admin');
        $this->load->view('pages/admin/profile_admin', $data);
        $this->load->view('pages/static/footer');
    }

    public function tambah_kategori()
    {
        if ($this->session->userdata('status') != "login") {
            redirect(base_url('login'));
        } else {
            if ($this->session->userdata('tipe') == "dosen") {
                redirect(base_url('home_dosen'));
            }
        }

        $data['kategorii'] = $this->Admin_model->getkategori()->result();

        $this->load->view('pages/static/header_admin');
        $this->load->view('pages/admin/tambah_kategori', $data);
        $this->load->view('pages/static/footer');
    }

    public function proses_tambah_kategori()
    {
        if ($this->session->userdata('status') != "login") {
            redirect(base_url('login'));
        } else {
            if ($this->session->userdata('tipe') == "dosen") {
                redirect(base_url('home_dosen'));
            }
        }

        $kategori = $this->input->post('kategori');

        $data = array(
            'kategori' => $kategori
        );

        $cekkategori = $this->Admin_model->cekkategori($kategori)->num_rows();
        $data['kategorii'] = $this->Admin_model->getkategori()->result();

        if ($cekkategori == 0) {
            $this->Admin_model->insertkategori($data);
            $data['cekkategorisukses'] = "ada";
            $this->load->view('pages/static/header_admin');
            $this->load->view('pages/admin/tambah_kategori', $data);
            $this->load->view('pages/static/footer');
        } else {
            $data['cekkategori'] = "ada";
            $this->load->view('pages/static/header_admin');
            $this->load->view('pages/admin/tambah_kategori', $data);
            $this->load->view('pages/static/footer');
        }
    }
}
