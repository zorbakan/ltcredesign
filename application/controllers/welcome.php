<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index($section='landing'){
		
		//This has to be detected by a script
		$options = array();
		$options['state'] = 'florida';
		$options['city'] = 'Jacksonville';

		$data = get_section_vars($section,$options);
		if ($data['error']){
			var_dump($data);
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