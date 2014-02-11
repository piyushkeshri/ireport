<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:  iReport Model
*
* Author:  Intel Web Coders
* 		   
*
*
*/

class ireport_model extends CI_Model
{

	public function upload_report($upload_data, $severity, $category, $title)
	{
            
		foreach ($upload_data as $item => $value):
                    if ($item == "file_name") {$title = $value;}
                endforeach; 

                $gps = 100;
                $latestSID = 0;
                $userID = "karthipd";
                
    
                $data = array(
                        'username' => $userID,
                        'title' => $title,
                        'gps' => $gps,
                        'latestSID' => $latestSID,
                        'category' => $category,
                	'severity' => $severity,
                	'imagePath' => $title
                );

	        if(!($this->db->insert('report_table', $data)))
                   { echo "Insertion error into Report Table";
                     return -1;
                   }
                return $this->db->insert_id();                
	}
        
        public function upload_status($reportID, $desc)
	{            
		$data = array(
                        'reportID' => $reportID,
                        'description' => $desc
                );

	        if(!($this->db->insert('status_table', $data)))
                   { echo "Insertion error into Status Table";
                     return -1;
                   }
                return $this->db->insert_id();                
	}
        
        public function update_report($reportID,$statusID)
	{            
	        $data = array(
                  'latestSID' => $statusID
                );

                $this->db->where('reportID', $reportID);
                $this->db->update('report_table', $data);
                return;              
	}
        
        public function validate_reportID($reportID)
        {
            $query = $this->db->get_where('report_table', array('reportID' => $reportID));
            if ($query == NULL)
                return false;
            
            foreach ($query->row_array() as $item => $value):
               if ($item == "latestSID") {$status = $value;}
            endforeach;
        
            if ($status < 0)
                return false;
            
            return true;
        }
        
        public function view_reports($username,$criteria,$value) {
            //Create database and ensure you have data
            // Write a look to retrieve all the data
            // Play with different search criteria - SQL queries ?
            // Pretty Print the data
            // Coded by Vivek
       
            //echo $username."\n";
            //echo $criteria."\n";
            //echo $value;
       
            if($criteria == "category") {
                $query = $this->db->get_where('report_table', array('category' => $value));
            }
            elseif ($criteria == "severity") {
                $query = $this->db->get_where('report_table', array('severity' => $value));
            }
            elseif ($criteria == "gps") {
                $query = $this->db->get_where('report_table', array('gps' => $value));
            }
       
            return $query->result_array();
        }
   
}

?>