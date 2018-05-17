<?php
defined('BASEPATH') OR exit('NO direct script access allowed');
class laporanPenjualan_model extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function all(){
		return $this->db->get('laporan_keuangan');
	}

	public function getWhere($where){
		$this->db->where($where);
		return $this->db->get('laporan_keuangan');
	}

	public function insert($data){
		return $this->db->insert('laporan_keuangan',$data);
	}

	public function update($data, $where){
		$this->db->where($where);
		return $this->db->update('laporan_keuangan',$data);
	}

	public function delete($where){
		return $this->db->delete('laporan_keuangan',$where);
	}
}