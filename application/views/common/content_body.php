<?php
//Load Cost of Care Dom Elements
if (isset($section) AND $section=='cost-of-long-term-care'){?>
  <div class="row clearfix">
  	<div class="col-md-6 column">
  	<?if (isset($content_body)){
  		echo $content_body;
  	}?>
  	</div>
		<div class="col-md-6 column">
			<div id="map_container">
			</div>
		</div>
	</div>
<?}else{
		echo $content_body;
	}