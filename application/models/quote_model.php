<?php
class quote_model extends CI_Model{
	
	public function __construct()	{
	   parent::__construct();
	}

	public function add_quote_request($person_data){
		$first = '';
		if (isset($person_data['first_name'])){
			$first = $person_data['first_name'];
		}

		$last = '';
		if (isset($person_data['last_name'])){
			$last = $person_data['last_name'];
		}

		$address = '';
		if (isset($person_data['address'])){
			$address = $person_data['address'];
		}

		$city = '';
		if (isset($person_data['city'])){
			$city = $person_data['city'];
		}

		$state = '';
		if (isset($person_data['state'])){
			$state = $person_data['state'];
		}

		$email = '';
		if (isset($person_data['email'])){
			$email = $person_data['email'];
		}

		$phone = '';
		if (isset($person_data['phone'])){
			$phone = $person_data['phone'];
		}

		$zip = '';
		if (isset($person_data['zip'])){
			$zip = $person_data['zip'];
		}


		$spouse = '';
		if (isset($person_data['spouse_name'])){
			$spouse = $person_data['spouse_name'];
		}

		$age = '';
		if (isset($person_data['age'])){
			$age = $person_data['age'];
		}

		$age_spouse = '';
		if (isset($person_data['spouse_age'])){
			$age_spouse = $person_data['spouse_age'];
		}

		$owner = 'Drew Nichols';


		$data_to_insert = array(
			'first' => $first,
			'last' => $last,
			'address' => $address,
			'city' => $city,
			'state' => $state,
			'email' => $email,
			'spouse' => $spouse,
			'age' => $age,
			'phone' => $phone,
			'zip' => $zip,
			'age_spouse' => $age_spouse,
			'owner' => $owner
		);

		$this->db->insert('io_new_lead', $data_to_insert); 
		$quote_id = $this->db->insert_id();
		return $quote_id;
	}

	public function add_final_quote_request($person_data){
		$first = '';
		if (isset($person_data['first_name'])){
			$first = $person_data['first_name'];
		}

		$last = '';
		if (isset($person_data['last_name'])){
			$last = $person_data['last_name'];
		}

		$address = '';
		if (isset($person_data['address'])){
			$address = $person_data['address'];
		}

		$city = '';
		if (isset($person_data['city'])){
			$city = $person_data['city'];
		}

		$state = '';
		if (isset($person_data['state'])){
			$state = $person_data['state'];
		}

		$email = '';
		if (isset($person_data['email'])){
			$email = $person_data['email'];
		}

		$phone = '';
		if (isset($person_data['phone'])){
			$phone = $person_data['phone'];
		}

		$zip = '';
		if (isset($person_data['zip'])){
			$zip = $person_data['zip'];
		}


		$spouse = '';
		if (isset($person_data['spouse_name'])){
			$spouse = $person_data['spouse_name'];
		}

		$age = '';
		if (isset($person_data['age'])){
			$age = $person_data['age'];
		}

		$age_spouse = '';
		if (isset($person_data['spouse_age'])){
			$age_spouse = $person_data['spouse_age'];
		}

		$owner = 'Drew Nichols';


		$data_to_insert = array(
			'first' => $first,
			'last' => $last,
			'address' => $address,
			'city' => $city,
			'state' => $state,
			'email' => $email,
			'spouse' => $spouse,
			'age' => $age,
			'phone' => $phone,
			'zip' => $zip,
			'age_spouse' => $age_spouse,
			'owner' => $owner
		);

		$this->db->insert('io_new_lead', $data_to_insert); 

	}

}