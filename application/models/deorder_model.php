<?php
defined('BASEPATH') OR exit('NO direct script access allowed');
class deorder_model extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
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

	public function update($data, $where){
		$this->db->where($where);
		return $this->db->update('preorder',$data);
	}

	public function delete($where){
		return $this->db->delete('preorder',$where);
	}
}