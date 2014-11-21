<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Realestate extends CI_Controller {

	public function index()
	{
		$this->load->view('real-estate');
	}
	public function dashboard(){
		$this->load->view('real-estate-dashboard');
	}
	public function bookslot(){
		$this->load->view('book-slot');
	}
	
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */