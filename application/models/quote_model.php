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

		$quote_id = '';
		if (isset($person_data['quote_id'])){
			$quote_id = $person_data['quote_id'];
		}

		$benefit_amount = '';
		if (isset($person_data['benefit_amount'])){
			$benefit_amount = $person_data['benefit_amount'];
		}


		$benefit_period = '';
		if (isset($person_data['benefit_period'])){
			$benefit_period = $person_data['benefit_period'];
		}

		$health_care_day1 = '';
		if (isset($person_data['health_care_day1'])){
			$health_care_day1 = $person_data['health_care_day1'];
		}
		

		$shared_care = '';
		if (isset($person_data['shared_care'])){
			$shared_care = $person_data['shared_care'];
		}

		$return_of_premium = '';
		if (isset($person_data['return_of_premium'])){
			$return_of_premium = $person_data['return_of_premium'];
		}

		$note = '';

		$note .= 'Benef:';
		
		$note .= 'Amo '.$benefit_amount.'.';
		
		$note .= 'Period ';
		if (is_array($benefit_period)){
			foreach ($benefit_period as $period) {
				$note .= $period['value'].' ';
			}
		}else{
			$note .= $benefit_period;
		}
		$note .='.';

		if ($health_care_day1=='1'){
			$note .= 'HealthCareDay1:Yes.';
		}else{
			$note .= 'HealthCareDay1:No.';
		}

		if ($shared_care=='1'){
			$note .= 'SharedCoverage:Yes.';
		}else{
			$note .= 'SharedCoverage:No.';
		}

		if ($return_of_premium=='1'){
			$note .= 'RetPremium:Yes.';
		}else{
			$note .= 'RetPremium:No.';
		}


		$data_to_insert = array(
			'id' => $quote_id,
			'submitted' => 1,
			'note' => $note
		);

		$this->db->insert('io_new_lead_notes', $data_to_insert); 

	}

}