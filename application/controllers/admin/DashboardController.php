<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends CI_Controller {
	
	public function index()
	{
		$this->load->view('admin/template/header');
		$this->load->view('admin/pages/dashboard');
		$this->load->view('admin/template/footer');
	}
}
