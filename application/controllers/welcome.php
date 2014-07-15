<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index($section='landing'){
		
		if ($_SERVER['HTTP_USER_AGENT'] !='Amazon CloudFront'){
			//show_404();
			//return false;
		}


		$options = array();
		$calculated_state = $this->get_current_state_from_url();
		if ($calculated_state=='' || strpos($calculated_state, 'ltctree')!==false || strpos($calculated_state, 'localhost')!==false){
			$calculated_state = 'florida';
		}
		$options['state'] = $calculated_state;			
		//$options['city'] = 'Jacksonville';

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

	private function get_current_state_from_url(){
		$url_array=parse_url($this->selfURL());
	  $host_array=explode('.', $url_array['host']);
	  return $host_array[0]; 
	}

	private function selfURL(){ 
	    $s = empty($_SERVER["HTTPS"]) ? '' : ($_SERVER["HTTPS"] == "on") ? "s" : ""; 
	    $protocol = $this->strleft(strtolower($_SERVER["SERVER_PROTOCOL"]), "/").$s; 
	    $port = ($_SERVER["SERVER_PORT"] == "80") ? "" : (":".$_SERVER["SERVER_PORT"]); 
	    return $protocol."://".$_SERVER['SERVER_NAME'].$port.$_SERVER['REQUEST_URI']; 
	} 

	private function strleft($s1, $s2) { 
		return substr($s1, 0, strpos($s1, $s2)); 
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */