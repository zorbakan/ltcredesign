<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('getMetaContent')){
	function get_section_vars($section,$options = null)	{
		//This is for calling to DB, etc
		$CI = &get_instance();

		$data = array();
		$data['header_vars'] = array();
		$data['content_vars'] = array();
		$data['content_vars']['section'] = $section;


		//Default Values
		$data['header_vars']['title'] = '';		
		$data['content_vars']['content_body'] = '';
		$data['content_vars']['content_load_from_db'] = false;
		$data['error'] = false;
		
		switch ($section) {
			case 'landing':
				$data['header_vars']['title'] = 'Florida Long Term Care Insurance';		
				$data['content_vars']['content_body'] = false;
				$data['content_vars']['content_load_from_db'] = false;
				break;			
			default:
				$data['error'] = true;
				break;
		}		

		return $data;
	}
}