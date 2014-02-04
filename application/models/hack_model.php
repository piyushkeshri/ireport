<?php
class Hack_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
		//CREATE TABLE news (
		//	id int(11) NOT NULL AUTO_INCREMENT,
		//	title varchar(128) NOT NULL,
		//	slug varchar(128) NOT NULL,
		//	text text NOT NULL,
		//	PRIMARY KEY (id),
		//	KEY slug (slug)
		//);
	}
	
	public function get_complaint($id_provided = FALSE)
	{
		if ($id_provided === FALSE)
		{
			$query = $this->db->get('images_database');
			return $query->result_array();
		}
	
		$query = $this->db->get_where('images_database', array('file_id' => $id_provided));
		return $query->row_array();
	}
	
	public function set_complaint()
	{
		$this->load->helper('url');
	
		$data = array(
			//'file_id' => '1',
			'file_path' => $this->input->post('image_url'),
			'file_name' => $this->input->post('image_url'),
			'latitude' => $this->input->post('input_lat'),
			'longitude' => $this->input->post('input_lon'),
			'description' => $this->input->post('input_desc'),
			'user_id' => '1001',
			'tags' => $this->input->post('selected'),
			'timestamp' => microtime()
		);
	
		return $this->db->insert('images_database', $data);
	}
}