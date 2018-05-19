<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class preorder extends CI_Controller{

	private $alert = '';
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');

		if($this->session->userdata('status') != "login"){
			redirect(base_url('login'));
		}


		$this->load->model('preorder_model');
	}

	public function index(){
		$data['semua'] = $this->preorder_model->all();
		$this->template('preorder',$data);
	}

	private function template($content, $data=null){
		$data['content'] = $this->load->view($content, $data, true);
		$this->load->view('template',$data);
	}

	private function alert($open_tag=null,$close_tag=null,$data=null){
		if($data!=null) $data = $open_tag.$data.$close_tag;
		return $data;
	}

	public function form(){
		if($this->input->post('simpan')){
			$array = array('nama_cust'=>$this->input->post('nama_cust'),
							'no_hp'=>$this->input->post('no_hp'),
							'item'=>$this->input->post('item'),
							'topping'=>$this->input->post('topping'),
							'jumlah'=>$this->input->post('jumlah'),
							'tanggal'=>$this->input->post('tanggal'),
						);

			$result = $this->preorder_model->form_insert('laporan_keuangan',$data);
      if($result >= 1)
      {
        redirect(base_url('laporanPenjualan'));
      }
    }
  }


			/*if($this->input->post('id')==''){
				if($this->preorder_model->insert($array)){
					?>
					<script>window.alert('Sukses Tersimpan');</script>
					<?php
					redirect('produk','refresh');
				}else{
					$this->alert = $this->alert("<p class='alert alert-danger'>","</p>","Gagal Menyimpan");
				}

				}else{
					if($this->preorder_model->update($array,array('id_order'=>$this->input->post('id')))){
					?>
						<script>window.alert('Sukses Tersimpan');</script>data
						<?php
						redirect('produk','refresh');

					} else{
						$this->alert = $this->alert("<p class='alert alert-danger'>","</p","Gagal Menyimpan");
				}
			}

		}
		$data['venus'] = $this->preorder_model->getWhere(array('id_order'=>$this->uri->segment(3)))->row_array();

		$data['alert'] = $this->alert;
		$this->template('produk',$data);*/

	public function hapus(){
			if($this->uri->segment(3)) $this->preorder_model->delete(array('id_order'=>$this->uri->segment(3)));
			redirect('preorder');
		}

	public function terima(){
		if($this->uri->segment(3)) $this->preorder_model->terima(array('id_order'=>$this->uri->segment(3)));
			redirect('preorder');
	}
}
?>
