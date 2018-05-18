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

	function form_insert($table, $data){
			$res = $this->db->insert($table,$data);
			$res = $this->db->query("UPDATE laporan_keuangan SET item=(SELECT item FROM menu WHERE menu.id_item=laporan_keuangan.id_item);");
			$res = $this->db->query("UPDATE laporan_keuangan SET topping=(SELECT n_topping FROM topping WHERE topping.id_topping=laporan_keuangan.id_topping);");
			$res = $this->db->query("UPDATE laporan_keuangan SET total_pembelian=jumlah_pembelian*((SELECT harga FROM menu WHERE laporan_keuangan.id_item=menu.id_item)+ (SELECT harga FROM topping WHERE laporan_keuangan.id_topping=topping.id_topping));");
			return $res;
	}

	public function update($data, $where){
		//$this->db->query('')
		$this->db->where($where);
		return $this->db->update('laporan_keuangan',$data);
	}

	public function delete($where){
		return $this->db->delete('laporan_keuangan',$where);
	}


	function simpan_penjualan($tanggal, $id_item, $id_topping, $jumlah_pembelian){
		$hasil = $this->db->query("INSERT INTO laporan_keuangan(tanggal, id_item, id_topping, jumlah_pembelian) VALUES('$tanggal', '$id_item', '$id_topping', '$jumlah_pembelian')");
	}

	function update_item($tanggal, $id_item, $id_topping, $jumlah_pembelian){
		$hasil=$this->db->query("UPDATE laporan_keuangan SET item=(SELECT item FROM menu WHERE menu.id_item=laporan_keuangan.id_item);");
	}

	function update_harga(){
		$query = $this->db->query('UPDATE laporan_keuangan SET total_pembelian=jumlah_pembelian*((SELECT harga FROM menu WHERE laporan_keuangan.id_item=menu.id_item)+ (SELECT harga FROM topping WHERE laporan_keuangan.id_topping=topping.id_topping))');
	}

	/*public function update_isi($item, $id_item){
		$hasil=$this->db->query('UPDATE laporan_keuangan SET item=(SELECT item FROM menu WHERE menu.id_item=laporan_keuangan.id_item);')
	}*/
}