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
		$state = $this->input->post('state');
		if ($state){
			$map_points = $this->cost_of_care_model->get_points_info_by_state($state);
		}else{
			$map_points = $this->cost_of_care_model->get_points_info();
		}
		$response['map_points'] = $map_points;
		echo json_encode($response);
	}

}
