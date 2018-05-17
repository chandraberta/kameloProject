<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class preorderform extends CI_Controller{

	private $alert = '';
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');

		$this->load->model('preorder_model');
	}

	public function index(){
		$data['semua'] = $this->preorder_model->all();
		$this->template('preorder',$data);
	}

  public function form(){

			/*$array = array(
              'nama_cust'=>$_POST['nama_cust'],
							'no_hp'=>$_POST['no_hp'],
							'item'=>$_POST['item'],
							'topping'=>$_POST['topping'],
							'jumlah'=>$_POST['jumlah'],
							'tanggal'=>$_POST['tanggal']
		    );*/

        $data = array(
                'nama_cust'=>$this->input->post('nama_cust'),
                'no_hp'=>$this->input->post('no_hp'),
                'id_item'=>$this->input->post('id_item'),
                'id_topping'=>$this->input->post('id_topping'),
                'jumlah'=>$this->input->post('jumlah'),
                'tanggal'=>$this->input->post('tanggal')
              );

      $result = $this->preorder_model->form_insert('preorder',$data);
      if($result >= 1)
      {
        redirect(base_url());
      }

    }
}
