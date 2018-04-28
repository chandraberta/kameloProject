<?php
class Admin extends CI_Controller {

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
}
