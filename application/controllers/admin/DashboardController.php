<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends CI_Controller {
	
	public function __construct(){
        parent::__construct();

		$this->load->model('admin/DashboardModel');
        $this->load->model('LibraryRMYModel');
	}
	
	public function index()
	{
		$this->LibraryRMYModel->data['totalTransaksi'] = $this->DashboardModel->_totalTransaksi();
		$this->LibraryRMYModel->data['totalSimpananWajib'] = $this->DashboardModel->_totalSimpanan('wajib');
		$this->LibraryRMYModel->data['totalSimpananPokok'] = $this->DashboardModel->_totalSimpanan('pokok');
		$this->LibraryRMYModel->data['totalAnggota'] = $this->DashboardModel->_totalAnggota();
		$this->LibraryRMYModel->data['transaksi'] = $this->DashboardModel->_transaksi();

		$this->load->view('admin/template/header', $this->LibraryRMYModel->data);
		$this->load->view('admin/pages/dashboard');
		$this->load->view('admin/template/footer');
	}
}
