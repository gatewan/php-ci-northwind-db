<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Pagination_Controller extends CI_Controller {
 
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('pagination_model');
	}
 
	public function index(){
		$this->load->database();
		$jumlah_data = $this->pagination_model->jumlah_data();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'Pagination_Controller/index/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 2;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);		
		$data['user'] = $this->pagination_model->data($config['per_page'],$from);
		$this->load->view('pagination_view',$data);
	}
}