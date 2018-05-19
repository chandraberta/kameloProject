<?php
defined('BASEPATH') OR exit('NO direct script access allowed');
class promo_model extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function all(){
		return $this->db->get('promo');
	}

	public function getWhere($where){
		$this->db->where($where);
// <<<<<<< HEAD
		return $this->db->get('promo');
	}

	public function insert($data){
		return $this->db->insert('promo',$data);
// =======
		return $this->db->get('promo');
	}

	public function insert2($data){
		return $this->db->insert('preorder',$data);
// >>>>>>> 7e0a427e7d1347ba3b49ecb5eaf0d6b9626501c1
	}

	public function update($data, $where){
		$this->db->where($where);
// <<<<<<< HEAD
		return $this->db->update('promo',$data);
	}

	public function delete($where){
		return $this->db->delete('promo',$where);
	}

// =======
	public function update2($data, $where){
		return $this->db->update('preorder',$data);
	}

	public function delete2($where){
		return $this->db->delete('preorder',$where);
	}

	function form_update($table, $data){
			//$this->db->set($data);
			$res = $this->db->update($table,$data);
			return $res;
	}

	public function getPromo($id){
		$this->db->where($id);
// <<<<<<< HEAD
		return $this->db->get('promo');
	}


}
// >>>>>>> 7e0a427e7d1347ba3b49ecb5eaf0d6b9626501c1
