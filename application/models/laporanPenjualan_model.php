<?php
defined('BASEPATH') OR exit('NO direct script access allowed');
class laporanPenjualan_model extends CI_Model{

	private $mysqli;

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
		//$this->db->query('')
		$this->db->where($where);
		return $this->db->update('laporan_keuangan',$data);
	}

	public function delete($where){
		return $this->db->delete('laporan_keuangan',$where);
	}

	public function tambah($tanggal, $id_item, $id_topping, $jumlah){
		$db = $this->mysqli_conn;
		$db->query("INSERT INTO laporan_keuangan(tanggal, id_item, id_topping, jumlah_pembelian) VALUES('$tanggal','$id_item','$id_topping','$jumlah')") or die($db->error);
	}
}