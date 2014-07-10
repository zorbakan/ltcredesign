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
					<a class="btn btn-primary btn-large" id="modal-793572" href="#modal-container-793572" data-toggle="modal" data-backdrop="static" data-keyboard="false">Start Free Quote Now »</a>
					<div class="clearfix"></div>
				</p>
				
				<p>
					Quote by phone. <?php echo ucfirst($state); ?> : <?php echo $phone;?>
				</p>

			</div>
			<div class="modal fade" id="modal-container-793572" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h4 class="modal-title" id="myModalLabel">
								<span class="glyphicon glyphicon-play"></span>  Free Comparison Quote
							</h4>
						</div>
						<div class="modal-body">
						<form class="form-horizontal" role="form">
						
						
						  <div class="form-group">
						    <label for="Age" class="col-sm-2 control-label">Age</label>
						    <div class="col-sm-10">
							<select class="form-control" id="Age">
							  <option>40</option>
							  <option>50</option>
							  <option>55</option>
							  <option>65</option>
							  <option>75</option>
							</select>
						    </div>
						  </div>
							
							
						  <div class="form-group">
						    <label for="Age" class="col-sm-2 control-label">State</label>
						    <div class="col-sm-10">
							<select class="form-control" id="Age">
							  <option>Florida</option>
							  <option>Alabama</option>
							  <option>...</option>
							  <option>...</option>
							  <option>Wyoming</option>
							</select>
						    </div>
						  </div>
						  
						  <div class="form-group">
						  	 <div class="col-sm-offset-2 col-sm-10">
						  	 	<button type="submit" class="btn btn-success btn-large">Next »</button>
						  	 </div>
						  </div>
							
						</form>


						</div>
						<div class="modal-footer">
						
							<div class="progress">
							  <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
							    30% Complete
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