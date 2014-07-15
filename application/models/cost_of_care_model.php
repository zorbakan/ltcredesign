<?php
class cost_of_care_model extends CI_Model{
	
	public function __construct()	{
	   parent::__construct();
	}

	public function get_points_info(){
		$where = array('home >' => 0);
		$query = $this->db->get_where('cost_of_care',$where);
		$results = $query->result_array();
		return $results;
	}

}