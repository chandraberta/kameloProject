<?php 
 
class M_login extends CI_Model{	

	function __construct(){
		parent::__construct();
	}
	
	/*function login($where = ''){
		return $this->db->query("select * from sesi $where;");
	}*/

	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}
}