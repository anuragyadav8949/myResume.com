<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Maincontroller extends CI_Controller{
	public function __construct()
	{
		parent:: __construct();
	}

	public function index()
	{		
		$data['page_title'] = "HOME";
		$this->load->view('home',$data);
	}

	public function technical_background()
	{
		$data['page_title'] = "Technical Background";
		$this->load->view('technical_background',$data);
	}

	public function experience()
	{
		$data['page_title'] = "Experience";
		$this->load->view('experience',$data);
	}
}

?>