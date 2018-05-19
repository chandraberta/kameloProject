<?php
class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');

		if($this->session->userdata('status') != "login"){
			redirect(base_url('login'));
		}
	}

	public function index(){
		//$data['semua'] = $this->admin_model->all();
		$this->template('admin');
	}

	private function template($content, $data=null){
		$data['content'] = $this->load->view($content, $data, true);
		$this->load->view('template',$data);
	}

	private function alert($open_tag=null,$close_tag=null,$data=null){
		if($data!=null) $data = $open_tag.$data.$close_tag;
		return $data;
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

	public function promo()
	{
		$this->load->view('promo');
	}

	public function logout(){
		$this->session->unset_userdata('status');
		$this->session->sess_destroy();
		redirect(base_url('login'));
}
}
