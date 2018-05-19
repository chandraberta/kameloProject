<?php
defined('BASEPATH') OR exit('NO direct script access allowed');
class preorder_model extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function getData(){
			$res = $this->db->get('preorder');
			return $res->result_array();
	}

	public function all(){
		return $this->db->get('preorder');
	}

	public function getWhere($where){
		$this->db->where($where);
		return $this->db->get('preorder');
	}

	public function insert($data){
		return $this->db->insert('preorder',$data);
	}
	function form_insert($table, $data){
			$res = $this->db->insert($table,$data);
			$res = $this->db->query("UPDATE preorder SET item=(SELECT item FROM menu WHERE id_item=preorder.id_item);");
			$res = $this->db->query("UPDATE preorder SET topping=(SELECT n_topping FROM topping WHERE id_topping=preorder.id_topping);");
			return $res;
	}


	public function update($data, $where){
		$this->db->where($where);

		return $this->db->update('preorder',$data);
	}

	public function delete($where){
		return $this->db->delete('preorder',$where);
	}

	public function terima($where){
		$mana = $this->db->where($where);
		$res = $this->db->query('INSERT INTO laporan_keuangan(tanggal, id_item, id_topping, jumlah_pembelian) SELECT tanggal, id_item, id_topping, jumlah FROM preorder WHERE id_order', $mana);
		$res = $this->db->query("UPDATE laporan_keuangan SET item=(SELECT item FROM menu WHERE menu.id_item=laporan_keuangan.id_item);");
			$res = $this->db->query("UPDATE laporan_keuangan SET topping=(SELECT n_topping FROM topping WHERE topping.id_topping=laporan_keuangan.id_topping);");
			$res = $this->db->query("UPDATE laporan_keuangan SET total_pembelian=jumlah_pembelian*((SELECT harga FROM menu WHERE laporan_keuangan.id_item=menu.id_item)+ (SELECT harga FROM topping WHERE laporan_keuangan.id_topping=topping.id_topping));");
		$res = $this->db->delete('preorder',$where);
		return $res;
	}
}

