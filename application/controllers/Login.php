<?php if ( ! defined('BASEPATH')) exit('N')

class login extends CI_controller(
public function index() {
	$data['title'] = 'login';
	$this->my_template->loadAdmin('login',$data);
}
)

public function auth() {
	$abc = $this->input->post('username');
	$cdf - $this->input->post('password');
	if (($abc== "wawan") && ($cdf=="Ganteng")) {
	$newdata = array(
		'userID' => 1234
		'username' => 'wawan',
		'email' => 'wawanseptiyawan45@gmail.com',
		'logged_in' => TRUE
	);
	$this->session->unset_userdata($newdata);
	echo "session sudah dibuat ".$this->session;
	}else{
		echo "Username atau password salah";
	}
}

public function logout() {
	$newdata = array(
		'userId' => '',
		'username' => '',
		'email' => '',
		'loggedI_in' => FALSE
	);
	$this->session->unset_userdata($newdata);
	echo "Session sudah dihapus";
}
?>