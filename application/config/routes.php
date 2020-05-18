<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
$route['default_controller'] = 'ProdukController/daftarProduk';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['admin/dashboard'] = 'admin/DashboardController/index';

$route['admin/produk/daftar-produk'] = 'admin/ProdukController/daftarProduk';
$route['admin/produk/daftar-produk/(:num)'] = 'admin/ProdukController/daftarProduk/$1';
$route['admin/produk/daftar-produk/create'] = 'admin/ProdukController/createProduk';
$route['admin/produk/daftar-produk/delete/(:num)'] = 'admin/ProdukController/deleteProduk/$1';

$route['admin/produk/daftar-kategori'] = 'admin/KategoriController/daftarKategori';
$route['admin/produk/daftar-kategori/(:num)'] = 'admin/KategoriController/daftarKategori/$1';
$route['admin/produk/daftar-kategori/create'] = 'admin/KategoriController/createKategori';
$route['admin/produk/daftar-kategori/delete/(:num)'] = 'admin/KategoriController/deleteKategori/$1';

$route['admin/produk/riwayat-produk-terjual'] = 'admin/ProdukController/riwayatProdukTerjual';

$route['admin/anggota/daftar-anggota'] = 'admin/AnggotaController/daftarAnggota';
$route['admin/anggota/daftar-anggota/(:num)'] = 'admin/AnggotaController/daftarAnggota/$1';
$route['admin/anggota/daftar-anggota/create'] = 'admin/AnggotaController/createAnggota';
$route['admin/anggota/daftar-anggota/delete/(:num)'] = 'admin/AnggotaController/deleteAnggota/$1';

$route['admin/transaksi/daftar-transaksi'] = 'admin/TransaksiController/daftarTransaksi';

$route['admin/anggota/daftar-simpanan-wajib'] = 'admin/SimpananController/daftarSimpananWajib';
$route['admin/anggota/daftar-simpanan-wajib/create'] = 'admin/SimpananController/createSimpananWajib';
$route['admin/anggota/daftar-simpanan-pokok'] = 'admin/SimpananController/daftarSimpananPokok';
$route['admin/anggota/daftar-simpanan-pokok/create'] = 'admin/SimpananController/createSimpananPokok';

$route['admin'] = 'admin/LoginController/setLogin';
$route['admin/login'] = 'admin/LoginController/setLogin';
$route['admin/logout'] = 'admin/LoginController/setLogout';

$route['daftar-produk'] = 'ProdukController/daftarProduk';
$route['daftar-produk/(:num)'] = 'ProdukController/daftarProduk/$1';
$route['daftar-produk/kategori/(:num)'] = 'ProdukController/daftarProdukKategori/$1';
$route['daftar-produk/kategori/(:num)/(:num)'] = 'ProdukController/daftarProdukKategori/$1/$2';

$route['daftar-produk/login'] = 'LoginController/setLogin';
$route['daftar-produk/logout'] = 'LoginController/setLogout';

$route['daftar-keranjang'] = 'ProdukController/daftarKeranjang';
$route['keranjang/view/(:num)'] = 'ProdukController/daftarKeranjang/$1';
$route['keranjang/(:num)'] = 'ProdukController/setKeranjang/$1';

$route['transaksi'] = 'ProdukController/setTransaksi';
$route['daftar-keranjang/delete/(:num)'] = 'ProdukController/deleteKeranjang/$1';

$route['daftar-produk/create'] = 'admin/ProdukController/createProduk';
$route['daftar-produk/delete/(:num)'] = 'admin/ProdukController/deleteProduk/$1';

$route['simpanan'] = 'ProdukController/daftarSimpanan';

$route['tentang'] = 'ProdukController/tentang';

$route['daftar-anggota'] = 'ProdukController/daftarAnggota';
$route['daftar-anggota/(:num)'] = 'ProdukController/daftarAnggota/$1';