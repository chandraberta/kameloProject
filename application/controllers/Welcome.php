<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index($id, $tanggal, $judul, $deskripsi, $gambar)
	{
		//$this->load->view('beli');
		$this->load->model('promo_model');
		$promo = $this->promo_model->getPromo('id',1); //array of members
		$this->load->view('beli',$promo);

	}

	function promo(){
	  $promo = $this->promo_model->getPromo(); //array of members

	}

        public function test() {
             $this->load->library('unitTest');
        }



}
