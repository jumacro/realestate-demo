<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	  function __construct() {  
        parent::__construct();
                $this->load->helper('form');  
                $this->load->helper('url');  
                $this->load->helper('security'); 
                $this->load->model('Users_model');
                $this->load->library('form_validation');   
                $this->load->database();
				$this->load->library('image_lib');
                $this->load->library('session');
                $this->load->library('encrypt');
                $this->load->library(array('table'));
                $this->load->library('form_validation');
          } 
 
	public function index()
	{
		$session_id = $this->session->userdata('username');
		if(!empty($session_id)){
			$this->load->view('dashboard');
		}else{
			$this->load->view('login_soft');
		}
	}
	public function login(){
		
	$un=$this->session->userdata('username');

if(($un)==FALSE)
{
	$this->load->view('login_soft');
}
	
	}
	public function validate(){
		$username = "admin";
		$password = "admin123";
		if($this->Users_model->loginadmin($username,$password)){	
		$this->load->view('dashboard');
		}
	}
	public function logout(){
		$array_items = array('username' => '', 'logged_in' => '');
		$this->session->unset_userdata($array_items);
		$this->load->view('login_soft');
	}
}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */