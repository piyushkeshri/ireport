<?php
class Image_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_images($sno = FALSE)
	{
		if ($sno === FALSE)
		{
			$query = $this->db->get('images');
			return $query->result_array();
		}
	
		$query = $this->db->get_where('images', array('sno' => $sno));
		return $query->row_array();
	}
	
	public function set_images($data)
	{
		$image_path = 'uploads/image/'.$data["upload_data"]["file_name"];
		return $this->db->insert('images', array('image' => $image_path));
	}
}