<?php
class Hack extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('hack_model');
		$this->load->helper(array('form', 'url'));
	}

	//public function index()
	//{
	//	//$data['news'] = $this->news_model->get_news();
	//	//$data['title'] = 'News archive';
	//
	//	$this->load->view('templates/header', $data);
	//	//$this->load->view('news/index', $data);
	//	$this->load->view('templates/footer');
	//}

	//public function view($slug)
	//{
	//	$data['news'] = $this->news_model->get_news($slug);
	//}
	
	//public function create()
	//{
	//	$this->load->helper('form');
	//	$this->load->library('form_validation');
	//	$data['title'] = 'Register a new Complaint!';
	//
	//	//$this->form_validation->set_rules('title', 'Title', 'required');
	//
	//	if ($this->form_validation->run() === FALSE)
	//	{
	//		//echo json_encode("Failure");
	//		$this->load->view('templates/header', $data);
	//		$this->load->view('hack/create');
	//		$this->load->view('templates/footer');
	//
	//	}
	//	else
	//	{
	//		//echo json_encode("Success");
	//		$this->hack_model->set_complaint();
	//		$this->load->view('hack/success');
	//	}
	//}

	function index()
	{
		$this->load->view('upload_form', array('error' => ' ' ));
	}

	function create()
	{
		echo 1;
		return;
		$this->load->helper('form');
		$this->load->library('form_validation');
		$data['title'] = 'Register a new Complaint!';
	
		$this->form_validation->set_rules('geo_lat', 'geo_lat', 'required');
		$this->form_validation->set_rules('geo_lon', 'geo_lon', 'required');
		
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '4000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);

		//var_dump($this->form_validation->run());
		//var_dump();
//		
//$allowedExts = array("gif", "jpeg", "jpg", "png");
//$temp = explode(".", $_FILES["file"]["name"]);
//$extension = end($temp);
//if ((($_FILES["file"]["type"] == "image/gif")
//|| ($_FILES["file"]["type"] == "image/jpeg")
//|| ($_FILES["file"]["type"] == "image/jpg")
//|| ($_FILES["file"]["type"] == "image/pjpeg")
//|| ($_FILES["file"]["type"] == "image/x-png")
//|| ($_FILES["file"]["type"] == "image/png"))
//&& ($_FILES["file"]["size"] < 4000)
//&& in_array($extension, $allowedExts))
//  {
//  if ($_FILES["file"]["error"] > 0)
//    {
//    echo "Error: " . $_FILES["file"]["error"] . "<br>";
//    }
//  else
//    {
//    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
//    echo "Type: " . $_FILES["file"]["type"] . "<br>";
//    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
//    echo "Stored in: " . $_FILES["file"]["tmp_name"];
//    }
//  }
//else
//  {
//  echo "Invalid file";
//  }
		
		//if ($this->form_validation->run() === FALSE || ! $this->upload->do_upload())
		if ($this->form_validation->run() === FALSE)
		{
			//echo json_encode("Failure");
			$error = array('error' => $this->upload->display_errors());
			
			//$this->load->view('templates/header', $data);
			//$this->load->view('hack/create');
			//$this->load->view('templates/footer');
	
		}
		else
		{
			//echo json_encode("Success");
			//$this->hack_model->set_complaint();
			//$this->load->view('hack/success');
		}

		//if ( ! $this->upload->do_upload())
		//{
		//	$error = array('error' => $this->upload->display_errors());
		//
		//	$this->load->view('upload_form', $error);
		//}
		//else
		//{
		//	$data = array('upload_data' => $this->upload->data());
		//
		//	$this->load->view('upload_success', $data);
		//}
	}
}