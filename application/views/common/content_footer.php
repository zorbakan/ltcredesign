	<div class="row clearfix">
		<div class="col-md-6 column">
			<blockquote>
				<p>
					<?php
					if (isset($testimonial_text)){
						echo $testimonial_text;
					}
					?>
				</p> 
				<small>
				<?php
				if (isset($testimonial_name)){
					echo $testimonial_name;
				}
				?>
				</small>
			</blockquote>
		</div>
		<div class="col-md-6 column">
			 <address> <strong>LTC</strong><br>
			 	<?php
				if (isset($address)){
					echo $address;
				}
				?>
				<br>
				<abbr title="Phone">P:</abbr>
				<?php
				if (isset($phone)){
					echo $phone;
				}
				?>
			</address>
		</div>
	</div>