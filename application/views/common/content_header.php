	<div class="row clearfix">
		<div class="col-md-12 column">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> 
					 	<span class="sr-only">Toggle navigation</span>
					 	<span class="icon-bar"></span>
					 	<span class="icon-bar"></span>
					 	<span class="icon-bar"></span>
					 </button> 
					 <a class="" href="<?php echo base_url();?>">
					 	<img src="<?php echo base_url();?>img/<?if (isset($state)){ echo strtolower($state).'-logo';}else{echo "logo";}?>.png" style="margin-left:10px;">
					 </a>
				</div>strtolower
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="<?if (isset($section) AND $section=='cost-of-long-term-care'){ echo 'active';}?> ">
							<a href="<?php echo base_url();?>cost-of-long-term-care.html">Cost of Care</a>
						</li>
						<li class="<?if (isset($section) AND $section=='state-assistance'){ echo 'active';}?> ">
							<a href="<?php echo base_url();?>state-assistance.html">State Assistance</a>
						</li>
						<li class="<?if (isset($section) AND $section=='reviews'){ echo 'active';}?> ">
							<a href="<?php echo base_url();?>reviews.html">Reviews</a>													
						</li>
						<li class="<?if (isset($section) AND $section=='companies'){ echo 'active';}?> ">
							<a href="<?php echo base_url();?>companies.html">Companies</a>						
						</li>							
						<li class="<?if (isset($section) AND $section=='blogs'){ echo 'active';}?> ">
							<a href="<?php echo base_url();?>blogs.html">Blogs</a>						
						</li>					
					</ul>

				</div>
				
			</nav>
		</div>
	</div>