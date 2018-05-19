<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class statPenjualan extends CI_Controller{

	private $alert = '';
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');

		if($this->session->userdata('status') != "login"){
			redirect(base_url('login'));
		}


		$this->load->model('statPenjualan_model');
	}

	public function index(){
		$data['semua'] = $this->statPenjualan_model->all();
		$this->template('statPenjualan',$data);
		$data['report'] = $this->statPenjualan_model->report();
		$this->load->view('statPenjualan', $data);


	}

	private function template($content, $data=null){
		$data['content'] = $this->load->view($content, $data, true);
		$this->load->view('template',$data);
	}

	private function alert($open_tag=null,$close_tag=null,$data=null){
		if($data!=null) $data = $open_tag.$data.$close_tag;
		return $data;
	}


}
