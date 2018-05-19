<?php
defined('BASEPATH') OR exit('NO direct script access allowed');
class deorder_model extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function all(){
		return $this->db->get('deorder');
	}

	public function getWhere($where){
		$this->db->where($where);
		return $this->db->get('deorder');
	}

	public function insert($data){
		return $this->db->insert('deorder',$data);
	}

	public function update($data, $where){
		$this->db->where($where);
		return $this->db->update('deorder',$data);
	}

	public function delete($where){
		return $this->db->delete('deorder',$where);
	}


	function form_insert($table, $data){
			//$this->db->set($data);
			$res = $this->db->insert($table,$data);
			return $res;
	}


	public function terima($where){
		$mana = $this->db->where($where);
		$res = $this->db->query('INSERT INTO laporan_keuangan(tanggal, id_item, id_topping, jumlah_pembelian) SELECT tanggal, id_item, id_topping, jumlah FROM deorder WHERE id_order', $mana);
		$res = $this->db->query("UPDATE laporan_keuangan SET item=(SELECT item FROM menu WHERE menu.id_item=laporan_keuangan.id_item);");
			$res = $this->db->query("UPDATE laporan_keuangan SET topping=(SELECT n_topping FROM topping WHERE topping.id_topping=laporan_keuangan.id_topping);");
			$res = $this->db->query("UPDATE laporan_keuangan SET total_pembelian=jumlah_pembelian*((SELECT harga FROM menu WHERE laporan_keuangan.id_item=menu.id_item)+ (SELECT harga FROM topping WHERE laporan_keuangan.id_topping=topping.id_topping));");
		$res = $this->db->delete('deorder',$where);
		return $res;
	}
}
