<?php
class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url('login'));
		}
	}

	public function index()
	{
		$this->load->view('admin');
	}

	public function preorder()
	{
		$this->load->view('preorder');
	}

	public function deorder()
	{
		$this->load->view('deorder');
	}

	public function laporanPenjualan()
	{
		$this->load->view('laporanPenjualan');
	}

	public function statPenjualan()
	{
		$this->load->view('statPenjualan');
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
}
}
