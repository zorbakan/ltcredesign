<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cost_of_care extends CI_Controller {

	public function __construct()	{
	   parent::__construct();
	   $this->load->model('cost_of_care_model');
	}

	public function index(){
		show_404();
	}

	public function get_map_points(){
		$response = array();
		$response['result'] = 'ok';
		$response['map_points'] = $this->cost_of_care_model->get_points_info();
		echo json_encode($response);
	}

}
