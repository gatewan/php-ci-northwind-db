<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
    
    

    public function index()
	{   
		$data['title'] = 'Dashboard';
        $this->load->view('home/home');
		
	}
        
    
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */