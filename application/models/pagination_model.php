<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pagination_Model extends CI_Model {
	function data($number,$offset){
		return $query = $this->db->get('employees',$number,$offset)->result();		
	}
 
	function jumlah_data(){
		return $this->db->get('employees')->num_rows();
	}
}
?>