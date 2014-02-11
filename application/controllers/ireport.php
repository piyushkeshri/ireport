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
		$this->load->database();
	}

	// Default function in case no parameter is passed in the URL
	// Coded by Karthika
	function index()
	{
		// Check if already logged in, else redirect to login page
		// If logged in, then display user home page [ Search Button to search/ Upload Button to Upload Report/ (Optional:hot trends)]
		
		//Karif (!$this->ion_auth->logged_in())
		//Kar{
		//Kar	redirect('login/');
		//Kar}
		
		//$this->load->view('ireport_upload_form', array('error' => ' ' ));
		//$this->load->view('ireport_update_status_form', array('error' => ' '));
		$this->load->view('ireport_search_report_form', array('error' => ' ')); 
	}
	
	// Function used to upload a report by the user
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
		
		// Create an entry into Status ID table, if not successful, return error
		// Get the SID returned from Status ID table and now update the Report ID entry
		// If successful, display the Report ID to user
		
		
		//Karif (!$this->ion_auth->logged_in())
		//Kar{
		//Kar	redirect('login/');
		//Kar}
		
		$this->form_validation->set_rules('userfile', 'File Path', 'required');
		$this->form_validation->set_rules('title', 'Title for the Report', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('ireport_upload_form');
		}
		
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '0';
		$config['max_width']  = '0';
		$config['max_height']  = '0';
                
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('ireport_upload_form', $error);
		}
		
		$severity = $_POST['severity'];
		$category = $_POST['category'];
		$title    = $_POST['title'];
		$data = array('upload_data' => $this->upload->data());
		$reportID = $this->ireport_model->upload_report($this->upload->data(),$severity,$category,$title);
		
		if ($reportID < 0)
			$this->load->view('ireport_upload_form');
		else
		{
			$desc = "Report Created";
			$statusID = $this->ireport_model->upload_status($reportID, $desc);
			if ($statusID < 0)
				$this->load->view('ireport_upload_form');
			else
			{
				$this->ireport_model->update_report($reportID,$statusID);
				echo "Report Succesfully Done with Report ID:";
				echo $reportID;
			}
		}
	}
	
	// Function used by dept admin to update status with progree
	// Created by Karthika
	function update_status()
	{
		// Check if logged in, else redirect to login page
		// Check if admin permissions
		// Update the status of the report
	
		//Karif (!$this->ion_auth->logged_in())
		//Kar{
		//Kar	redirect('login/');
		//Kar}
		//Kar ?? check for admin
		
		$this->form_validation->set_rules('reportID', 'Report ID', 'required');
		$this->form_validation->set_rules('desc', 'Status Update Description', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('ireport_update_status_form');
		}
		
		$reportID = $_POST['reportID'];
		$desc = $_POST['desc'];
		
		if (!$this->ireport_model->validate_reportID($reportID))
		{
			echo "Invalid Report ID";
			$this->load->view('ireport_update_status_form');
		}
		
		$statusID = $this->ireport_model->upload_status($reportID, $desc);
		if ($statusID < 0)
			$this->load->view('ireport_update_status_form');
		else
		{
			$this->ireport_model->update_report($reportID,$statusID);
			echo "Report Succesfully Done with Status ID:";
			echo $statusID;
		}
	}
	
	// Function used by user to delete a report entry
	// report_id is user input
	// Coded by Karthika
	function delete_report()
	{
		// Check if logged in, else redirect to login page
		// If report id not exist, report Error
		// Else, make the latestSID to be negative
	}
        
	// Function used by user to upvote or downvote
	// Needs another data structure with reportID, username and # Votes
	// Coded in future
	// report_id and username is user input
	function vote_report()
	{
		// Check if logged in, else redirect to login page
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
		$username = "vivekrpg";
		//echo $session_id;
		$category = $this->input->post('category');
		$severity = $this->input->post('severity');
		//$value	 = $this->input->post('value');

		//if($this->ion_auth->logged_in()) {
		//	if($this->input->post('identity')) {
		$data['dummy'] = $this->ireport_model->view_reports($username,$criteria,$value);
		//print_r($data);
		$this->load->view('display_report',$data);
		//	}
		//} else {
		//	echo "This directs to homepage \n"; //$this->load->view('home'); 
		//}
	}
}
?>