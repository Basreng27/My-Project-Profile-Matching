<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Halaman/login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//login
$route['login'] = 'Halaman/login';
$route['proses_login'] = 'Halaman/proses_login';
$route['logout'] = 'Halaman/proses_logout';

//Admin
$route['home_admin'] = 'Admin/home';
$route['daftar_dosen'] = 'Admin/daftar_dosen';
$route['daftar_mahasiswa'] = 'Admin/daftar_mahasiswa';
$route['daftar_proposal'] = 'Admin/daftar_proposal';
$route['daftar_judul'] = 'Admin/daftar_judul';
$route['pemilihan_pembimbing'] = 'Admin/pemilihan_pembimbing';
$route['pilih_pembimbing'] = 'Admin/pilih_pembimbing';
$route['pilih_pembimbing/(:any)/(:any)/(:any)/(:any)'] = 'Admin/pilih_pembimbing/$1/$2/$3/$4';
$route['tambah_dosen'] = 'Admin/tambah_dosen';
$route['proses_tambah_dosen'] = 'Admin/proses_tambah_dosen';
$route['proses_status'] = 'Admin/proses_status';
$route['proses_status/(:any)'] = 'Admin/proses_status/$1';
$route['bagi'] = 'Admin/bagi';
$route['reset'] = 'Admin/reset';
$route['profile_admin'] = 'Admin/profile_admin';
$route['update_profile_admin'] = 'Admin/update_profile_admin';
$route['proses_pilih_pembimbing'] = 'Admin/proses_pilih_pembimbing';
$route['tambah_pengajuan_judul'] = 'Admin/tambah_pengajuan_judul';
$route['proses_tambah_pengajuan_judul'] = 'Admin/proses_tambah_pengajuan_judul';
$route['give_admin'] = 'Admin/give_admin';
$route['give_admin/(:any)'] = 'Admin/give_admin/$1';
$route['give_user'] = 'Admin/give_user';
$route['give_user/(:any)'] = 'Admin/give_user/$1';
$route['tambah_kategori'] = 'Admin/tambah_kategori';
$route['proses_tambah_kategori'] = 'Admin/proses_tambah_kategori';


//Print
// $route['print_judul'] = 'Pdf/print_judul';
// $route['bimbingan'] = 'Pdf/bimbingan';
// $route['lulus'] = 'Pdf/lulus';
// $route['membimbing'] = 'Pdf/membimbing';
// $route['m_bimbingan'] = 'Pdf/m_bimbingan';
// $route['m_lulus'] = 'Pdf/m_lulus';

//Dosen
$route['home_dosen'] = 'Dosen/home';
$route['daftar_membimbing'] = 'Dosen/daftar_membimbing';
$route['proses_lulus'] = 'Dosen/proses_lulus';
$route['proses_lulus/(:any)/(:any)/(:any)/(:any)'] = 'Dosen/proses_lulus/$1/$2/$3/$4';
$route['profile_dosen'] = 'Dosen/profile_dosen';
$route['update_profile_dosen'] = 'Dosen/update_profile_dosen';
$route['edit_progres'] = 'Dosen/edit_progres';
$route['edit_progres/(:any)'] = 'Dosen/edit_progres/$1';
$route['proses_edit_progres'] = 'Dosen/proses_edit_progres';
