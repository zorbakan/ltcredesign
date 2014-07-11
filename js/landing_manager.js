function LandingPageManager(){
	var self = this;
	self.current_form_step = 1;
	self.last_from_step = 3;
	self.quote_form = [];

	this.init = function() {
		self.bind_handlers();
		self.initialize_quote_form_data();
		self.reset_form_modal();
	};

	this.initialize_quote_form_data = function() {
		var step_1 = {
			age: '',
			state: ''
		}

		var step_2 = {
			non_smoker : '',
			hosp_last_5_years : '',
			prescripted_med : '',
			marital_status : '',
			spouse_name : '',
			spouse_age : ''
		}

		var step_3 = {
			first_name : '',
			last_name : '',
			address : '',
			city : '',
			zip : '',
			phone : '',
			email : ''
		}

		var step_4 = {
			benefit_amount : '', //i.e. 100/day
			benefit_period : '', //in years
			return_of_premium : '',
			health_care_day1 : '',
			shared_care : ''
		}
	};

	this.bind_handlers = function() {
		$('#multipage-form-next').on('click',self.try_move_form_next);
	};

	this.try_move_form_next = function() {
		if (!self.validate_form_current_step()){
			return false;
		}
		self.submit_current_step();
		
		if (self.current_form_step<self.last_from_step){
			self.hide_current_step();
			self.show_next_step();
			self.current_form_step++;
			self.update_quote_progress_bar();
		}else{
			self.submit_form_data_to_server();
			self.hide_form_modal();
			self.reset_form_modal();
		}
	};

	this.update_quote_progress_bar = function() {

	};

	this.validate_form_current_step = function() {
		return true;
	};

	this.submit_current_step = function() {

	};

	this.hide_current_step = function() {
		$('#form-quote-elem').children('.form-step'+self.current_form_step).hide();
	};	

	this.show_next_step = function() {
		$('#form-quote-elem').children('.form-step'+(self.current_form_step+1)).show();
	};

	this.show_prev_step = function() {
		$('#form-quote-elem').children('.form-step'+(self.current_form_step-1)).show();
	};

	this.reset_form_modal = function() {
		$('#form-quote-modal').find('input[type="text"]').val('');
		$('#form-quote-modal').find('input[type="checkbox"]').prop('checked',false);
		$('#form-quote-modal').find('input[type="radio"]').prop('checked',false);
		$('#form-quote-modal').find('option').prop('selected',false);
		$('#form-quote-elem').children('.form-group').hide();
		$('#spouse_panel').hide();
		$('#form-navigation-container').show();
		$('#form-quote-elem').children('.form-step1').show();
	};

	this.submit_form_data_to_server = function() {

	};
}

var _LPM_ = new LandingPageManager();
$(document).ready(_LPM_.init);