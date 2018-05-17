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
			//$this->db->set($data);
			$res = $this->db->insert($table,$data);
			return $res;
	}

	public function update($data, $where){
		$this->db->where($where);

		return $this->db->update('preorder',$data);
	}

	public function delete($where){
		return $this->db->delete('preorder',$where);
	}
}
