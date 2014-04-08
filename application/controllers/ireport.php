<?php

class ireport extends CI_Controller {

	// username has to be a global variable
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('ion_auth');
		$this->load->model('ireport_model');
		$this->load->helper('html');
		$this->load->database();

		$this->load->library('ion_auth');
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
		$this->form_validation->set_error_delimiters('<div class="error"><p class="text-danger">', '</p></div>');
		$this->lang->load('auth');
		$this->load->helper('language');
	}

	// Default function in case no parameter is passed in the URL
	// Coded by Karthika
	function index()
	{
		// Check if already logged in, else redirect to login page
		// If logged in, then display user home page [ Search Button to search/ create Button to create Report/ (Optional:hot trends)]
		
		if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			$this->data['message'] = "";
			$this->load->view('ireport_login', $this->data);
			//redirect('ireport/user_login', 'refresh');
		}
		else 
			$this->load->view('home_page');
	}
	
		//log the user in
	public function user_login()
	{
		$this->data['title'] = "Login";
                
		//validate form input
		$this->form_validation->set_rules('inputUsernameEmail', 'Username', 'trim|xss_clean|required|valid_email');
		$this->form_validation->set_rules('inputPassword', 'Password', 'trim|xss_clean|required');

		
		if ($this->form_validation->run() == true)
		{
			//check to see if the user is logging in
			//check for "remember me"
			$remember = (bool) $this->input->post('remember');

			if ($this->ion_auth->login($this->input->post('inputUsernameEmail'), $this->input->post('inputPassword'), $remember))
			{
				//if the login is successful
				//redirect them back to the home page
				$this->session->set_flashdata('message', $this->ion_auth->messages());
				$this->load->view('home_page');
			}
			else
			{
				//if the login was un-successful
				//redirect them back to the login page
				$this->session->set_flashdata('message', $this->ion_auth->errors());
				$this->data['message'] = $this->ion_auth->messages();
				$this->load->view('ireport_login', $this->data);
			}
		}
		else
		{
			//the user is not logging in so display the login page
			//set the flash data error message if there is one
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
			$this->data['username'] = array('name' => 'username',
				'id' => 'username',
				'type' => 'text',
				'value' => $this->form_validation->set_value('username'),
			);
			$this->data['password'] = array('name' => 'password',
				'id' => 'password',
				'type' => 'password',
			);
			$this->load->view('ireport_login', $this->data);
		}
	}

	//log the user out
	function logout()
	{
		$this->data['title'] = "Logout";

		//log the user out
		$logout = $this->ion_auth->logout();

		//redirect them to the login page
		$this->session->set_flashdata('message', $this->ion_auth->messages());
		$this->data['message'] = $this->ion_auth->messages();
		$this->load->view('ireport_login', $this->data);
	}

	public function register()
	{
	
		$data['title'] = 'Create a User Account';
		
		//$this->form_validation->set_rules('username', 'username', 'required');
		//$this->form_validation->set_rules('password', 'password', 'required|min_length[6]');
                
		if ($this->ion_auth->logged_in())
		{
			$this->load->view('home_page');
		}

		//validate form input
		$this->form_validation->set_rules('first_name', $this->lang->line('create_user_validation_fname_label'), 'required|xss_clean');
		$this->form_validation->set_rules('last_name', $this->lang->line('create_user_validation_lname_label'), 'required|xss_clean');
		$this->form_validation->set_rules('inputEmail', $this->lang->line('create_user_validation_email_label'), 'required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('inputPassword', $this->lang->line('create_user_validation_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[inputConfirmPassword]');
		$this->form_validation->set_rules('inputConfirmPassword', $this->lang->line('create_user_validation_password_confirm_label'), 'required');
		$this->form_validation->set_message('is_unique','This %s Already Exists!');
		$this->form_validation->set_message('required','Valid %s is Required!');
	
		
		if ($this->form_validation->run() == true)
		{
			$username = strtolower($this->input->post('first_name')) . '' . strtolower($this->input->post('last_name'));
			$email    = strtolower($this->input->post('inputEmail'));
			$password = $this->input->post('inputPassword');

			$additional_data = array(
				'first_name' => $this->input->post('first_name'),
				'last_name'  => $this->input->post('last_name'),
		//		'company'    => $this->input->post('company'),
		//		'phone'      => $this->input->post('phone'),
			);

			
		}
		if ($this->form_validation->run() == true && $this->ion_auth->register($username, $password, $email, $additional_data))
		{
			//check to see if we are creating the user
			//redirect them back to the admin page
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			$this->data['message'] = $this->ion_auth->messages();
			$this->load->view('ireport_login', $this->data);
		}
		else
		{
			//display the create user form
			//set the flash data error message if there is one
			$this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

			$this->data['first_name'] = array(
				'name'  => 'first_name',
				'id'    => 'first_name',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('first_name'),
			);
			$this->data['last_name'] = array(
				'name'  => 'last_name',
				'id'    => 'last_name',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('last_name'),
			);
			$this->data['email'] = array(
				'name'  => 'email',
				'id'    => 'email',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('email'),
			);
			$this->data['password'] = array(
				'name'  => 'password',
				'id'    => 'password',
				'type'  => 'password',
				'value' => $this->form_validation->set_value('inputPassword'),
			);
			$this->data['password_confirm'] = array(
				'name'  => 'password_confirm',
				'id'    => 'password_confirm',
				'type'  => 'password',
				'value' => $this->form_validation->set_value('inputConfirmPassword'),
			);
                        $this->load->view('ireport_login', $this->data);
		}

	}

	//forgot password
	function forgot_password()
	{
		$this->form_validation->set_rules('email', $this->lang->line('forgot_password_validation_email_label'), 'required|valid_email');
		if ($this->form_validation->run() == false)
		{	
			//setup the input
			$this->data['email'] = array('name' => 'email',
				'id' => 'email',
			);

			if ( $this->config->item('identity', 'ion_auth') == 'username' ){
				$this->data['identity_label'] = $this->lang->line('forgot_password_username_identity_label');
			}
			else
			{
				$this->data['identity_label'] = $this->lang->line('forgot_password_email_identity_label');
			}

			//set any errors and display the form
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
			$this->load->view('login/forgot_password', $this->data);
		}
		else
		{
			
			// get identity for that email
			$identity = $this->ion_auth->where('email', strtolower($this->input->post('email')))->users()->row();
			if(empty($identity)) {
			    $this->ion_auth->set_message('forgot_password_email_not_found');
			    $this->session->set_flashdata('message', $this->ion_auth->messages());
			    redirect("login/forgot_password", 'refresh');
			}
            
			//run the forgotten password method to email an activation code to the user
			$forgotten = $this->ion_auth->forgotten_password($identity->{$this->config->item('identity', 'ion_auth')});

			if ($forgotten)
			{
				//if there were no errors
				$this->session->set_flashdata('message', $this->ion_auth->messages());
				//redirect("login/confirmation", 'refresh'); //we should display a confirmation page here instead of the login page
				$this->load->view('login/confirmation');
			}
			else
			{
				$this->session->set_flashdata('message', $this->ion_auth->errors());
				redirect("login/forgot_password", 'refresh');
			}
		}
	}	
	
	function view_create_form()
	{
		if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			$this->data['message'] = "";
			$this->load->view('ireport_login', $this->data);
		}
		else
			$this->load->view('ireport_create_form', array('error' => ' ' ));
	}
	
	function view_update_form()
	{
		if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			$this->data['message'] = "";
			$this->load->view('ireport_login', $this->data);
		}
		else
			$this->load->view('ireport_update_status_form', array('error' => ' '));
	}
	
	function view_search_form()
	{
		if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			$this->data['message'] = "";
			$this->load->view('ireport_login', $this->data);
		}
		else
			$this->load->view('ireport_search_report_form', array('error' => ' '));
	}
	
	
	// Function used to create a report by the user
	// Coded by Karthika
	// username has to be inputted
	function create_report()
	{
		// Check if logged in, else direct to login page
		// Validation of form : the init Date is autogenerated
		//                      report ID is autogenerated
		//                      severity has default value of 1
		//                      gps is automatic
		//                      Rest else comes from the form
		
		// Create an entry into the report table
		// Using report ID, then create an entry into Status ID table, if not successful, return error
		// Get the SID returned from Status ID table and now update the Report ID entry
		// If successful, display the Report ID to user
		
		
		if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('ireport/user_login', 'refresh');
		}
		
		$this->form_validation->set_rules('title', 'Title for the Report', 'required');
		//$this->form_validation->set_rules('userfile', 'File Path', 'required');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('ireport_create_form', array('error' => ' ' ));
			return;
		}
		
		else
		{
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '0';
			$config['max_width']  = '0';
			$config['max_height']  = '0';
                
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload())
			{
				$data['msg'] = array('error' => $this->upload->display_errors());
				$this->load->view('ireport_kar_home', $data);
				return;
			}
		
			$severity = $_POST['severity'];
			$category = $_POST['category'];
			$title    = $_POST['title'];
			$pic_data = array('upload_data' => $this->upload->data());
			
			$reportID = $this->ireport_model->create_report($this->upload->data(),$severity,$category,$title);
		
			if ($reportID < 0)
			{
				$data['msg'] = array('Report could not be created');
				$this->load->view('ireport_kar_home', $data);
				return;
			}
			
			$desc = "Report Created";
			$prog = "New";
			$statusID = $this->ireport_model->create_status($reportID, $desc, $prog);
			
			if ($statusID < 0)
			{
				$data['msg'] = array('Report was successfully created, but Status entry could not be created');
				$this->load->view('ireport_kar_home', $data);
				return;
			}
			
			$this->ireport_model->update_report($reportID,$statusID);
			$data['msg'] = array('Report Succesfully Created with Report ID:' , $reportID);
			$this->load->view('ireport_kar_home', $data);
			
		}
		return;
	}
	
	// Function used by dept admin to update status with progree
	// Created by Karthika
	function update_status()
	{
		// Check if logged in, else redirect to login page
		// Check if admin permissions
		// Update the status of the report
	
		if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('ireport/user_login', 'refresh');
		}
		
		//Kar ?? check for admin
		
		$this->form_validation->set_rules('reportID', 'Report ID', 'required');
		$this->form_validation->set_rules('desc', 'Status Update Description', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('ireport_update_status_form', array('error' => ' ' ));
			return;
		}
		
		$reportID = $_POST['reportID'];
		$desc = $_POST['desc'];
		$prog = $_POST['prog'];
		
		if (!$this->ireport_model->validate_reportID($reportID))
		{
			echo "Invalid Report ID";
			$this->load->view('ireport_update_status_form');
			return;
		}
		
		$statusID = $this->ireport_model->create_status($reportID, $desc, $prog);
		
		if ($statusID < 0)
		{
			$data['msg'] = array('Status Update had returned unsuccessfully from the database');
			$this->load->view('ireport_kar_home', $data);
			return;
		}
		
		$this->ireport_model->update_report($reportID,$statusID);
		
		$data['msg'] = array('Report Succesfully Updated with Status ID:', $statusID);
		$this->load->view('ireport_kar_home', $data);
		return;
	}
	
	// Function used by user to delete a report entry
	// report_id is user input
	// Coded by Karthika
	function delete_report()
	{
		// Check if logged in, else redirect to login page
		// If report id not exist, report Error
		// Else, make the latestSID to be negative -1
		
		if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('ireport/user_login', 'refresh');
		}
	}
        
	// Function used by user to upvote or downvote
	// Needs another data structure with reportID, username and # Votes
	// Coded in future
	// report_id and username is user input
	function vote_report()
	{
		// Check if logged in, else redirect to login page
		if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('ireport/user_login', 'refresh');
		}
	}
	
	// Function used by user to look up the entries created by him or all entries
	// Coded by Vivek
	function view_reports()
	{
		// Check if logged in, else redirect to login page
		// If input is empty, display all reports
		// Else display only user's specific report

		//$session_data = array(
		//	'identity' => $user->{$this->identity_column},
		//	'username' => $user->username,
		//	'email' => $user->email,
		//	'user_id' => $user->id, //everyone likes to overwrite id so we'll use user_id
		//	'old_last_login' => $user->last_login
		//);
		//$username = $this->session->userdata('session_id');	//Assume this is the username for timebeing. Later this would be replaced with above data.
		//$username = "vvgupta";
		//echo $session_id;

		if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('ireport/user_login', 'refresh');
		}
		
		$username = $this->input->post('username');
		$category = $this->input->post('category');
		$severity = $this->input->post('severity');
		$reportID = $this->input->post('reportID');
		$error = 0;
		
		if(!empty($reportID)) {
			if(!is_numeric($reportID)) {
				echo "Error: Report ID must be a number";
				$this->load->view('ireport_search_report_form');
				$error = 1;
				return 1;
			}
		}
		

		//if($this->ion_auth->logged_in()) {
		//	if($this->input->post('identity')) {
               
		$data['dummy'] = $this->ireport_model->view_reports($username,$category,$severity,$reportID);
		//print_r($data);
		if(empty($data['dummy'])) {
			echo "The query you run returned no data. Please specify again.\n";
			$this->load->view('ireport_search_report_form');
			$error = 1;
			return 1;
		}
		
		if(!$error) {
			$this->load->view('display_report',$data);
		}
		//	}
		//} else {
		//	echo "This directs to homepage \n"; //$this->load->view('home'); 
		//}
	}
	
	function vote_issues()
	{
		if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('ireport/user_login', 'refresh');
		}
		$reportID = $this->input->post('reportID');
		$userID = "crap"; //fixme
		if($this->ireport_model->vote_reports($userID, $reportID)) 
		{	 // Vivek refresh your display with same criteria}
		}
		else 
		{	//display error message}
		}
	}
}
?>