<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class deorderform extends CI_Controller{

	private $alert = '';
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');

		$this->load->model('deorder_model');
	}

	public function index(){
		$data['semua'] = $this->deorder_model->all();
		$this->template('deorder',$data);
	}

  public function form(){

			

        $data = array(
                'nama_cust'=>$this->input->post('nama_cust'),
                'no_hp'=>$this->input->post('no_hp'),
                'id_item'=>$this->input->post('id_item'),
                'id_topping'=>$this->input->post('id_topping'),
                'jumlah'=>$this->input->post('jumlah'),
                'tanggal'=>$this->input->post('tanggal'),
                'alamat' =>$this->input->post('alamat')
              );

      $result = $this->deorder_model->form_insert('deorder',$data);
      if($result >= 1)
      {
        redirect(base_url());
      }

    }
}
