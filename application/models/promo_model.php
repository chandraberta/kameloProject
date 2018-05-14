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
		return $this->db->get('promo');
	}

	public function insert($data){
		return $this->db->insert('promo',$data);
	}

	public function update($data, $where){
		$this->db->where($where);
		return $this->db->update('promo',$data);
	}

	public function delete($where){
		return $this->db->delete('promo',$where);
	}
}
