<?php


class Halaman extends CI_Controller
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
    }

    public function login()
    {
        if ($this->session->userdata('status') == "login") {
            if ($this->session->userdata('tipe') == "admin") {
                redirect(base_url('home_admin'));
            } else if ($this->session->userdata('tipe') == "dosen") {
                redirect(base_url('home_dosen'));
            }
        }
        $this->load->view('pages/static/login');
    }

    public function proses_login()
    {
        if ($this->session->userdata('status') == "login") {
            if ($this->session->userdata('tipe') == "admin") {
                redirect(base_url('home_admin'));
            } else if ($this->session->userdata('tipe') == "dosen") {
                redirect(base_url('home_dosen'));
            } else {
                redirect(base_url('login'));
            }
        }

        $nidn = $this->input->post('nidn');
        $password = $this->input->post('password');
        $tipe = $this->input->post('tipe');

        $data = array(
            'nidn' => $nidn,
            'password' => $password
        );

        if ($tipe == 'dosen') {
            $cek = $this->Dosen_model->ceklogin($data)->num_rows();
            if ($cek > 0) {
                $data_session = array(
                    'nidn' => $nidn,
                    'tipe' => "dosen",
                    'status' => "login"
                );
                $this->session->set_userdata($data_session);
                redirect(base_url('home_dosen'));
            } else {
                $data['login'] = "salah";
                $this->load->view('pages/static/login', $data);
            }
        } else {
            $cek = $this->Admin_model->cek_login($data)->num_rows();
            if ($cek > 0) {
                $data_session = array(
                    'nidn' => $nidn,
                    'tipe' => "admin",
                    'status' => "login"
                );
                $this->session->set_userdata($data_session);
                redirect(base_url('home_admin'));
            } else {
                $data['login'] = "salah";
                $this->load->view('pages/static/login', $data);
            }
        }
    }

    public function proses_logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}
