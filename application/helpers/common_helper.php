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
		$data['content_vars']['state'] = $options['state'];
		$data['content_vars']['content_load_from_db'] = false;
		$data['error'] = false;

		//Common Data Retrieving
		$where_clauses = array();
		$where_clauses['state'] = $options['state'];
		$query = $CI->db->get_where('main', $where_clauses);
		$results = $query->result_array();
		if (count($results)==0){
			$data['error'] = true;
			$data['query_res'] = $results;
			$data['section'] = $section;
		}else{
			$data['content_vars']['address'] = $results[0]['address'];
			$data['content_vars']['headline'] = $results[0]['headline'];
			$data['content_vars']['body'] = $results[0]['body'];
			$data['content_vars']['image_url'] = $results[0]['image_url'];
			$data['content_vars']['license'] = $results[0]['license'];
		}

		$where_clauses = array();
		$where_clauses['state'] = $options['state'];
		$where_clauses['city'] = $options['city'];
		$query = $CI->db->get_where('phones', $where_clauses);
		$results = $query->result_array();
		if (count($results)==0){
			$data['content_vars']['phone'] = '';
		}else{
			$data['content_vars']['phone'] = $results[0]['phone'];
		}

		$where_clauses = array();
		$where_clauses['state'] = $options['state'];
		$where_clauses['city'] = $options['city'];
		$query = $CI->db->get_where('testimonials', $where_clauses);
		$results = $query->result_array();
		if (count($results)==0){
			$data['content_vars']['phone'] = '';
		}else{
			$data['content_vars']['testimonial_text'] = $results[0]['testimonial'];
			$data['content_vars']['testimonial_name'] = $results[0]['name'];
		}
		
		switch ($section) {
			case 'landing':
				$data['header_vars']['title'] = 'Florida Long Term Care Insurance';		
				$data['content_vars']['content_body'] = false;
				$data['content_vars']['content_load_from_db'] = false;
				break;
			case 'reviews':
			case 'companies':	
			case 'state-assistance':
			case 'blogs':
			case 'cost-of-long-term-care':
				$data['content_vars']['content_load_from_db'] = true;
				$where_clauses = array();
				$where_clauses['state'] = $options['state'];
				$where_clauses['slug'] = $section;
				$query = $CI->db->get_where('content', $where_clauses);
				$results = $query->result_array();
				if (count($results)==0){
					$data['error'] = true;
					$data['query_res'] = $results;
					$data['section'] = $section;
				}else{
					$data['content_vars']['content_body'] = $results[0]['content'];
					$data['header_vars']['title'] = $results[0]['title'];	
				}
				break;			
			default:
				$data['error'] = true;
				break;
		}		

		return $data;
	}
}