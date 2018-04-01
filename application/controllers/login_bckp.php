<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('login_model');
		$this->load->helper('cookie');
		$this->load->library('session');
	}

	public function index()
	{
		if ($this->session->userdata('id')!='') 
		{
			redirect('/home','refresh');
		}else {
			if (isset($_COOKIES['username']) and isset($_COOKIES['password'])) 
			{
				$email = get_cookie('username');
				$password = get_cookie('password');

				$email = $this->input->post('person_username');
				$password = $this->input->post('person_password');
			}else {
				echo "PLease Enter your password to LOGIN";
				$this->load->view('login');
			}
		}
	}

	public function CheckLogin()
	{
		$rememberme = $this->input->post('rememberme');
		$username = $this->input->post('person_username');
		$persondata = $this->login_model->UserLogin($value='');

		// print_r($persondata);
		// exit;
		if (count($persondata) !=0 ||  !empty($persondata)) {
			if (!isset($_COOKIES['username']) && !isset($_COOKIES['password'])) 
			{
				if ($rememberme ==1) 
				{
					setcookie('username',$persondata->email,3600*24*30*12*10);
					setcookie('password',$persondata->password,3600*24*30*12*10);
				}
			}
			$newdata = array(
				'id' => $persondata->id,
				'firstname'=>$persondata->firstname,
				'lastname'=>$persondata->lastname,
				'email'=>$persondata->email,
				'dob'=>$persondata->dob,
				'password'=>$persondata->password
				);
			// print_r($newdata);
			// echo "rembr = ".$this->input->post('rememberme');
			// echo "usrnm = ".$this->input->post('person_username');
			// exit;
			$this->session->set_userdata($newdata);
 
			redirect('home');
		}else {
			redirect('/');
		}
		

	}

	public function logout()
	{
		$newdata = array(
				'id'=>'',
				'firstname'=>'',
				'lastname'=>'',
				'email'=>'',
				'dob'=>'',
				'password'=>''
			);
		$this->session->unset_userdata($newdata);
		$this->session->sess_destroy();
			if (!isset($_SESSION)) 
			{
				session_destroy();
			}
		delete_cookie('username');
		delete_cookie('password');
		redirect();
	}

	
}
?>

