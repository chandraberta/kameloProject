<?php
class Deorder extends CI_Controller{
	
	private $alert = '';
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');

		if($this->session->userdata('status') != "login"){
			redirect(base_url('login'));
		}

		$this->load->model('deorder_model');

	}

	public function index(){
		$data['semua'] = $this->deorder_model->all();
		$this->template('deorder',$data);
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
			$array = array('nama_produk'=>$this->input->post('nama_produk'),
							'brand'=>$this->input->post('brand'),
							'deskripsi'=>$this->input->post('deskripsi'),
							'barcode'=>$this->input->post('barcode'),
							'harga'=>$this->input->post('harga'),
						);

			if($this->input->post('id')==''){
				if($this->produkModel->insert($array)){
					?>
					<script>window.alert('Sukses Tersimpan');</script>
					<?php
					redirect('produk','refresh');
				}else{
					$this->alert = $this->alert("<p class='alert alert-danger'>","</p>","Gagal Menyimpan");
				}

				}else{
					if($this->produkModel->update($array,array('id_produk'=>$this->input->post('id')))){
					?>
						<script>window.alert('Sukses Tersimpan');</script>data
						<?php 
						redirect('produk','refresh');

					} else{
						$this->alert = $this->alert("<p class='alert alert-danger'>","</p","Gagal Menyimpan");
				}
			}

		}
		$data['venus'] = $this->produkModel->getWhere(array('id_produk'=>$this->uri->segment(3)))->row_array();

		$data['alert'] = $this->alert;
		$this->template('form',$data);

		}
	public function hapus(){
			if($this->uri->segment(3)) $this->deorder_model->delete(array('id_order'=>$this->uri->segment(3)));
			redirect('deorder');
		}

	public function terima(){
		if($this->uri->segment(3)) $this->deorder_model->terima(array('id_order'=>$this->uri->segment(3)));
			redirect('deorder');
	}
}