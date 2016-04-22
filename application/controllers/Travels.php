<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Travels extends CI_Controller {

	public function __construct(){
		parent::__construct();
			$this->load->library('form_validation');
	}
	
	public function index()
	{
		$this->load->view('main');
	}

	public function register()
	{
		$this->form_validation->set_rules('reg_name', 'Name', 'required');
		$this->form_validation->set_rules('reg_username', 'Username', 'required|alpha');
		$this->form_validation->set_rules('reg_password', 'Password','required|min_length[8]|max_length[12]|alpha_numeric');
		$this->form_validation->set_rules('reg_confirmpassword', 'Confirm Password', 'required|matches[reg_password]');

			if($this->form_validation->run() == FALSE)
			{
				$errors = $this->form_validation->getErrorsArray();
				$this->session->set_flashdata('errors', $errors);
				$this->load->view('main');
			}
			else
			{
				$this->load->model('Travel');
				$method = $this->Travel->addUser($this->input->post());
				$this->load->view('main');
			}
	}

	public function login()
	{
		$this->form_validation->set_rules('login_username', 'Username', 'required|alpha_numeric');
		$this->form_validation->set_rules('login_password', 'Password', 'required|min_length[8]|max_length[12]|alpha_numeric');

			if($this->form_validation->run() == FALSE)
			{
				$errors = $this->form_validation->getErrorsArray();
				$this->session->set_flashdata('errors', $errors);
				$this->load->view('main');
			}
			else
			{
				$login_info = $this->input->post();
				$this->load->model("Travel");
				$method = $this->Travel->getUserinfo($login_info);
				$this->load->view('userpage', ['data' => $method]);
			}
	}


	public function addplan()
	{
		$this->load->view('addplan');
	}


	public function addTravel()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('add_destination', 'Destination', 'required');
		$this->form_validation->set_rules('add_description', 'Description', 'required');
		$this->form_validation->set_rules('add_travel_from', 'Travel Date From:', 'required');
		$this->form_validation->set_rules('add_travel_to', 'Travel Date To:', 'required');

			if($this->form_validation->run() == FALSE)
			{
				$errors = $this->form_validation->getErrorsArray();
				$this->session->set_flashdata('errors', $errors);
				$this->load->view('addplan');
			}
			else 
			{

			}
	}


	public function logout()
	{
	
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */