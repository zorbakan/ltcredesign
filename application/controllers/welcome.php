<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		
		//Could be: landing, state_assistance, reviews, companies, blogs
		//For the moment just working 'landing'
		$section = 'landing';

		$data = get_section_vars($section);
		if ($data['error']){
			show_404();
		}else{
			$this->load->view('_template',$data);			
		}

	}

	public function landing(){
		$this->load->view('landing');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */