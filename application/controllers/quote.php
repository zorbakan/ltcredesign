<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quote extends CI_Controller {

	public function __construct()	{
	   parent::__construct();
	   $this->load->model('quote_model');
	}

	public function index(){
		show_404();
	}

	public function post_preliminary(){
		$response = array();
		$response['result'] = 'ok';
		$this->quote_model->add_quote_request($this->input->post(NULL, TRUE));
		echo json_encode($response);
	}

	public function post_final(){
		$response = array();
		$response['result'] = 'ok';
		echo json_encode($response);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */