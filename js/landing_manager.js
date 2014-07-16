function LandingPageManager(){
	var self = this;
	self.current_form_step = 1;
	self.last_from_step = 4;
	self.quote_form = [];
	self._map_manager_ = {};

	this.init = function() {
		self.bind_handlers();
		self.reset_form_modal();
		self.initialize_quote_form_data();
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

		self.quote_form.push(step_1);
		self.quote_form.push(step_2);
		self.quote_form.push(step_3);
		self.quote_form.push(step_4);

		$('#form-quote-modal').find('option').each(function() {
			if ($(this).text().toLowerCase() == CURRENT_STATE.toLowerCase()){
				$(this).parent().val($(this).val());
				console.log($(this).text());
			}
		});
		$('#form-Age').val('55');
		$('#spouse-Age').val('55');
		

	};

	this.bind_handlers = function() {
		$('#multipage-form-next').on('click',self.try_move_form_next);
		$('input[name="marital_status"]').on('change',function() {
			if ($(this).val()=='married'){
				$('#spouse_panel').slideDown('fast');
			}else{
				$('#spouse_panel').slideUp('fast');
			}
		});
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
			self.current_form_step++;
			self.update_quote_progress_bar();
			self.submit_form_data_to_server();
			self.hide_form_modal();
			self.reset_form_modal();
		}
	};

	self.hide_form_modal = function() {
		$('#form-quote-elem').hide();
		$('#form-quote-modal').find('.modal-body').append('<h1 id="temp-msg">Quote Request Complete.</h1>');
		setTimeout(function(){
			$('#form-quote-modal').modal('hide');
			$('#temp-msg').remove();
			$('#form-quote-elem').show();
			self.reset_form_modal();
		},2500);
	};

	this.validate_form_current_step = function() {
		var valid = true;

		var current_step = self.current_form_step;

		switch(current_step) {
			case 1:
				//Nothing to Check
				break;
			case 2:
				if (!$("input[name='marital_status']:checked").val()){
					$("input[name='marital_status']").closest('.form-group').addClass('has-error');
					if ($("input[name='marital_status']").closest('.form-group').find('.help-block').length>0){
						$("input[name='marital_status']").closest('.form-group').find('.help-block').remove();
					}
					$("input[name='marital_status']").closest('.form-group').children(':first').append('<span class="help-block">You have to select your Marital Status</span>');
					valid = false;
				}else{
					if ($("input[name='marital_status']:checked").val()=='married'){
						if($('#spouse-name').val()==''){
							$("input[name='marital_status']").closest('.form-group').addClass('has-error');
							if ($("input[name='marital_status']").closest('.form-group').find('.help-block').length>0){
								$("input[name='marital_status']").closest('.form-group').find('.help-block').remove();
							}
							$("input[name='marital_status']").closest('.form-group').children(':first').append('<span class="help-block">You have to fill the Spouse Name</span>');
							valid = false;
						}else{
							$("input[name='marital_status']").closest('.form-group').removeClass('has-error');
							$("input[name='marital_status']").closest('.form-group').find('.help-block').remove();
						}
					}else if($("input[name='marital_status']:checked").val()=='other'){
						if($('#marital_other_text').val()==''){
							$("input[name='marital_status']").closest('.form-group').addClass('has-error');
							if ($("input[name='marital_status']").closest('.form-group').find('.help-block').length>0){
								$("input[name='marital_status']").closest('.form-group').find('.help-block').remove();
							}
							$("input[name='marital_status']").closest('.form-group').children(':first').append('<span class="help-block">You have to fill the other marital status</span>');
							valid = false;
						}else{
							$("input[name='marital_status']").closest('.form-group').removeClass('has-error');
							$("input[name='marital_status']").closest('.form-group').find('.help-block').remove();
						}
					}else{
						$("input[name='marital_status']").closest('.form-group').removeClass('has-error');
						$("input[name='marital_status']").closest('.form-group').find('.help-block').remove();
					}
				}
				break;
			case 3:
				var first_name = $.trim($('#first-name').val());
				if (first_name==''){
					$('#first-name').closest('.form-group').addClass('has-error');
					if ($('#first-name').closest('.form-group').find('.help-block').length==0){
						$('#first-name').after('<span class="help-block">You have to fill your first name</span>');				
					}
					valid = false;
				}else{
					$('#first-name').closest('.form-group').removeClass('has-error');
					$('#first-name').closest('.form-group').find('.help-block').remove();
				}

				var last_name = $.trim($('#last-name').val());
				if (last_name==''){
					$('#last-name').closest('.form-group').addClass('has-error');
					if ($('#last-name').closest('.form-group').find('.help-block').length==0){
						$('#last-name').after('<span class="help-block">You have to fill your last name</span>');				
					}
					valid = false;
				}else{
					$('#last-name').closest('.form-group').removeClass('has-error');
					$('#last-name').closest('.form-group').find('.help-block').remove();
				}

				var address = $.trim($('#address').val());
				if (address==''){
					$('#address').closest('.form-group').addClass('has-error');
					if ($('#address').closest('.form-group').find('.help-block').length==0){
						$('#address').after('<span class="help-block">You have to fill your address</span>');				
					}
					valid = false;
				}else{
					$('#address').closest('.form-group').removeClass('has-error');
					$('#address').closest('.form-group').find('.help-block').remove();
				}

				var city = $.trim($('#city').val());
				if (city==''){
					$('#city').closest('.form-group').addClass('has-error');
					if ($('#city').closest('.form-group').find('.help-block').length==0){
						$('#city').after('<span class="help-block">You have to fill your city</span>');				
					}
					valid = false;
				}else{
					$('#city').closest('.form-group').removeClass('has-error');
					$('#city').closest('.form-group').find('.help-block').remove();
				}

				var zip = $.trim($('#zip').val());
				if (zip==''){
					$('#zip').closest('.form-group').addClass('has-error');
					if ($('#zip').closest('.form-group').find('.help-block').length==0){
						$('#zip').after('<span class="help-block">You have to fill your ZIP Code</span>');				
					}
					valid = false;
				}else{
					$('#zip').closest('.form-group').removeClass('has-error');
					$('#zip').closest('.form-group').find('.help-block').remove();
				}

				var phone_number = $.trim($('#phone-number').val());
				if (phone_number==''){
					$('#phone-number').closest('.form-group').addClass('has-error');
					if ($('#phone-number').closest('.form-group').find('.help-block').length==0){
						$('#phone-number').after('<span class="help-block">You have to fill your Phone Number</span>');				
					}
					valid = false;
				}else{
					$('#phone-number').closest('.form-group').removeClass('has-error');
					$('#phone-number').closest('.form-group').find('.help-block').remove();
				}

				var email_address = $.trim($('#email-address').val());
				if (!self.validateEmail(email_address)){
					$('#email-address').closest('.form-group').addClass('has-error');
					if ($('#email-address').closest('.form-group').find('.help-block').length==0){
						$('#email-address').after('<span class="help-block">You have to enter a valid Email Address</span>');				
					}
					valid = false;
				}else{
					$('#email-address').closest('.form-group').removeClass('has-error');
					$('#email-address').closest('.form-group').find('.help-block').remove();
				}
				break;
			default:
				//default code block
		} 


		console.log(valid);
		return valid;
	};

	this.validateEmail = function(email) { 
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
	} 


	this.update_quote_progress_bar = function() {
		var current_progress_percent = $('#form-quote-progress-bar').attr('aria-valuenow');
		var updated_progress = Math.round(((self.current_form_step-1)/self.last_from_step)*100)
		$('#form-quote-progress-bar').attr('aria-valuenow',updated_progress);
		$('#form-quote-progress-bar').css('width',updated_progress+'%');
		$('#form-quote-progress-bar').text(updated_progress+'% complete');
	};


	this.submit_current_step = function() {
		var current_step = self.current_form_step;
		switch(current_step) {
			case 1:
				self.quote_form[current_step-1]['age'] = $('#form-Age').val();
				self.quote_form[current_step-1]['state'] = $('#form-State').val();
			  $('#state-step3').val($('#form-State option:selected').text());
			  break;
			case 2:
			  self.quote_form[current_step-1]['prescripted_med'] = ($('#prescripted_med_checkbox').is(':checked')) ? '1' : '0';
				self.quote_form[current_step-1]['non_smoker'] = ($('#non_smoker_checkbox').is(':checked')) ? '1' : '0';
				self.quote_form[current_step-1]['hosp_last_5_years'] = ($('#hosp_last_5_years_checkbox').is(':checked')) ? '1' : '0';

			  var marital_status = $("input[name='marital_status']:checked").val();
			  if (marital_status=='other'){
			  	self.quote_form[current_step-1]['marital_status'] = $('#marital_other_text').val();
			  }else{
			  	self.quote_form[current_step-1]['marital_status'] = marital_status;
			  	if (marital_status=='married'){
			  		self.quote_form[current_step-1]['spouse_name'] = $('#spouse-name').val();
			  		self.quote_form[current_step-1]['spouse_age'] = $('#spouse-Age').val();
			  	}
			  }
			  break;
			case 3:
				self.quote_form[current_step-1]['first_name'] = $('#first-name').val();
				self.quote_form[current_step-1]['last_name'] = $('#last-name').val();
				self.quote_form[current_step-1]['address'] = $('#address').val();
				self.quote_form[current_step-1]['city'] = $('#city').val();
				self.quote_form[current_step-1]['zip'] = $('#zip').val();
				self.quote_form[current_step-1]['phone'] = $('#phone-number').val();
				self.quote_form[current_step-1]['email'] = $('#email-address').val();
				self.preliminary_submit_to_server();
				break;
			case 4:
				self.quote_form[current_step-1]['benefit_amount'] = $("input[name='benefit_amount']:checked").val();
				self.quote_form[current_step-1]['benefit_period'] = ($('#benefit_periods').find("input:checked" ).length>0) ? $('#benefit_periods').find("input:checked" ).serializeArray() : '';
				self.quote_form[current_step-1]['return_of_premium'] = ($('input[name="returnofpremium"]').is(':checked')) ? '1' : '0';
				self.quote_form[current_step-1]['health_care_day1'] = ($('input[name="careday1"]').is(':checked')) ? '1' : '0';
				self.quote_form[current_step-1]['shared_care'] = ($('input[name="sharedcoverage"]').is(':checked')) ? '1' : '0';
				break;
			default:
				break;		
		} 
	};

	this.preliminary_submit_to_server = function() {
		var datasubmited = $.extend({}, self.quote_form[0], self.quote_form[1], self.quote_form[2]);
		var ws = {
			type: 'POST',
			dataType : "json",
			data: datasubmited,
			complete : self.preliminary_submit_to_server_ok,
			url : BASE_URL+"quote/post_preliminary"
		}
		$.ajax(ws);
	};

	this.preliminary_submit_to_server_ok = function(data) {

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
		self.current_form_step = 1;
	};

	this.submit_form_data_to_server = function() {
		var datasubmited = $.extend({}, self.quote_form[0], self.quote_form[1], self.quote_form[2], self.quote_form[3]);
		var ws = {
			type: 'POST',
			dataType : "json",
			data: datasubmited,
			complete : self.submit_to_server_ok,
			url : BASE_URL+"quote/post_final"
		}
		$.ajax(ws);
	};
}

var _LPM_ = new LandingPageManager();
$(document).ready(_LPM_.init);