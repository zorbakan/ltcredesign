	<div class="row clearfix">
		<div class="col-md-12 column">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="/"><img src="<?php echo base_url();?>img/logo.png"></a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="<?if (isset($section) AND $section=='landing'){ echo 'active';}?> ">
							<a href="#">Cost of Care</a>
						</li>
						<li class="<?if (isset($section) AND $section=='state_assistance'){ echo 'active';}?> ">
							<a href="#">State Assistance</a>
						</li>
						<li class="<?if (isset($section) AND $section=='reviews'){ echo 'active';}?> ">
							<a href="#">Reviews</a>	
												
						</li>
						<li class="<?if (isset($section) AND $section=='companies'){ echo 'active';}?> ">
							<a href="#">Companies</a>						
						</li>							
						<li class="<?if (isset($section) AND $section=='blogs'){ echo 'active';}?> ">
							<a href="#">Blogs</a>						
						</li>					
					</ul>

				</div>
				
			</nav>
		</div>
	</div>