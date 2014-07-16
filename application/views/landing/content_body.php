	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="jumbotron">
			
				<h1>
					One Stop Shopping.

				</h1>
				<img class="img-responsive pull-right" src="<?php echo base_url();?>img/LongTermCare-companies.png" alt="Compare Top Companies" \>	

				
				<p>
					<?php
					if (isset($headline)){
						echo $headline;
					}
					?>
				</p>
				<p>
					<a class="btn btn-primary btn-large" id="modal-793572" href="#form-quote-modal" data-toggle="modal" data-backdrop="static" data-keyboard="false">Start Free Quote Now »</a>
					<div class="clearfix"></div>
				</p>
				
				<h2>Quote by phone</h2> 
				<p><?php // echo ucfirst($state); 
					?>
					<?php 
					foreach ($phones as $a_phone_record) {
						echo $a_phone_record['city'].': '.$a_phone_record['phone'].'<br>';
					}
					?>
				</p>

			</div>
			<div class="modal fade" id="form-quote-modal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h4 class="modal-title" id="myModalLabel">
								<span class="glyphicon glyphicon-play"></span>  Free Comparison Quote
							</h4>
						</div>
						<div class="modal-body">
						<form class="form-horizontal" id="form-quote-elem" role="form" autocomplete="false">						
						  <div class="form-group form-step1">
						    <label for="form-Age" class="col-sm-2 control-label">Age</label>
						    <div class="col-sm-10">
									<select class="form-control" id="form-Age" autocomplete="false">
										<option value="40">40</option>
										<option value="41">41</option>
										<option value="42">42</option>
										<option value="43">43</option>
										<option value="44">44</option>
										<option value="45">45</option>
										<option value="46">46</option>
										<option value="47">47</option>
										<option value="48">48</option>
										<option value="49">49</option>
										<option value="50">50</option>
										<option value="51">51</option>
										<option value="52">52</option>
										<option value="53">53</option>
										<option value="54">54</option>
										<option value="55">55</option>
										<option value="56">56</option>
										<option value="57">57</option>
										<option value="58">58</option>
										<option value="59">59</option>
										<option value="60">60</option>
										<option value="61">61</option>
										<option value="62">62</option>
										<option value="63">63</option>
										<option value="64">64</option>
										<option value="65">65</option>
										<option value="66">66</option>
										<option value="67">67</option>
										<option value="68">68</option>
										<option value="69">69</option>
										<option value="70">70</option>
										<option value="71">71</option>
										<option value="72">72</option>
										<option value="73">73</option>
										<option value="74">74</option>
										<option value="75">75</option>
									</select>
						    </div>
						  </div>							
						  <div class="form-group form-step1">
						    <label for="form-State" class="col-sm-2 control-label">State</label>
						    <div class="col-sm-10">
									<select name="state" class="form-control" id="form-State" autocomplete="false">
										<option value="AL">Alabama</option>
										<option value="AK">Alaska</option>
										<option value="AZ">Arizona</option>
										<option value="AR">Arkansas</option>
										<option value="CA">California</option>
										<option value="CO">Colorado</option>
										<option value="CT">Connecticut</option>
										<option value="DE">Delaware</option>
										<option value="DC">District Of Columbia</option>
										<option value="FL">Florida</option>
										<option value="GA">Georgia</option>
										<option value="HI">Hawaii</option>
										<option value="ID">Idaho</option>
										<option value="IL">Illinois</option>
										<option value="IN">Indiana</option>
										<option value="IA">Iowa</option>
										<option value="KS">Kansas</option>
										<option value="KY">Kentucky</option>
										<option value="LA">Louisiana</option>
										<option value="ME">Maine</option>
										<option value="MD">Maryland</option>
										<option value="MA">Massachusetts</option>
										<option value="MI">Michigan</option>
										<option value="MN">Minnesota</option>
										<option value="MS">Mississippi</option>
										<option value="MO">Missouri</option>
										<option value="MT">Montana</option>
										<option value="NE">Nebraska</option>
										<option value="NV">Nevada</option>
										<option value="NH">New Hampshire</option>
										<option value="NJ">New Jersey</option>
										<option value="NM">New Mexico</option>
										<option value="NY">New York</option>
										<option value="NC">North Carolina</option>
										<option value="ND">North Dakota</option>
										<option value="OH">Ohio</option>
										<option value="OK">Oklahoma</option>
										<option value="OR">Oregon</option>
										<option value="PA">Pennsylvania</option>
										<option value="RI">Rhode Island</option>
										<option value="SC">South Carolina</option>
										<option value="SD">South Dakota</option>
										<option value="TN">Tennessee</option>
										<option value="TX">Texas</option>
										<option value="UT">Utah</option>
										<option value="VT">Vermont</option>
										<option value="VA">Virginia</option>
										<option value="WA">Washington</option>
										<option value="WV">West Virginia</option>
										<option value="WI">Wisconsin</option>
										<option value="WY">Wyoming</option>
									</select>
						    </div>
						  </div>
						  <div class="form-group form-step2">
						  	<div class="col-sm-offset-2 col-sm-10">
								  <div class="checkbox">
										<label><input type="checkbox" id="prescripted_med_checkbox"/> I take Medications</label>
									</div>
									<div class="checkbox">
										<label><input type="checkbox" id="non_smoker_checkbox"/> Yes, I’m a non-smoker</label>
									</div>
									<div class="checkbox">
										<label><input type="checkbox" id="hosp_last_5_years_checkbox"/> I’ve been hospitalized in past 5 years</label>
									</div>
								</div>
							</div>
							<div class="form-group form-step2">
						  	<div class="col-sm-offset-2 col-sm-10">
									<div class="radio">
									  <label>
									    <input type="radio" name="marital_status" value="married" checked>
									    I’m married / have a partner
									  </label>
									</div>
									<div class="form-horizontal" id="spouse_panel">
										<div class="form-group">
									    <label for="spouse-name" class="col-sm-4 control-label">Spouse Name:</label>
									    <div class="col-sm-8">
									      <input type="text" class="form-control" id="spouse-name" placeholder="Spouse Name">
									    </div>
									  </div>
									  <div class="form-group">
									    <label for="spouse-Age" class="col-sm-4 control-label">Spouse Age: </label>
									    <div class="col-sm-8">
										    <select class="form-control" id="spouse-Age" autocomplete="false">
													<option value="40">40</option>
													<option value="41">41</option>
													<option value="42">42</option>
													<option value="43">43</option>
													<option value="44">44</option>
													<option value="45">45</option>
													<option value="46">46</option>
													<option value="47">47</option>
													<option value="48">48</option>
													<option value="49">49</option>
													<option value="50">50</option>
													<option value="51">51</option>
													<option value="52">52</option>
													<option value="53">53</option>
													<option value="54">54</option>
													<option value="55">55</option>
													<option value="56">56</option>
													<option value="57">57</option>
													<option value="58">58</option>
													<option value="59">59</option>
													<option value="60">60</option>
													<option value="61">61</option>
													<option value="62">62</option>
													<option value="63">63</option>
													<option value="64">64</option>
													<option value="65">65</option>
													<option value="66">66</option>
													<option value="67">67</option>
													<option value="68">68</option>
													<option value="69">69</option>
													<option value="70">70</option>
													<option value="71">71</option>
													<option value="72">72</option>
													<option value="73">73</option>
													<option value="74">74</option>
													<option value="75">75</option>
												</select>
									    </div>
									  </div>
									</div>
									<div class="radio">
									  <label>
									    <input type="radio" name="marital_status" value="single" >
									    I’m single
									  </label>
									</div>
									<div class="radio">
									  <label>
									    <input type="radio" name="marital_status" value="other" >
									    Other 
									  </label>
									  <input type="text" id="marital_other_text" placeholder="Not Married Nor Single" value="">
									</div>
						  	</div>
							</div>
						  <div class="form-group form-step3">
						    <label for="first-name" class="col-sm-3 control-label">First Name</label>
						    <div class="col-sm-9">
						      <input type="text" class="form-control" id="first-name" placeholder="First Name">
						    </div>
						  </div>
						  <div class="form-group form-step3">
						    <label for="last-name" class="col-sm-3 control-label">Last Name</label>
						    <div class="col-sm-9">
						      <input type="text" class="form-control" id="last-name" placeholder="Last Name">
						    </div>
						  </div>
						  <div class="form-group form-step3">
						    <label for="address" class="col-sm-3 control-label">Address</label>
						    <div class="col-sm-9">
						      <input type="text" class="form-control" id="address" placeholder="Address">
						    </div>
						  </div>
						  <div class="form-group form-step3">
						    <label for="city" class="col-sm-3 control-label">City</label>
						    <div class="col-sm-9">
						      <input type="text" class="form-control" id="city" placeholder="City">
						    </div>
						  </div>
						  <div class="form-group form-step3">
						    <label for="state-step3" class="col-sm-3 control-label">State</label>
						    <div class="col-sm-9">
						      <input type="text" class="form-control" id="state-step3" value="" readonly="">
						    </div>
						  </div>
						  <div class="form-group form-step3">
						    <label for="zip" class="col-sm-3 control-label">ZIP</label>
						    <div class="col-sm-9">
						      <input type="text" class="form-control" id="zip" placeholder="ZIP">
						    </div>
						  </div>
						  <div class="form-group form-step3">
						    <label for="phone-number" class="col-sm-3 control-label">Phone Number</label>
						    <div class="col-sm-9">
						      <input type="text" class="form-control" id="phone-number" placeholder="Phone Number">
						    </div>
						  </div>
						  <div class="form-group form-step3">
						    <label for="email-address" class="col-sm-3 control-label">Email Address</label>
						    <div class="col-sm-9">
						      <input type="text" class="form-control" id="email-address" placeholder="Email Address">
						    </div>
						  </div>
						  <div class="form-group form-step4">
						  	<div class="col-sm-offset-2 col-sm-10">
						  		<legend>Daily / Monthly Benefit</legend>
									<div class="radio">
									  <label>
									    <input type="radio" name="benefit_amount" value="usd100day" checked>
									    $100/day or $3,000/mo
									  </label>
									</div>
									<div class="radio">
									  <label>
									    <input type="radio" name="benefit_amount" value="usd150day" checked>
									    $150/day or $4,500/mo
									  </label>
									</div>
									<div class="radio">
									  <label>
									    <input type="radio" name="benefit_amount" value="usd200day" checked>
									    $200/day or $6,000/mo
									  </label>
									</div>
									<div class="radio">
									  <label>
									    <input type="radio" name="benefit_amount" value="usd250day" checked>
									    $250/day or $7,500/mo
									  </label>
									</div>
									<div class="radio">
									  <label>
									    <input type="radio" name="benefit_amount" value="usd300day" checked>
									    $300/day or $9,000/mo
									  </label>
									</div>
								</div>
							</div>
							<div class="form-group form-step4">
						  	<div class="col-sm-offset-2 col-sm-10" id="benefit_periods">
						  		<legend>Benefit Period</legend>
									<div class="checkbox">
									  <label>
									    <input type="checkbox" name="2years" value="2years" checked>
									    2 Years
									  </label>
									</div>
									<div class="checkbox">
									  <label>
									    <input type="checkbox" name="3years" value="3years" checked>
									    3 Years
									  </label>
									</div>
									<div class="checkbox">
									  <label>
									    <input type="checkbox" name="5years" value="5years" checked>
									    5 Years
									  </label>
									</div>
									<div class="checkbox">
									  <label>
									    <input type="checkbox" name="10years" value="10years" checked>
									    10 Years
									  </label>
									</div>
									<div class="checkbox">
									  <label>
									    <input type="checkbox" name="unlimited" value="unlimited" checked>
									    Unlimited Benefit
									  </label>
									</div>
								</div>
							</div>
							<div class="form-group form-step4">
						  	<div class="col-sm-offset-2 col-sm-10">
						  		<legend>Options &amp; Riders</legend>
									<div class="checkbox">
									  <label>
									    <input type="checkbox" name="returnofpremium" value="returnofpremium" checked>
									    Return of Premium
									  </label>
									</div>
									<div class="checkbox">
									  <label>
									    <input type="checkbox" name="careday1" value="careday1" checked>
									    Home Health Care on Day 1 
									  </label>
									</div>
									<div class="checkbox">
									  <label>
									    <input type="checkbox" name="sharedcoverage" value="sharedcoverage" checked>
									    Shared Coverage 
									  </label>
									</div>
								</div>
							</div>
						  <div class="form-group" id="form-navigation-container">
						  	 <div class="col-sm-offset-2 col-sm-10">
						  	 	<a class="btn btn-success btn-large" id="multipage-form-next">Next »</a>
						  	 </div>
						  </div>							
						</form>
						</div>
						<div class="modal-footer">						
							<div class="progress">
							  <div id="form-quote-progress-bar" class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
							    0% Complete
							  </div>
							</div>
						</div>
					</div>					
				</div>
				
			</div>
			
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-4 column">
			<h2>
				Ratings
			</h2>
			<p>
				Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
			</p>
			<p>
				<a class="btn" href="#">View details »</a>
			</p>
		</div>
		<div class="col-md-4 column">
			<h2>
				Reviews
			</h2>
			<p>
				Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
			</p>
			<p>
				<a class="btn" href="#">View details »</a>
			</p>
		</div>
		<div class="col-md-4 column">
			<h2>
				Companies
			</h2>
			<p>
				Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
			</p>
			<p>
				<a class="btn" href="#">View details »</a>
			</p>
		</div>
	</div>