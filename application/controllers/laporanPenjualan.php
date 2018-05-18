<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class laporanPenjualan extends CI_Controller{
	
	private $alert = '';
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');

		/*if($this->session->userdata('status') != "login"){
			redirect(base_url('login'));*/


		$this->load->model('laporanPenjualan_model');
	}

	public function index(){
		$data['semua'] = $this->laporanPenjualan_model->all();
		$this->template('laporanPenjualan',$data);
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
			$data = array(
                'tanggal'=>$this->input->post('tanggal'),
                'id_item'=>$this->input->post('id_item'),
                'id_topping'=>$this->input->post('id_topping'),
                'jumlah_pembelian'=>$this->input->post('jumlah_pembelian')
              );

      $result = $this->laporanPenjualan_model->form_insert('laporan_keuangan',$data);
      if($result >= 1)
      {
        redirect(base_url('laporanPenjualan'));
      }

		}

	public function hapus(){
			if($this->uri->segment(3)) $this->laporanPenjualan_model->delete(array('id'=>$this->uri->segment(3)));
			redirect('laporanPenjualan');
		}

	public function tambah_manual(){
		$this->load->view('tambah_manual');
	}

	public function simpan_penjualan(){
		$tanggal=$this->input->post('tanggal');
		$id_item=$this->input->post('id_item');
		$id_topping=$this->input->post('id_post');
		$jumlah_pembelian=$this->input->post('jumlah_pembelian');
		$this->laporanPenjualan_model->simpan_penjualan($tanggal, $id_item, $id_topping, $jumlah_pembelian);
		redirect('laporanPenjualan');
	}

	function update_item(){
		$data['semua'] = $this->laporanPenjualan_model->update_item();
	}

	/*public function Simpan(){
		$manual = array(
			'tanggal'	=>$this->input->post('tanggal'),
			'id_item'		=>$this->input->post('id_item'),
			'id_topping'	=>$this->input->post('id_topping'),
			'jumlah'	=>$this->input->post('jumlah')
		);
		var_dump($manual);
		$this->laporanPenjualan_model->simpan($manual);
		$this->index();

		if($this->input->post('tanggal')==''){
				if($this->laporanPenjualan_model->insert($manual)){
					?>
					<script>window.alert('Sukses Tersimpan');</script>
					<?php
					redirect('laporanPenjualan','refresh');
				}else{
					$this->alert = $this->alert("<p class='alert alert-danger'>","</p>","Gagal Menyimpan");
				}

				}else{
					if($this->laporanPenjualan_model->update($manual,array('tanggal'=>$this->input->post('tanggal')))){
					?>
						<script>window.alert('Sukses Tersimpan');</script>data
						<?php 
						redirect('laporanPenjualan','refresh');

					} else{
						$this->alert = $this->alert("<p class='alert alert-danger'>","</p","Gagal Menyimpan");
				}
			}

	}*/
}