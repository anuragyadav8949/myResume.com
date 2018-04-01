<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('login_model');
	}

	public function index()
	{
		$data['page_title'] = "REGISTER";
		$this->load->view('register',$data);
	}

	public function register_user()
	{
		
		// $reg_data['firstname'] = $this->input>post('person_firstname');
		// $reg_data['lastname'] = $this->input>post('person_lastname');
		// $reg_data['email'] = $this->input>post('person_email');
		// $reg_data['password'] = $this->input>post('confirm_password');
		// $reg_data['company'] = $this->input>post('company_name');
		 $data = array(
			'firstname'=> $this->input->post('person_firstname'),
			'lastname'=>$this->input->post('person_lastname'),
			'email'=>$this->input->post('person_email'),
			'password'=>$this->input->post('confirm_password'),
			'dob'=>$this->input->post('dob'),
			'company'=>$this->input->post('company_name')
			);
		// print_r($data);
		// exit;
		$inserted = $this->login_model->user_add($data);
		if ($inserted) 
		{
			redirect(base_url('login'),refresh);
		}else{
			echo "User not Registed succefully";
		}
	}
	public function login_view()
	{
		$data['page_title'] = "LOGIN";
		$this->load->view('login',$data);
	}

	public function login_user()
	{
		$user_login = array(
				'email'=>$this->input->post('person_username'),
				'user_password'=>$this->input->post('person_password')
			);

		$user_data = $this->login_model->login_user($user_login['email'],$user_login['user_password']);
		// print_r($user_data);
		// exit;
		if ($user_data) 
		{
			$this->session->set_userdata('user_id',$user_data['id']);
			$this->session->set_userdata('user_email',$user_data['email']);
			$this->session->set_userdata('user_firstname',$user_data['firstname']);
			$this->session->set_userdata('user_dob',$user_data['dob']);

			redirect('/home');
		}else {
			$this->session->set_flashdata('error_msg','Error occured,Try Again');
			redirect('/login');
		}

	}

	public function user_profile()
	{
		$this->load->view('home');
	}

	public function logout()
	{
		
		$this->session->sess_destroy();
		redirect('/',refresh);
	}

	
}
?>

