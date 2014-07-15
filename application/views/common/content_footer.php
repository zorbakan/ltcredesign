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
		<div class="col-md-6 column bg-primary">
			 <address> 
			 	<br>
			 	<strong>LTC</strong><br>
			 	<?php
				if (isset($address)){
					echo $address;
				}
				?>
				<br>				
				<?php
				if (isset($phones[0])){
					echo '<abbr title="Phone">P:</abbr>'.$phones[0]['phone'];
				}
				?>
			</address>
		</div>
	</div>
	<div class="row clearfix">
		<div class="clearfix col-sm-12">
			<legend>Articles</legend>
		</div>
	<?php
	if (isset($articles) AND count($articles)>0){
		$art_qty = count($articles);
		echo '<div class="col-md-4 column">';
		if ($art_qty>0){
			$temp_index = 0;
			while ($temp_index<$art_qty){
				echo '<p><a href="#">'.$articles[$temp_index]['title'].'</a></p>';
				$temp_index = $temp_index+3;
			}
		}
		echo '</div>';
		echo '<div class="col-md-4 column">';
		if ($art_qty>1){
			$temp_index = 1;
			while ($temp_index<$art_qty){
				echo '<p><a href="#">'.$articles[$temp_index]['title'].'</a></p>';
				$temp_index = $temp_index+3;
			}
		}
		echo '</div>';
		echo '<div class="col-md-4 column">';
		if ($art_qty>2){
			$temp_index = 2;
			while ($temp_index<$art_qty){
				echo '<p><a href="#">'.$articles[$temp_index]['title'].'</a></p>';
				$temp_index = $temp_index+3;
			}
		}
		echo '</div>';
	}
	?>
	</div>