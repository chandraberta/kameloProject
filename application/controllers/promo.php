<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Promo extends CI_Controller{

	private $alert = '';
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('promo_model');
	}

	public function index(){
		$data['semua'] = $this->promo_model->all();
		$this->template('promo',$data);
	}

	private function template($content, $data=null){
		$data['content'] = $this->load->view($content, $data, true);
		$this->load->view('template',$data);
	}

	private function alert($open_tag=null,$close_tag=null,$data=null){
		if($data!=null) $data = $open_tag.$data.$close_tag;
		return $data;
	}

	function promo(){
	  $promo = $this->promo_model->getPromo(); //array of members
	  return $promo;
	}

	public function form(){
		// if($this->input->post('submit')){

            //Check whether user upload picture
            if(!empty($_FILES['picture']['name'])){
                $config['upload_path'] = 'assets/img/upload/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['gambar']['name'];

                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);

                if($this->upload->do_upload('gambar')){
                    $uploadData = $this->upload->data();
                    $gambar = $uploadData['file_name'];
                }else{
                    $gambar = '';
                }
            }else{
                $gambar = '';
            }
		$data = array(
						'tanggal'=>$this->input->post('tanggal'),
						'judul'=>$this->input->post('judul'),
						'deskripsi'=>$this->input->post('deskripsi'),
						'gambar'=>$gambar

					);

		$result = $this->promo_model->form_update('promo',$data);
		if($result >= 1)
		{
			redirect('promo');
		}




		//$data['venus'] = $this->produkModel->getWhere(array('id_produk'=>$this->uri->segment(3)))->row_array();

		$data['alert'] = $this->alert;
		$this->template('form',$data);

		}


	public function hapus(){
			if($this->uri->segment(3)) $this->promo_model->delete(array('id_order'=>$this->uri->segment(3)));
			redirect('promo');
		}

				// Initializing Error Variables To Null.
		/*$nameError ="";
		$numberError ="";
		// This code block will execute when form is submitted
		if(isset($_POST['submit'])){
		/*--------------------------------------------------------------
		Fetch name value from URL and Sanitize it
		--------------------------------------------------------------*/
		/*if($_POST['name'] != ""){
		// Sanitizing name value of type string
			$_POST['name'] = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
			$nameError = "<span class="valid">"".$_POST['name']."" </span>is Sanitized an Valid name.";
			if ($_POST['name'] == ""){
			$nameError = "<span class="invalid">Please enter a valid name.</span>";
			}
		}
		else {
			$nameError = "<span class="invalid">Please enter your name.</span>";
		}

		if ($_POST['number'] != ""){
				$_POST['number'] = filter_var($_POST['number'], FILTER_VALIDATE_INT)
    		echo("Integer is valid");
		} else {
		    echo("Integer is not valid");
		}*/
}
